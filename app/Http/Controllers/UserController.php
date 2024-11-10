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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //logout user
        Auth::logout();

        //validate request

        //check if password == password_confirmation

        //update user
        $user->update([
            // 'password' => bcrypt($request->input("password")),
            'password' => $request->input("password"),
        ]);

        //login user
        Auth::login($user);

        //redirect
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
