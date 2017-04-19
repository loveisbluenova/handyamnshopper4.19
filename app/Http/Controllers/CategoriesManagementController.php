<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Profile;
use App\Models\User;
use App\Models\Category;
use App\Traits\ActivationTrait;
use App\Traits\CaptchaTrait;
use App\Traits\CaptureIpTrait;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use jeremykenedy\LaravelRoles\Models\Permission;
use jeremykenedy\LaravelRoles\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Validator;

class CategoriesManagementController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        

        return View('pages.admin.showcategories', compact('categories'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $roles = Role::all();

        $data = [
            'roles' => $roles
        ];

        return view('categoriesmanagement.create-category')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(),
            [
                'cate_name'                  => 'required',
                'description'                  => 'required',
                'statue'                  => 'required'
            ]
          
        );

               

            $category =  Category::create([
                'cate_name'              => $request->input('cate_name'),
                'description'        => $request->input('description'),
                'status'         => $request->input('status')
                
            ]);

            
            $category->save();

            return redirect('categories');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $user = User::find($id);

        return view('usersmanagement.show-user')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $category= Category::findOrFail($id);
        

     

        return view('categoriesmanagement.edit-category',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      
        $category  = Category::find($id);
        $category->cate_name = $request->input('cate_name');
        $category->description = $request->input('description');
        $category->status = $request->input('status');               
        $category->update();
        return redirect('categories');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      
        $category = Category::findOrFail($id);

   
            $category->delete();
            return redirect('categories');
    

    }
     public function remove(Request $request)
    {
        // $products = Product::find($id);
        $id = $request->input('id');
        $category = Category::find($id);
        $category->delete();
    }
}
