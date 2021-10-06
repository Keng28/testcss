<?php

namespace App\Http\Controllers;
use App\Models\Addcalendar;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AddcalendarController extends Controller
{

    public function index(){
        $calendar=Addcalendar::all();
        return view('admin.menu2',compact('calendar'));
    }


    public function store(Request $request){
        //ตรวจสอบข้อมูล
        $request->validate(
            [
                'date'=>'required|unique:addcalendars',
                'time'=>'required|unique:addcalendars',
                'link'=>'required|unique:addcalendars',
            ],
            [
                'date.required'=>"กรุณาป้อนชื่อแผนกด้วยครับ",
                'date.unique'=>"มีข้อมูลชื่อแผนกนี้ในฐานข้อมูลแล้ว"
            ]
        );
        //บันทึกข้อมูล
        $data = array();
        $data["date"] = $request->date;
        $data["time"] = $request->time;
        $data["link"] = $request->link;
        $data["doctor"] = Auth::user()->id;

        //query builder
        DB::table('addcalendars')->insert($data);

        return redirect()->back()->with('success',"บันทึกข้อมูลเรียบร้อย");
    }




    
}
