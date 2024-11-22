<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\Role;
use App\Models\User;
use App\Notifications\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Protect the route from non-admin users
        if (Auth::user()->role->name !== 'admin') {
            return redirect()->route('product.index');
        }

        $users = User::all();
        $roles = Role::all();

        return view('user.index', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::all();

        return view('user.invite', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserFormRequest $request)
    {
        $validated = $request->validated();

        $token = Str::random(32);

        $user = User::create([...$validated, 'token' => $token]);

        $user->notify(new Invitation($token));

        return back()->with('message', 'Invitation sent!');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $token)
    {

        $user = User::where('token', $token)->firstOrFail();

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        Auth::logout();

        //validate request
        //check if password == password_confirmation
        $request->validate([
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password|min:8',
        ]);

        $user->update([
            'password' => $request->input("password"),
        ]);

        Auth::login($user);

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        // User::destroy($user->id);

        return redirect()->route('user.index')->with('message', 'User deleted!');
    }
}
