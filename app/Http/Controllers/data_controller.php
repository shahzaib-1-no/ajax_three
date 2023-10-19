<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class data_controller extends Controller
{
    public function form_submit_fun(Request $request) {
        return response()->json($request->data('fullname'));
    }
}
