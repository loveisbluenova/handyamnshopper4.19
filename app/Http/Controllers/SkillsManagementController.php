<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Profile;
use App\Models\User;
use App\Models\Skill;
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

class SkillsManagementController extends Controller
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
        $skills = Skill::all();
        

        return View('pages.admin.showskills', compact('skills'));

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

        return view('skillsmanagement.create-skill')->with($data);
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
                'skill'                  => 'required',
                'description'                  => 'required',
                'statue'                  => 'required'
            ]
          
        );

               

            $skill =  Skill::create([
                'skill'              => $request->input('skill'),
                'description'        => $request->input('description'),
                'status'         => $request->input('status')
                
            ]);

            
            $skill->save();

            return redirect('skills');

        
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

        $skill= Skill::findOrFail($id);
        

     

        return view('skillsmanagement.edit-skill',compact('skill'));
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

      
        $skill  = Skill::find($id);
        $skill->skill = $request->input('skill');
        $skill->description = $request->input('description');
        $skill->status = $request->input('status');               
        $skill->update();
        return redirect('skills');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      
        $skill = Skill::findOrFail($id);

   
            $skill->delete();
            return redirect('skills');
    

    }
     public function remove(Request $request)
    {
        // $products = Product::find($id);
        $id = $request->input('id');
        $skill = Skill::find($id);
        $skill->delete();
    }
}
