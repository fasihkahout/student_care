<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotionSheetController extends Controller
{
    public function sheet(){
        return view('sheets.index');
    }
}
