<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::query()
            ->search(request('search'))
            ->orderByDesc('id')
            ->cursorPaginate();

        return view('admin.users.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    public function create(CreateUserRequest $request)
    {
        User::create($request->validated());

        return redirect()->back()->with('alert', 'User has been added successfully');
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->validated());

        return redirect()->back()->with('alert', 'User has been updated successfully');
    }

    public function delete(User $user)
    {
        $user->delete();

        return redirect()->back()->with('alert', 'User has been deleted successfully');
    }
}
