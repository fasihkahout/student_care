<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

      public function logout(Request $request)
    {
    
      
    Auth::logout();
        $request->session()
            ->invalidate();

        $request->session()
            ->regenerateToken();

        return redirect('login');
    }
}
