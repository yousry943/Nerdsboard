<?php

namespace App\Http\Controllers\userController;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\consultant;

use Helper;

class clientController extends Controller
{
    public function index()
    {

        $consultants = consultant::all();


        return view('user.client.index',
            compact('consultants'));
    }

    public function date($name)
    {
      return view('user.client.date',
          compact('name'));
    }


}
