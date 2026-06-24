<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        //
        // if(Gate::denies('users.view')){
        //     abort(403);
        // }
        $this->authorize('users.viewAny');
        $users = User::paginate(10);
        return response()->view('dashboard.users.index', ['users' => $users]);
    }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $this->authorizeForUser(auth()->user(), 'view', $user);
        return response()->view('dashboard.users.show', ['user' => $user]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $this->authorizeForUser(auth()->user(), 'delete', User::class);
        $user->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }
    public function editRoles(User $user)
    {

        $roles=Role::all();
        return view('dashboard.users.user-roles', ['user' => $user, 'roles'=>$roles]);
    }
    public function assignRole(Request $request,User $user)
    {
        $validated = $request->validate([
            'roles' => 'nullable|array',
            'roles.*' => 'exists:roles,id'
        ]);
        $user->roles()->sync($validated['roles']??[]);
        return redirect()->route('dashboard.users.index')->with('success', 'assigned successfully');
    }
}
