<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class ListnameController extends Controller
{
    public function listname(){
        $listname = User::all();

        //return view('admin.service.index',compact('services'));
        return view('admin.menu1',compact('listname'));
    }
}
