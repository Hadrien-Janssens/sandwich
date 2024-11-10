<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Notifications\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class InvitationController extends Controller
{
    public function create()
    {
        $roles = Role::all();
        return view('user.invite', compact('roles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'role_id' => 'required|exists:roles,id'
        ]);
        $token = Str::random(32);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'role_id' => request('role_id'),
            'token' => $token
        ]);

        $user->notify(new Invitation($token));
        // return (new Invitation($token))->toMail($user);


        return back()->with('message', 'Invitation sent!');
    }
}
