<?php

namespace App\Http\Controllers;

use App\Http\Requests\BidRequest;
use App\Models\Bid;
use App\Models\Item;
use App\Models\Category;
use App\Models\Duration;
use App\Models\Skill;
use App\Models\Locationtype;
use App\Models\User;
use App\Repositories\BidRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Http\Requests;

class BidController extends Controller
{
    protected $bids;
    
    

    public function index($user_id)
    {   
        //$bids = Bid::where('user_id', Auth::id())->get();
       // $jobs=Bid::where('user_id', $user_id)->leftJoin('items', 'bids.pro_no', '=', 'items.id')->get();
        $pending=Bid::where('user_id', $user_id)->where('state', 1)->count(); 
        $runing=Bid::where('user_id', $user_id)->where('state', 2)->count();  
        $completed=Bid::where('user_id', $user_id)->where('state', 3)->count();
        //$pro_no=Bid::where('user_id',$user_id) ->select('bids.pro_no')->get();     
        $itemns = DB::table('bids')->leftJoin('items', 'bids.pro_no', '=', 'items.id')->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->where('bids.user_id', $user_id)->orderBy('bids.id','desc')->paginate(5);
        
        $state=1;
        return view('pages.user.myjob', compact('itemns','state','pending','runing','completed'));
    }
     public function runingjob($user_id)
    {   
        //$user           = Auth::user()->id;
        
        $pending=Bid::where('user_id', $user_id)->where('state', 1)->count(); 
        $runing=Bid::where('user_id', $user_id)->where('state', 2)->count();  
        $completed=Bid::where('user_id', $user_id)->where('state', 3)->count();      
        $itemns = DB::table('bids')->leftJoin('items', 'bids.pro_no', '=', 'items.id')->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->where('bids.user_id', $user_id)->where('bids.state', 2)->orderBy('bids.id','desc')->paginate(5);
            
        $state=2;
        return view('pages.user.myjob', compact('itemns','state','pending','runing','completed'));
        //return response()->json(compact('items'));

    }

    //complete job

    public function completejob($user_id)
    {   
        //$user           = Auth::user()->id;
        $items = Bid::where('user_id', $user_id)->get();
        $pending=Bid::where('user_id', $user_id)->where('state', 1)->count(); 
        $runing=Bid::where('user_id', $user_id)->where('state', 2)->count();  
        $completed=Item::where('user_id', $user_id)->where('state', 3)->count();      
        $itemns = DB::table('bids')->leftJoin('items', 'bids.pro_no', '=', 'items.id')->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','items.state','skills.skill','locationtypes.locationtype','durations.duration')->where('bids.user_id', $user_id)->where('bids.state', 3)->orderBy('bids.id','desc')->paginate(5);
            
         $state=3;
        return view('pages.user.myjob', compact('itemns','state','pending','runing','completed'));
        //return response()->json(compact('items'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pro_no)
    {   
        $pro_no=$pro_no;
       // $pro_no = Item::where('id', $pro_no)->get();
        return view('item.proposal',compact('pro_no'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $bids = new Bid;
        $bids->user_id= $request->input('user_id');
        $bids->pro_no = $request->input('pro_no');
        $bids->state = $request->input('state');
        $bids->active= $request->input('active');
        $bids->bid_content = $request->input('bid_content');
        $item=DB::table('items')->where('items.id', $bids->pro_no)->get();
        
        $bids->save();
        //$this->bids->create($request);
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
