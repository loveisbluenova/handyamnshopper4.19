<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Image;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;
use App\Models\Categories;
use App\Models\Items;
use App\Models\User;
use Validator;


class UserController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = Auth::user();

        if ($user->isAdmin()) {
            $customers=DB::table('users')->where('user_type', 2)->count();
            $providers=DB::table('users')->where('user_type', 1)->count();
            $categories=DB::table('categories')->count();
            $jobs=DB::table('items')->count();
            return view('pages.admin.home',compact('customers','providers','categories','jobs'));


        }
        
        return view('pages.user.index');

    }
  

}