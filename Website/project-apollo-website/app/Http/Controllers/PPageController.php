<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    /**
     *  The PageController is used as main Routes Controller
     *  this is done in order to keep web.php small and easy to read.
     */
//
   /** Apollo home-Page */
    public function index(){
        return view('Home');
    }
   /** Rederect to mcforum website */
    public function apply(){
        return view('Apply.index');
    }
   /** Apollo Discord join link  */
    public function discord(){
        return view('Discord.index');
    }
   /** Apollo Wiki-Page */
    public function wiki(){
        return view('Wiki.index');
    }
}
