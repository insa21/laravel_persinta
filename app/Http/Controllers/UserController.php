<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', ['users' => $users]);
    }


    public function create()
    {
        return view('users.form', [
            'user'=>new User(),
            'page_meta' => [
                'title' => 'Create new User',
                'method' => 'POST',
                'url' => '/users',
                'submit_text' => 'Create'
        ],
        ]);
    }

    public function store(Request $request)
    {
        User::create($request->validate(this->requestValidated()));

        return redirect('/users');
    }

    public function show(User $user)
    {
//        $user = User::findOrFail($id);
        return view('users/show', ['user'=>$user]);
    }


    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit user: ' . $user->name,
                'method' => 'PUT',
                'url' => '/users/' . $user->id,
                'submit_text' => 'Update'
            ]
        ]);
    }


    public function update(Request $request, User $user)
    {
        $user->update($request->validate($this->requestValidated()));
        return redirect('/users');
    }

    protected function requestValidated()
    {
        return [
            'name' => ['required', 'min:3', 'max:255', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:255'],
        ];
    }

}








