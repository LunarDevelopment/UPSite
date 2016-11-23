<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;
use Debugbar;
/**
 * Class FrontendController
 * @package App\Http\Controllers
 */
class FrontendController extends Controller
{
	/**
	 * @return \Illuminate\View\View
	 */
	public function index()
	{
		return view('frontend.index');
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function subscribe(Request $request)
	{
        Mail::send('emails.subscribe', ['email' => $request->email], function ($m) use ($request) {
            $m->from($request->email, 'Your Application');
            $m->to('adele@digital-picnic.email', 'lewis')->subject('New UP subscription!');
        });
        return redirect(route('frontend.index'))->withFlashSuccess('Thanks, we\'ll be in touch soon.');

	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function macros()
	{
		return view('frontend.macros');
	}
}
