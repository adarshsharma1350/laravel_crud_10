<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();
        $usercount = User::count();

        $perpage = $request->input('per_page', 5);
        $users = User::paginate($perpage);

        return view('home', compact('users', 'usercount', 'perpage'));
    }

    public function create()
    {
        return view('userset.adduser');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make('$request->password');

        $user->save();

        return view('userset.adduser')->with('status', "user added successfully..");
        // return redirect()->route('home')->with('status', 'User add successfully..');
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('userset.viewuser', compact('user'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('userset.updateuser', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('home')->with('status', 'user updated successfully');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('home')->with('success', "User deleted successfully...");
    }
}
