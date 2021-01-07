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

    public function show($userId){
        $users = User::findOrFail($userId);
        return view('admin.pages.users.show', compact('users'));
    }

}
