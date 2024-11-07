<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;  // Assuming UserRequest is in the App\Http\Requests namespace


class UserController extends Controller
{
    public function index()
    {
        $users = User::query()->latest()->get();

        return view('users.index', ['users' => $users]);
    }

    public function store(userRequest $request)
    {
        User::create($request->validated());
        return to_route('users.index');
    }

    public function create()
    {
        return view('users.form', [
            'user' => new User(),
            'page_meta' => [
                'title' => 'Create new User',
                'method' => 'POST',
                'url' => route('users.store'),
                'submit_text' => 'Create'
            ],
        ]);
    }


    public function show(User $user)
    {
        //        $user = User::findOrFail($id);
        return view('users/show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('users.form', [
            'user' => $user,
            'page_meta' => [
                'title' => 'Edit user: ' . $user->name,
                'method' => 'PUT',
                'url' => route('users.update', $user->id),
                'submit_text' => 'Update'
            ]
        ]);
    }

    public function update(userRequest $request, User $user)
    {
        $user->update($request->validated());
        return to_route('users.index');
    }

    public function destroy(User $user)
        {
            $user->delete();
           return to_route('users.index');
        }
}
