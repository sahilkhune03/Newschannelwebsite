<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\subscribe_table;

class subscribe extends Controller
{
    
        function homeIndex(){
            return view('layouts.home');
    
    
        }
        function dataInsert(Request $request){
            $emailsubscribe=$request->input('emailsubscribe');
            $isInsertSuccess=subscribe_table::insert(['emailsubscribe'=>$emailsubscribe]);
            if($isInsertSuccess) echo'<h2>Email Added for subscription</h2>';
            else echo '<h1>Insert Failed</h1>';
}
}