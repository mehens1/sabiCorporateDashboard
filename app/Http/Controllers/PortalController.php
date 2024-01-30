<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public function dashboard()
    {

        $data = [
            'title' => "Dashboard",
        ];
        return view('portal.dashboard', compact('data'));
    }

    public function profile()
    {

        $data = [
            'title' => "Profile",
        ];
        return view('portal.profile', compact('data'));
    }
}
