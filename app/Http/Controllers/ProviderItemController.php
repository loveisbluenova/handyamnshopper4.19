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
use Auth;
use App\Http\Requests;
use Carbon;

class ProviderItemController extends Controller
{

    protected $items;
    protected $categories;
    protected $durations;
    protected $locationtypes;

    

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
        //$items = Item::where('user_id', $user_id)->get();
             
       // $itemns = DB::table('items')->where('user_id', $user_id)->where('state', 1)->leftJoin('skills', 'items.skill', '=', 'skills.id')->leftJoin('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->leftJoin('durations', 'items.duration', '=', 'durations.id')->paginate(5);
            
       // $state=1;
        return view('item.proposal');
        //return response()->json(compact('items'));

    }

   

  

    public function jobindex()
    {   
   

       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

     

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();

       $applicate=DB::table('bids')->where('bids.pro_no', 'items.id')->count();   
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->orderBy('items.id','desc')->paginate(10);
         
        
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6','applications'));
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
      
        $durations = Duration::all();
        $skills = Skill::all();
        $locationtypes = Locationtype::all();
        return view('item.show', compact('item','durations','skills','locationtypes'));
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
        
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 1)->orderBy('items.id','desc')->paginate(10);
       
        $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();

       
       return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6','difftime'));
        //return response()->json(compact('items'));

    }

    public function electrical()
    {   
      
     $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 2)->orderBy('items.id','desc')->paginate(10);
     
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

    public function painting()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 3)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

    public function maid()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 4)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

        public function repair()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 5)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

        public function landscaping()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 6)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

        public function heating()
    {   
      
       $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 7)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

        public function other()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.skill', 8)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function locationtype1()
    {   
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.locationtype', 1)->orderBy('items.id','desc')->paginate(10);
       
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function locationtype2()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.locationtype', 2)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function duration1()
    {   
      
       
       $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.duration', 1)->orderBy('items.id','desc')->paginate(10);
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function duration2()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.duration', 2)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function duration3()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.duration', 3)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function duration4()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.duration', 4)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function duration5()
    {   
      
        $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.duration', 5)->orderBy('items.id','desc')->paginate(10);
     
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }

         public function duration6()
    {   
      
       $itemns = DB::table('items')->Join('skills', 'items.skill', '=', 'skills.id')->Join('locationtypes', 'items.locationtype', '=', 'locationtypes.id')->Join('durations', 'items.duration', '=', 'durations.id')->select('items.id','items.title','items.user_id','items.description','items.projectaddress','items.budget','items.application','items.updated_at','skills.skill','locationtypes.locationtype','durations.duration')->where('items.duration', 6)->orderBy('items.id','desc')->paginate(10);
        
       $jobs=DB::table('items')->count();
       $plumbing=DB::table('items')->where('items.skill', 1)->count();
       $electrical=DB::table('items')->where('items.skill', 2)->count();
       $painting=DB::table('items')->where('items.skill', 3)->count();
       $maid=DB::table('items')->where('items.skill', 4)->count();
       $repair=DB::table('items')->where('items.skill', 5)->count();
       $landscaping=DB::table('items')->where('items.skill', 6)->count();
       $heating=DB::table('items')->where('items.skill', 7)->count();
       $other=DB::table('items')->where('items.skill', 8)->count();

       $locationtype1=DB::table('items')->where('items.locationtype', 1)->count();
       $locationtype2=DB::table('items')->where('items.locationtype', 2)->count();
       $duration1=DB::table('items')->where('items.duration', 1)->count();
       $duration2=DB::table('items')->where('items.duration', 2)->count();
       $duration3=DB::table('items')->where('items.duration', 3)->count();
       $duration4=DB::table('items')->where('items.duration', 4)->count();
       $duration5=DB::table('items')->where('items.duration', 5)->count();
       $duration6=DB::table('items')->where('items.duration', 6)->count();
        return view('pages.user.jobs', compact('itemns','jobs','plumbing','electrical','painting','maid','repair','landscaping','heating','other','locationtype1','locationtype2','duration1','duration2','duration3','duration4','duration5','duration6'));
        //return response()->json(compact('items'));

    }




}
