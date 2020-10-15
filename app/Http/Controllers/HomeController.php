<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->get()->first();   
        
        $cms_home1 = DB::table('pages')->where('id', 1)->first();
        $cms_home2 = DB::table('pages')->where('id', 2)->first();
        $cms_home3 = DB::table('pages')->where('id', 3)->first();
        $cms_home4 = DB::table('pages')->where('id', 4)->first();
        $cms_home5 = DB::table('pages')->where('id', 5)->first();

        $products = DB::table('products')->get()->take(10);
        $testimonials = DB::table('testimonials')->get();
        $gallery = DB::table('galleries')->get();
        $articles = DB::table('articles')->orderBy('id', 'DESC')->get()->take(5);

        $latest_blog = DB::table('blogs')->orderBy('id', 'DESC')->get()->first();
        $blogs = DB::table('blogs')->get()->take(6);

        $features = DB::table('features')->get();
        $assets = DB::table('asset_classes')->get();


        return view('welcome', compact('banner', 'cms_home1', 'cms_home2', 'cms_home3', 'cms_home4', 'cms_home5', 'testimonials', 'gallery', 'articles', 'latest_blog', 'blogs', 'features', 'assets'));
    }

    public function aboutUs()
    { 
        $inner_banner1 = DB::table('inner_banners')->where('id', 1)->first();
        $cms_about = DB::table('pages')->where('id', 6)->first();
        return view('about-us', compact('inner_banner1', 'cms_about'));
    }

    public function contactUs()
    { 
        $inner_banner4 = DB::table('inner_banners')->where('id', 4)->first();
        return view('contact-us', compact('inner_banner4'));
    }

    public function dataSheets()
    { 
        $inner_banner3 = DB::table('inner_banners')->where('id', 3)->first();
        $cms_dataSheets = DB::table('pages')->where('id', 8)->first();
        return view('data-sheets', compact('inner_banner3', 'cms_dataSheets'));
    }

    public function dataSheetsOne()
    { 
        $inner_banner9 = DB::table('inner_banners')->where('id', 9)->first();
        $cms_data1 = DB::table('pages')->where('id', 9)->first();
        $cms_data2 = DB::table('pages')->where('id', 10)->first();
        return view('datasheets-one', compact('inner_banner9', 'cms_data1', 'cms_data2'));
    }

    public function logIn()
    { 
        $inner_banner7 = DB::table('inner_banners')->where('id', 7)->first();
        return view('login', compact('inner_banner7'));
    }

    public function myAccount()
    { 
        $inner_banner6 = DB::table('inner_banners')->where('id', 6)->first();
        return view('my-account', compact('inner_banner6'));
    }

    public function newsFeedDetail($id)
    { 
        $inner_banner11 = DB::table('inner_banners')->where('id', 11)->first();
        $article = DB::table('articles')->where('id', $id)->get()->first();
        return view('news-feed-detail', compact('inner_banner11', 'article'));
    }

    public function newsFeed($id)
    { 
        $inner_banner2 = DB::table('inner_banners')->where('id', 2)->first();
        $cms_newsFeed = DB::table('pages')->where('id', 7)->first();
        $articles = DB::table('articles')->where('category', $id)->get();
        return view('news-feed', compact('inner_banner2', 'cms_newsFeed', 'articles'));
    }

    public function payment()
    { 
        $inner_banner10 = DB::table('inner_banners')->where('id', 10)->first();
        return view('payment', compact('inner_banner10'));
    }

    public function signIn()
    { 
        $inner_banner8 = DB::table('inner_banners')->where('id', 8)->first();
        return view('signin', compact('inner_banner8'));
    }

    public function subscribe()
    { 
        $inner_banner5 = DB::table('inner_banners')->where('id', 5)->first();
        $faqs = DB::table('faqs')->get();

        $cms_sub1 = DB::table('pages')->where('id', 11)->first();
        $cms_sub2 = DB::table('pages')->where('id', 12)->first();

        return view('subscribe', compact('inner_banner5', 'faqs', 'cms_sub1', 'cms_sub2'));
    }

    public function contactUsSubmit(Request $request)
    {

        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->fname;
        $inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
        $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->message;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us. We will get back to you asap!'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {
        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for subscribing. We will get back to you asap!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
