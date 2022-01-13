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
    public function Home(){
        return view('Pages.Home.index');
    }
   /** Rederect to mcforum website */
    public function apply(){
        return view('Pages.Apply.index');
    }
   /** Apollo Discord join link  */
    public function Discord(){
        return redirect()->away('https://discord.gg/rCBwKTQ');
    }
   /** Apollo Wiki-Page */
    public function wiki(){
        return view('Pages.Wiki.index');
    }
       /** Apollo Wiki-Page */
    public function test(){
        return redirect()->away('https://www.google.com');
    }
}
