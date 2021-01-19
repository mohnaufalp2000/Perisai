<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TravelPackage;
use App\gallery;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.dashboard',[
            'travel_package' => TravelPackage::count(),
            'gallery' => gallery::count()

        ]);
    }
}
