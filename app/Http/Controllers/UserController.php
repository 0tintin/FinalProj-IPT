<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

// class UserController extends Controller
// {
//     public function user()
//     {
//         $user = User::orderBy('id')->get();

//         return view('user.index', ['users' => $user]);
//     }

//     public function create()
//     {
//         return view('user.create');
//     }

//     public function store(Request $request)
//     {
//         $request->validate([
//             'username' => 'required',
//             'full_name' => 'required',
//             'email'    => 'required|email'
//         ]);

//         User::create([
//             'username' => $request->username,  
//             'full_name' => $request->full_name,
//             'email'    => $request->email,
//         ]);

//         return redirect('/users')->with('message', 'A new user has been added');
//     }

//     public function edit(User $user)
//     {
//         return view('user.edit', compact('user'));
//     }

//     public function update(User $user, Request $request)
//     {
//         $request->validate([
//             'full_name'  =>  'required',
//             'username'   =>  'required',
//             'email'      =>  'required',
//         ]);

//         $user->update($request->all());
//         return redirect('/users')->with('message', "$user->full_name has been updated successfully.");
//     }

//     public function delete(User $user)
//     {
//         $user->delete();

//         return redirect('/users')->with('message', "$user->full_name has been deleted successfully. BYEEEEEEEEEEEEEEE!!!");

//     }
// }
