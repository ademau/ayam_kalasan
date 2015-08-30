<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
	Route::get('/', function()
	{
			return View::make('pages.home');
	})->before('auth');

	Route::resource('gambar', 'GambarController');
	Route::resource('article', 'ArticleController');


	Route::resource('user', 'UsersController');
	Route::resource('role', 'RoleController');
	Route::resource('userrole', 'UserRoleController');
	Route::resource('module', 'ModulController');
	Route::resource('rolemodul', 'RoleModulController');

	Route::get('aboutus-welcome', function()
	{
			return View::make('pages.aboutus-welcome')->with('selectedid', 'aboutus');
	});
	Route::get('aboutus-about', function()
	{
			return View::make('pages.aboutus-about')->with('selectedid', 'aboutus');
	});
	Route::get('aboutus-principal', function()
	{
			return View::make('pages.aboutus-principal')->with('selectedid', 'aboutus');
	});
	Route::get('aboutus-achivement', function()
	{
			return View::make('pages.aboutus-achivement')->with('selectedid', 'aboutus');
	});
	Route::get('aboutus-management', function()
	{
			return View::make('pages.aboutus-management')->with('selectedid', 'aboutus');
	});



	Route::get('solution-HAPIS', function()
	{
			return View::make('pages.solution-HAPIS')->with('selectedid', 'solution');
	});                       
	Route::get('solution-BSD', function()
	{
			return View::make('pages.solution-BSD')->with('selectedid', 'solution');
	});                       
	Route::get('solution-BPM', function()
	{
			return View::make('pages.solution-BPM')->with('selectedid', 'solution');
	});                       
	Route::get('solution-MAINT', function()
	{
			return View::make('pages.solution-MAINT')->with('selectedid', 'solution');
	});                       
	Route::get('solution-NETWORK', function()
	{
			return View::make('pages.solution-NETWORK')->with('selectedid', 'solution');
	});


	
	// Route::get('news', function()
	// {
	// 		return View::make('pages.news');
	// });
	Route::get('portfolio', function()
	{
			return View::make('pages.portfolio')->with('selectedid', 'portfolio');
	});
	// Route::get('career', function()
	// {
	// 		return View::make('pages.career');
	// });
	Route::filter('auth', function()
	{
	        if (Auth::guest())
	                return Redirect::route('login')
	                        ->with('flash_error', 'You must be logged in to view this page!');
	});

	Route::get('Admin/UploadGambar', function()
	{
			return View::make('pages.Admin.UploadGambar');
	})->before('auth');
	Route::post('Admin/UploadGambar', function()
	{
			return View::make('pages.Admin.UploadGambar');
	})->before('auth');
	
	Route::get('Admin/change-password', function()
	{
			return View::make('pages.Admin.change-password');
	})->before('auth');
	Route::post('Admin/change-password', function()
	{
			return View::make('pages.Admin.change-password');
	})->before('auth');
	
	Route::get('Admin/Konten', function()
	{
			return View::make('pages.Admin.ManageKonten');
	})->before('auth');

	Route::get('Admin/Konten/{sub?}', function($sub = null)
	{
		if ($sub!="")
			return View::make('pages.Admin.ManageKonten')
            ->with('categori_id', $sub);
	})->before('auth');

	Route::get('Admin/User/{sub?}', function($sub = null)
	{
		if ($sub!="")
			return View::make('pages.Admin.Manage'.$sub);
	})->before('auth');

	Route::get('Admin/Module/{sub?}', function($sub = null)
	{
		if ($sub!="")
			return View::make('pages.Admin.Module.'.$sub);
	})->before('auth');
	Route::POST('Admin/Module/{sub?}', function($sub = null)
	{
		if ($sub!="")
			return View::make('pages.Admin.Module.'.$sub);
	})->before('auth');		


	Route::get('Admin', function()
	{
			return View::make('pages.Admin.Adminhome');
	})->before('auth');

	Route::get('Admin', function()
	{
			return View::make('pages.Admin.Adminhome');
	})->before('auth');

	// Authentication
	// route to show the login form
	Route::get('/login', array('uses' => 'AuthController@showLogin'));
 
	// route to process the form
	Route::post('/login', array('uses' => 'AuthController@postLogin'));

	// route to process the form
	Route::post('change-password', array('uses' => 'AuthController@postUserPasswordChange'));
	
	Route::get('logout', 'AuthController@getLogout')->before('auth');
	Route::get('Admin/logout', 'AuthController@getLogout')->before('auth');

	Route::get('ModuleArtikel', function()
	{
		return View::make('pages.ModuleArticle');
	});


	Route::get('/{sub?}', function($sub = null)
	{
		if ($sub=="contact")
			return View::make('pages.contact', array('category' => $sub))->with('selectedid', $sub);
		elseif ($sub=="aboutus")
			return View::make('pages.aboutus', array('category' => $sub));
		elseif ($sub=="portfolio")
			return View::make('pages.porfolio', array('category' => $sub));
		elseif ($sub!="")
			return View::make('pages.Default', array('category' => $sub))->with('selectedid', $sub);
	});

	Route::get('/{sub?}/{id?}', function($sub = null,$id = null)
	{
		if ($sub!="" && $id!="")
			return View::make('pages.Default', array('category' => $sub,'id' => $id))->with('selectedid', $sub);
	});



