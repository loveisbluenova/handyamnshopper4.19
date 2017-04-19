<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
//Route::get('/', 'WelcomeController@welcome')->name('welcome');
Route::get('/', 'WelcomeController@welcome')->name('index');
Route::get('/signup', function () {
    return view('auth.signup');
});
Route::get('/customer_signup', function () {
    return view('auth.customer_register');
});
Route::get('/howitworks', function () {
    return view('pages.how');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('jobs',  'ItemController@index');



// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => 'web'], function() {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated']], function() {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'        => '{username}',
        'uses'      => 'ProfilesController@show'
    ]);

});

// Registered, activated, and is current user routes.
Route::group(['middleware'=> ['auth', 'activated', 'currentUser']], function () {

    Route::resource(
        'profile',
        'ProfilesController', [
            'only'  => [
                'show',
                'edit',
                'update',
                'create'
                
            ]
        ]
    );
        //Change Password
    Route::get('change-password', function() {return view('auth.passwords.change-password'); });
    Route::post('change-password', 'Auth\UpdatePasswordController@update');

    //Customer Job Post
    Route::get('customerjob/{id}',['uses'=>'ItemController@index', 'as'=>'$id']);
    Route::get('customerjob/{id}/runingjob',['uses'=>'ItemController@runingjob', 'as'=>'$id']);
    Route::get('customerjob/{id}/completejob',['uses'=>'ItemController@completejob', 'as'=>'$id']);
    

    Route::resource('item', 'ItemController', ['except' => ['index']]);
    Route::resource('bid', 'BidController', ['except' => ['index']]);
    

    Route::get('postjob', 'ItemController@create');
    Route::get('proposal/{id}',['uses'=>'BidController@create', 'as'=>'$id']);


    //Provider Find Job
    Route::get('findjobs','ProviderItemController@jobindex');
    //provider My job
    Route::get('providerjob/{id}',['uses'=>'BidController@index', 'as'=>'$id']);
    Route::get('providerjob/{id}/runingjob',['uses'=>'BidController@runingjob', 'as'=>'$id']);
    Route::get('providerjob/{id}/completejob',['uses'=>'BidController@completejob', 'as'=>'$id']);

    //category
    Route::get('jobs/categories/Plumbing','ProviderItemController@plumbing');
    Route::get('jobs/categories/Electrical','ProviderItemController@electrical');
    Route::get('jobs/categories/Painting','ProviderItemController@painting');
    Route::get('jobs/categories/Maid','ProviderItemController@maid');
    Route::get('jobs/categories/Repair','ProviderItemController@repair');
    Route::get('jobs/categories/Landscaping','ProviderItemController@landscaping');
    Route::get('jobs/categories/Heating','ProviderItemController@heating');
    Route::get('jobs/categories/Other','ProviderItemController@other');
    Route::get('jobs/addresstype/home','ProviderItemController@locationtype1');
    Route::get('jobs/addresstype/business','ProviderItemController@locationtype2');
    Route::get('jobs/duration/less_than_1_week','ProviderItemController@duration1');
    Route::get('jobs/duration/less_than_1_month','ProviderItemController@duration2');
    Route::get('jobs/duration/1_to_3_months','ProviderItemController@duration3');
    Route::get('jobs/duration/3_to_6_months','ProviderItemController@duration4');
    Route::get('jobs/duration/more_than_6_months','ProviderItemController@duration5');
    Route::get('jobs/duration/notspecified','ProviderItemController@duration6');

    //provider proposal
    

    //profile image upload
    Route::match(['get', 'post'], 'update_avatar', [
        'uses'          => 'ProfilesController@update_avatar'
    ]);
    //Message
    


   

});

// Registered, activated, and is admin routes.
Route::group(['middleware'=> ['auth', 'activated', 'role:admin']], function () {

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index' => 'users',
            'destroy' => 'user.destroy'
        ]
    ]);
    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('php', 'AdminDetailsController@listPHPInfo');
    Route::get('routes', 'AdminDetailsController@listRoutes');
    Route::get('showprovider', 'UsersManagementController@showprovider');
    
    
    Route::get('delete', 'UsersManagementController@remove');

    Route::resource('categories', 'CategoriesManagementController', [
        'names' => [
            'index' => 'categories',
            'destroy' => 'categories.destroy'
        ]
    ]);
    Route::resource('skills', 'SkillsManagementController', [
        'names' => [
            'index' => 'skills',
            'destroy' => 'skills.destroy'
        ]
    ]);
    Route::resource('projects', 'ProjectsManagementController', [
        'names' => [
            'index' => 'projects',
            'destroy' => 'projects.destroy'
        ]
    ]);

});

    Route::get('Upload', 'UploadsController@index');
    Route::post('Upload/uploadFiles', 'UploadsController@multiple_upload');


    Auth::routes();
    Route::get('tests', 'MessageController@tests');

    Route::get('/message', 'HomeController@index');


    Route::get('message/{id}', 'MessageController@chatHistory')->name('message.read');

    Route::group(['prefix'=>'ajax', 'as'=>'ajax::'], function() {
    Route::post('message/send', 'MessageController@ajaxSendMessage')->name('message.new');
    Route::delete('message/delete/{id}', 'MessageController@ajaxDeleteMessage')->name('message.delete');
});
