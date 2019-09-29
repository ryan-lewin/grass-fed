<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     /**
     * Display the admin view where admin user can see restaurants waiting approval.
     */
    public function applications(){
        $applications = User::where('role_name', '=', 'restaurant')->where('approved', '=', NULL)->get();
        return view('admin.applications', compact('applications'));        
    }

     /**
     * Updates user in DB to approved
     */
    public function approve($id) {
        $user = User::find($id);
        $user->approved = 'true';
        $user->save();
        return redirect()->back();
    }
}
