<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addcalendar;


class Addcalendar extends Controller
{
    public function index(){
        $addcalendar = Addcalendar::paginate(3);
        $addcalendar = Addcalendar::onlyTrashed()->paginate(3);
        return view('admin.department.index',compact('departments','trashdepartments'));
    }

    public function add(Request $request){
        dd($request -> date1);
    }
}
