<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Inertia\Inertia;

use Illuminate\Validation\Rule;

class PermissionController extends Controller
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

        $permissions=Permission::where('name','LIKE','%'.$nameSearch.'%')
        ->paginate($perPage)->withQueryString();

        return Inertia::render('Admin/Permissions/Index', [
            'permissions' => $permissions,
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
            'name'=>['required','max:25','min:5','unique:permissions,name'],
            // 'permissions'=>'required',
        ]);
        $permission=Permission::create([
            'name'=>$request->name,
            'guard_name'=>'web',
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
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
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $this->validate($request,[
            'name'=>['required','max:25','min:5',Rule::unique('permissions')->ignore($permission->id)],
        ]);

        $permission->update(['name'=>$request->name]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return back();
    }
}
