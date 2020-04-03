<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    public function getEmployee() {
        $data = DB::table('employees')->get();
        return response()->json($data);
    }

    public function addEmployee(Request $request) {
     
        $data = DB::table('employees')->insert([$request->all()]);
    }
}
