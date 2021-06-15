<?php

namespace App\Http\Controllers\setting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //追加

class SettingController extends Controller
{
	
    public function index () 
    {
		
		//user情報の取得
		$user = Auth::user();
		return view('setting.v0100', compact('user'));
    }
}
