<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nameSearch = $request->has('nameSearch') ? $request->nameSearch : '';
        $lastnameSearch = $request->has('lastnameSearch') ? $request->lastnameSearch : '';
        $emailSearch = $request->has('emailSearch') ? $request->emailSearch : '';
        $perPage = $request->has('perPage') ? $request->perPage : 5;
        // $status = $request->has('active') ? $request->active : '';
        $status = $request->status;
        
        // $page = $request->has('page') ? $request->page : 1;



        $users=User::with('roles')
        ->where('name','LIKE','%'.$nameSearch.'%')
        ->where('lastname','LIKE','%'.$lastnameSearch.'%')
        ->where('email','LIKE','%'.$emailSearch.'%')
        ->where('status','LIKE','%'.$status.'%')
        ->paginate($perPage)->withQueryString();
        
        return Inertia::render('Admin/Users/Index',[
            'roles' => Role::all(),
            'users'=>$users,
            'nameSearch'=>$nameSearch,
            'lastnameSearch'=>$lastnameSearch,
            'emailSearch'=>$emailSearch,
            'perPage'=>$perPage,
            'status'=>$status,
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
            'name'=>['required','max:50','min:2'],
            'lastname'=>['required','max:50','min:2'],
            'roles'=>['required'],
            'email'=>['required','max:50','min:2','email','unique:users,email']
        ]);
        $user=User::create([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'email'=>$request->email,
            'status'=>0,
            'password'=>Hash::make('password'),
        ]);
        if ($request->has('roles')){
            $user->assignRole($request->roles);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name'=>['required','max:50','min:2'],
            'lastname'=>['required','max:50','min:2'],
            'roles'=>['required'],
            'email' => ['required','max:50','min:2', 'email', Rule::unique('users')->ignore($user->id)],
        ]);

        $user->syncRoles($request->roles);

        $user->update([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'email'=>$request->email
        ]);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

    public function activate(User $user)
    {
        $user->status=1;
        $user->save();
        return back();
    }
    public function inactivate(User $user)
    {
        $user->status=0;
        $user->save();
        return back();
    }
}
