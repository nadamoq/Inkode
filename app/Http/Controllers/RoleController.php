<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $roles=Role::paginate(5);
        return response()->view('dashboard.role.index',['roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $abilities=collect(array_keys(config('abilities')));
        return response()->view('dashboard.role.create',['abilities'=>$abilities]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        //
        $role=Role::create($request->validated());
       
        return redirect()->route('dashboard.roles.index')->with('success','role is created successfully');
        
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        //
   
        $abilities=array_keys(config('abilities'));
        return response()->view('dashboard.role.edit',['abilities'=>$abilities,'role'=>$role]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoleRequest $request, Role $role)
    {
        //
        $role->update($request->validated());
        return redirect()->route('dashboard.roles.index')->with('updated sucessfuly');
        
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        //
        $role->delete();
        return redirect()->back()->with('success','deleted sucessfuly');
    }
}
