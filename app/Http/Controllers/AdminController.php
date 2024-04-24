<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    // AdminDestroy
    public function AdminDestroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        $notification = array(
            'message' => 'Admin desconectado con éxito',
            'alert-type' => 'info'
        );

        // return redirect('/'); //home page
        return redirect('/logout')->with($notification); //login page
    }

    // AdminLogoutPage
    public function AdminLogoutPage(){
        return view('admin.admin_logout');
    }


}
