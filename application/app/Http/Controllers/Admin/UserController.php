<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(User::class);
    }

    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $this->authorize('manage-users', User::class);

        return view('admin.users.index', ['users' => $model->with('role')->get()]);
    }

    /**
     * Show the form for creating a new user
     *
     * @param  \App\Role  $model
     * @return \Illuminate\View\View
     */
    public function create()
    {
       
        return view('admin.users.create', ['roles' => Role::get(['id', 'name'])]);
    }

    /**
     * Store a newly created user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $model
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request, User $model)
    {
        $model->create($request->merge([
            'picture' => $request->photo ? $request->photo->store('profile', 'uploads') : null,
            'password' => Hash::make($request->get('password')),
        ])->all());

        return redirect()->route('admin::user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Show the form for editing the specified user
     *
     * @param  \App\User  $user
     * @param  \App\Role  $model
     * @return \Illuminate\View\View
     */
    public function edit(User $user, Role $model)
    {
        return view('admin.users.edit', ['user' => $user->load('role'), 'roles' => $model->get(['id', 'name'])]);
    }

    /**
     * Update the specified user in storage
     *
     * @param  \App\Http\Requests\UserRequest  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $hasPassword = $request->get("password");
        $user->update(
            $request->merge([
                'picture' => $request->photo ? $request->photo->store('profile', 'uploads') : $user->picture,
                'password' => Hash::make($request->get('password')),
            ])->except([$hasPassword ? '' : 'password'])
        );

        return redirect()->route('admin::user.index')->withStatus(__('User successfully updated.'));
    }

    /**
     * Remove the specified user from storage
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('admin::user.index')->withStatus(__('User successfully deleted.'));
    }
}
