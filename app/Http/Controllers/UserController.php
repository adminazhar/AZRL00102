<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('admin.pages.users.index', compact('users'));
    }

    public function show($userId)
    {
        $user = User::findorFail($userId);

        return view('admin.pages.users.show', compact('user'));

    }

    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function changeStatus(Request $request)
    {
        $user = User::find($request->id);
        $user->is_admin = $request->is_admin;
        $user->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function edit(){
        return view('admin.pages.users.edit');
    }
    public function update($userId){


        return view('admin.page');
    }

}
