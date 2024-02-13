<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;



class AdminController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function formTo(Request $request): View
    {
        return view('admin.formTo', [
            'user' => $request->user(),
        ]);
    }

    public function addUser(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $roleName = $request->input('role', 'user');
        $user->assignRole($roleName);

        event(new Registered($user));

        return Redirect::route('user.add')->with('status', 'user-added');
    }

    public function displayUsers(): View
    {
        $users = User::all();

        return view('admin.partials.users.userlist', compact('users'));
    }

    public function editUser(User $user)
    {
        $roles = Role::all();
        return view('admin.partials.users.edit', compact('user', 'roles'));
    }

    public function updateUser(Request $request, User $user)
    {
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        $roleName = $request->input('role');
        $user->syncRoles($roleName);

        if ($request->hasFile('avatar')) {
            $filename = $request->avatar->getClientOriginalName();  // Change 'image' to 'avatar'
            $request->avatar->storeAs('avatar', $filename, 'public');
            $user->update(['avatar' => $filename]);
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->birthdate = $request->input('birthdate');
        $user->gender = $request->input('gender');
        $user->address_line = $request->input('address_line');
        $user->postcode = $request->input('postcode');
        $user->city = $request->input('city');
        $user->state = $request->input('state');

        $user->save();

        return redirect()->route('user.display')->with('status', 'user-updated');
    }

    public function destroyUser(Request $request, User $user)
    {
        $user->roles()->detach();
        $deleted = DB::table('users')->where('id', $user->id)->delete();

        return Redirect::route('user.display')->with('status', 'user-deleted');
    }
}
