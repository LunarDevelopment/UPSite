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
        Mail::send('emails.contact', ['email' => $request->email], function ($m) use ($request) {
            $m->from($request->email, 'UP Subscription');
            $m->to('lewis@digital-picnic.email', 'lewis')->subject('New UP subscription!');
        });
        return redirect(route('frontend.index'))->withFlashSuccess('Thanks, we\'ll be in touch soon.');

	}
	/**
	 * @return \Illuminate\View\View
	 */
	public function contact(Request $request)
	{
	    $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'company_name' => $request->company_name,
            'telephone' => $request->telephone
        );
        Mail::send('emails.contact', $data, function ($m) use ($request) {
            $m->from($request->email, 'UP contact form');
            $m->to('lewis@digital-picnic.email', 'lewis')->subject('New UP contact form!');
        });
        return redirect(route('frontend.contact'))->withFlashSuccess('Thanks, we\'ll be in touch soon.');

	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function macros()
	{
		return view('frontend.macros');
	}
}
