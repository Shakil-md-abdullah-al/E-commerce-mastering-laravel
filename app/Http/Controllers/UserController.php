<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    private static $user;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.users.manage-user',[
            'users'=>User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::saveUser($request);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.users.edit-user',[
            'user'=>User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        self::$user = User::find($id);

        if(password_verify($request->old_password, self::$user->password)) {
            User::saveUpdate($request, $id);
            return redirect(route('users.index'))->with('message','Update');
        }
        else{
            return back()->with('message','Incorrect Password');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usr = User::find($id);
        $usr->delete();
        return back();
    }
}
