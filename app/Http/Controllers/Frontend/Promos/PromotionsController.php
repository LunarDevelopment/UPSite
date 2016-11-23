<?php

namespace App\Http\Controllers\Frontend\Promos;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use Debugbar;

class PromotionsController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function rollover()
    {
        return view('frontend.index');
    }
    /**
     * @return \Illuminate\View\View
     */
    public function rolloverSubmit()
    {
        return view('frontend.index');
    }
}
