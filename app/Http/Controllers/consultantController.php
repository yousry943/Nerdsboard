<?php

namespace App\Http\Controllers;

use App\Providers\AppServiceProvider;
use Illuminate\Http\Request;

use App\consultant;
use Helper;


class consultantController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // protected $test;



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


      return view('user.consultant.index');

    }


   public function store(Request $request)
   {




           $consultant = new consultant();
           $consultant->name =$request->name;
           $consultant->email =$request->email;

           $consultant->bio =$request->bio;


       $consultant->image = Helper::uploadImage(
               $request->file('image'),
               'uplodes/consultant/'
           );
           $consultant->save();


       return redirect('/');

   }

}
