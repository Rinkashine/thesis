<?php

namespace App\Http\Controllers\Backend\Users;

use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    //Show Permission Page
    public function index()
    {
        return view('admin.page.Users.permission');
    }
}
