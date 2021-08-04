<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\User;
use App\Movies;
use App\Extralink;
use App\Genres;
use App\Performers;
use App\Language;
use App\RecentlyWatched;

use App\Http\Requests;
use Illuminate\Http\Request;
use Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

 
class ExtralinkController extends MainAdminController
{
	public function __construct()
    {
		 $this->middleware('auth');
		  
		parent::__construct();
        check_verify_purchase(); 	
		  
    }
    // public function index()
    // { 
    //     dd('hi');
    //     if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
    //     {

    //         \Session::flash('flash_message', trans('words.access_denied'));
    //         return redirect('dashboard');
            
    //      }
        
    //     $page_title=trans('words.movies_text');
        
    //     $language_list = Language::orderBy('language_name')->get();      

    //     if(isset($_GET['s']))
    //     {
    //         $keyword = $_GET['s'];  
    //         $movies_list = Movies::where("video_title", "LIKE","%$keyword%")->orderBy('video_title')->paginate(10);

    //         $movies_list->appends(\Request::only('s'))->links();
    //     }    
    //     else if(isset($_GET['language_id']))
    //     {
    //         $language_id = $_GET['language_id'];
    //         $movies_list = Movies::where("movie_lang_id", "=",$language_id)->orderBy('id','DESC')->paginate(10);

    //         $movies_list->appends(\Request::only('language_id'))->links();
    //     }
    //     else
    //     {
    //         $movies_list = Movies::orderBy('id','DESC')->paginate(10);
    //     } 
         
    //     return view('admin.pages.movies_list',compact('page_title','movies_list','language_list'));
    // }
    
    public function index()    { 
        
        if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

                \Session::flash('flash_message', trans('words.access_denied'));

                return redirect('dashboard');
                
        }

        $page_title='link';

        $language_list = Language::orderBy('language_name')->get();
        $genre_list = Extralink::orderBy('description')->get();
        $performers_list = Performers::orderBy('name')->get();

        return view('admin.pages.extralink',compact('page_title','language_list','genre_list','performers_list'));
    }
    
    public function addextra(Request $request)
    { 
        
        $data =  \Request::except(array('_token')) ;
        
        // if(!empty($inputs['id'])){
        //         $rule=array(
        //                 'movie_language' => 'required',
        //                 'genres' => 'required',
        //                 'video_title' => 'required'
        //                  );
        // }else
        // {
        //     $rule=array(
        //                 'movie_language' => 'required',
        //                 'genres' => 'required',
        //                 'release_date' => 'required',
        //                 'video_image_thumb' => 'required'                         
        //                  );
        // }

        //  $validator = \Validator::make($data,$rule);
 
        // if ($validator->fails())
        // {
        //         return redirect()->back()->withInput()->withErrors($validator->messages());
        // } 
        $inputs = $request->all();
        if(!empty($inputs['id'])){
           
            $Extralink = Extralink::findOrFail($inputs['id']);

        }else{

            $Extralink = new Extralink;

        }
            
         $Extralink->description = $inputs['video_description'];

         $Extralink->save();
         
        
        if(!empty($inputs['id'])){

            \Session::flash('flash_message', trans('words.successfully_updated'));

            return \Redirect::back();
        }else{

            \Session::flash('flash_message', trans('words.added'));

            return \Redirect::back();

        }            
        
         
    }     
   
    
    public function editMovie($movie_id)    
    {      
          if(Auth::User()->usertype!="Admin" AND Auth::User()->usertype!="Sub_Admin")
        {

                \Session::flash('flash_message', trans('words.access_denied'));

                return redirect('dashboard');
                
        }  

          $page_title=trans('words.edit_movie');

          $language_list = Language::orderBy('language_name')->get();
          $genre_list = Genres::orderBy('genre_name')->get();

          $movie = Movies::findOrFail($movie_id);   

          return view('admin.pages.addeditmovie',compact('page_title','movie','language_list','genre_list'));
        
    }	 
    
    public function delete($movie_id)
    {
    	if(Auth::User()->usertype=="Admin" OR Auth::User()->usertype=="Sub_Admin")
        {
        
        $recently = RecentlyWatched::where('video_type','Movies')->where('video_id',$movie_id)->delete();
        
        $movie = Movies::findOrFail($movie_id);
        $movie->delete();

        \Session::flash('flash_message', trans('words.deleted'));

        return redirect()->back();
        }
        else
        {
            \Session::flash('flash_message', trans('words.access_denied'));

            return redirect('admin/dashboard');
            
        
        }
    }
    
     
    	
}
