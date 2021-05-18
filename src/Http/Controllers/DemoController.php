<?php

namespace MinhHao\Demo\Http\Controllers;

use App\Http\Controllers\Controller;
use MinhHao\Demo\Models\Demo;

class DemoController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getIndex()
    {
        Demo::create(['name' => 'Demo ' . time()]);
        
        return view('package-demo::index');
    }
}
