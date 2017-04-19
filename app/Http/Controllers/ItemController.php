<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequest;
use App\Models\Item;
use App\Models\Category;
use App\Models\Duration;
use App\Models\Skill;
use App\Models\Locationtype;
use App\Models\User;
use App\Models\Bid;
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

class ItemController extends Controller
{

    protected $items;
    protected $categories;
    protected $durations;
    protected $locationtypes;
    protected $authUser;
    

    public function __construct(ItemRepositoryInterface $itemRepository)
    {
        $this->items = $itemRepository;
        $this->itemns = $itemRepository;
      
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($user_id)
    {   
        //$user           = Auth::user()->id;
        $items = Item::where('user_id', $user_id)->get();
        $pending=Item::where('user_id', $user_id)->where('state', 1)->count(); 
        $runing=Item::where('user_id', $user_id)->where('state', 2)->count();  
        $completed=Item::where('user_id', $user_id)->where('state', 3)->count();      
        $itemns = DB::table('items')->where('user_id', $user_id)->where('state', 1)->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->orderBy('items.id','desc')->paginate(5);
        
        $state=1;
        return view('pages.customer.jobs', compact('itemns','state','pending','runing','completed'));
        //return response()->json(compact('items'));

    }

    //runing job

    public function runingjob($user_id)
    {   
        //$user           = Auth::user()->id;
        $items = Item::where('user_id', $user_id)->get();
        $pending=Item::where('user_id', $user_id)->where('state', 1)->count(); 
        $runing=Item::where('user_id', $user_id)->where('state', 2)->count();  
        $completed=Item::where('user_id', $user_id)->where('state', 3)->count();      
        $itemns = DB::table('items')->where('user_id', $user_id)->where('state', 2)->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->orderBy('items.id','desc')->paginate(5);
            
        $state=2;
        return view('pages.customer.jobs', compact('itemns','state','pending','runing','completed'));
        //return response()->json(compact('items'));

    }

    //complete job

    public function completejob($user_id)
    {   
        //$user           = Auth::user()->id;
        $items = Item::where('user_id', $user_id)->get();
        $pending=Item::where('user_id', $user_id)->where('state', 1)->count(); 
        $runing=Item::where('user_id', $user_id)->where('state', 2)->count();  
        $completed=Item::where('user_id', $user_id)->where('state', 3)->count();      
        $itemns = DB::table('items')->where('user_id', $user_id)->where('state', 3)->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->orderBy('items.id','desc')->paginate(5);
            
         $state=3;
        return view('pages.customer.jobs', compact('itemns','state','pending','runing','completed'));
        //return response()->json(compact('items'));

    }

    public function jobindex()
    {   
        //$user           = Auth::user()->id;
       //$items = Item::where('user_id', $user_id)->get();
        //$items =Item::join('categories','items.category','=','categories.cate_name')->get();

       
        $itemns = DB::table('items')->join('skills', 'items.skill', '=', 'skills.id')->join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->orderBy('items.id','desc')->paginate(10);
            
        //$items = Item::find($user_id);
       // $items = $this->Item::all();
        // $itemns = $itemns->all();
        //$categories = Category::all();
        //$durations = Duration::all();
        //$skills = Skill::all();
        //$locationtypes = Locationtype::all();
        return view('pages.user.jobs', compact('itemns'));
        //return response()->json(compact('items'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
       
        $durations = Duration::all();
        $skills = Skill::all();
        $locationtypes = Locationtype::all();
        return view('item.create', compact('durations','skills','locationtypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ItemRequest|Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ItemRequest $request)
    {
        $this->items->create($request);
        $durations = Duration::all();
        $skills = Skill::all();
        $locationtypes = Locationtype::all();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {   
        //$item = DB::table('items')->where('id', $item)->leftJoin('categories', 'items.category', '=', 'categories.id')
            //->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->get();
        //$item = Item::where('user_id', $user_id)->get();
        $id=$item->id;
        $key=Auth::id();
        $bid_userids=DB::table('bids')->where('pro_no',$id)->where('user_id',$key)->select('bids.user_id')->count();
        $proposals=DB::table('bids')->leftJoin('users', 'bids.user_id', '=', 'users.id')->leftJoin('profiles', 'users.id', '=', 'profiles.user_id')->where('pro_no',$id)->paginate(5);
        $durations = Duration::all();
        $skills = Skill::all();
        $locationtypes = Locationtype::all();
        return view('item.show', compact('item','durations','skills','locationtypes','proposals','id','bid_userids'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        
    
        $durations = Duration::all();
        $skills = Skill::all();
        $locationtypes = Locationtype::all();
        return view('item.edit', compact('item','durations','skills','locationtypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ItemRequest|Request $request
     * @param Item $item
     * @return \Illuminate\Http\Response
     */
    public function update(Item $item, ItemRequest $request)
    {
        $this->items->update($item, $request);

        return redirect('/');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param Item $item
     * @return \Illuminate\Http\Response
     * @internal param int $id
     */
    public function destroy(Item $item)
    {
        $this->items->delete($item);

        return redirect('/');
    }

     public function plumbing()
    {   
        //$user           = Auth::user()->id;
       //$items = Item::where('user_id', $user_id)->get();
        //$items =Item::join('categories','items.category','=','categories.cate_name')->get();

        //$items = Item::where('skill', '1')->get();
        $itemns = DB::table('items')->where('skill','plumber')->leftJoin('skills', 'items.id', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->paginate(10);
            
        //$items = Item::find($user_id);
        //$itemns = $this->Item::all();
       //$itemns = $itemns->where('category', 3)->get();
        //$categories = Category::all();
        //$durations = Duration::all();
        //$skills = Skill::all();
        //$locationtypes = Locationtype::all();
        return view('pages.user.jobs', compact('itemns'));
        //return response()->json(compact('items'));

    }




}
