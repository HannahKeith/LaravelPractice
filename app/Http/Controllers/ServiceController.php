<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
  public function Index()
  {

    //model has to be singular and uppercase
    //Services  /Farmers

    //table has to be plural and lowercase
    //service  /farmer
    $services = [
      'ServiceArry 1',
      'ServiceArry 2',
      'ServiceArry 3'
    ];

    return view('services', compact('services'));

  }
}
