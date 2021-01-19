<?php

namespace App\Http\Controllers;

use App\TravelPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TravelPackage::with(['galleries'])->get();
        return view('pages.home',[
            'items' => $items
        ]);
    }

    public function search(Request $req){
        $data = TravelPackage::where('title', 'like', '%'.$req->input('query').'%')->get();
        return view('pages.search', [
            'items' => $data]
        );
    }
}
