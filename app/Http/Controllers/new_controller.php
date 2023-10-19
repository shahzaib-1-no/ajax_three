<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class new_controller extends Controller
{
    public function form_submit_fun() {
        $data= "kdsjflks";
        return response()->json($data);
    }
}
