<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Inertia\Inertia;

use Illuminate\Validation\Rule;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $nameSearch = $request->has('nameSearch') ? $request->nameSearch : '';
        $perPage = $request->has('perPage') ? $request->perPage : 5;
        // $page = $request->has('page') ? $request->page : 1;


        $roles = Role::with('permissions')
            ->where('name','LIKE','%'.$nameSearch.'%')
            ->paginate($perPage)->withQueryString();
            
        return Inertia::render('Admin/Roles/Index', [
            'permissions' => Permission::all(),
            'roles' => $roles,
            'nameSearch'=>$nameSearch,
            'perPage'=>$perPage,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>['required','max:25','min:2','unique:roles,name'],
            // 'permissions'=>'required',
        ]);
        $role=Role::create([
            'name'=>$request->name,
            'guard_name'=>'web',
        ]);
        if ($request->has('permissions')){
            $role->givePermissionTo($request->permissions);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *s
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request,[
            'name'=>['required','max:25','min:2',Rule::unique('roles')->ignore($role->id)],
        ]);
        if ($request->has('permissions')){
            $role->givePermissionTo($request->permissions);
        }

        $role->syncPermissions($request->permissions);
        $role->update(['name'=>$request->name]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back();
    }
}
