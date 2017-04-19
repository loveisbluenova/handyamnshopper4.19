<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Models\Duration;
use App\Models\Skill;
use App\Models\Locationtype;
use App\Models\User;
use App\Models\Bid;
use App\Models\Jobstate;
use App\Repositories\ItemRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Nahid\Talk\Facades\Talk;
use Auth;

use App\Http\Requests;

class ProjectsManagementController extends Controller
{
    protected $items;
    protected $categories;
    protected $durations;
    protected $locationtypes;
    protected $authUser;
    protected $jobstates;
    

    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->items = $itemRepository;
        $this->itemns = $itemRepository;
      
    }
    public function index()
    {
           $items = DB::table('items')->leftJoin('users', 'items.user_id', '=', 'users.id')->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','users.name','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->orderBy('items.id','desc')->paginate(10);

        return view('pages.admin.showproject', compact('items'));
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

        return view('categoriesmanagement.create-item')->with($data);
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

               

            $item =  item::create([
                'cate_name'              => $request->input('cate_name'),
                'description'        => $request->input('description'),
                'status'         => $request->input('status')
                
            ]);

            
            $item->save();

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

        return view('projectsmanagement.show-project')->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $item= Item::findOrFail($id);
        
        $durations = Duration::all();
        $skills = Skill::all();
        $locationtypes = Locationtype::all();
        $jobstates= Jobstate::all();

        return view('projectsmanagement.edit-project',compact('item','durations','skills','locationtypes','jobstates'));
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
        
        $item  = Item::find($id);
        $item->title = $request->input('title');
        $item->description = $request->input('description');
        $item->skill = $request->input('skill');
        $item->locationtype = $request->input('locationtype');
        $item->projectaddress = $request->input('projecraddress');
        $item->duration = $request->input('duration');
        $item->budget = $request->input('budget');
        $item->state = $request->input('status');               
        $item->update();

        return redirect('/projects');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      
        $item = item::findOrFail($id);

   
            $item->delete();
            return redirect('categories');
    

    }
}
