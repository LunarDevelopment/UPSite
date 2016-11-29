<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function water ()
    {
        $page_content = array(
            'title' => 'Water',
            'sub_heading' => null,
            'logo' => '',
            'sentences' => array(
                'The water industry won’t become deregulated until April 2017, but now is the time to start thinking about switching supplier and making the right choice for your business.',
                'We’ll ensure the management of your water usage will be easier than it ever has before, providing you with insight into what’s going on and how you can make further savings on your water consumption. Work with us to reduce your wastage before you go to tender in order to only pay for what you need.',
                'Whether your business spans across one location or multiple areas, working with us will allow you to manage all locations in one place - giving you more time to do what you do best, running your business!',
                'Contact us today',
                'Simply fill in your details below and one of our experts will be in touch.'
            )
        );
        return view('frontend.product', $page_content);
    }
    //
    public function gas ()
    {
        $page_content = array(
            'title' => 'Gas',
            'sub_heading' => null,
            'logo' => '',
            'sentences' => array(
                'Running out of steam when it comes to managing your gas bills?',
                'Work with us to take back control and reduce your energy consumption by up to 33%.',
                'Keeping the cost of your gas down can often be quite difficult and time consuming - that’s why our energy experts will work on your behalf to identify the best solution for your business. Supported by our Utility Management Plan (linked to that page), we’ll help your business keep costs down throughout your contract, giving you full control of your gas spend.',
                'Whether you’re looking for a fixed tariff or a more flexible contract, we can help.',
                'Get your gas quote today',
                'Simply fill in your details below and one of our energy experts will be in touch.'
            )
        );
        return view('frontend.product', $page_content);
    }
    //
    public function electricity ()
    {
        $page_content = array(
            'title' => 'Electricity',
            'sub_heading' => null,
            'logo' => '',
            'sentences' => array(
                'Being kept in the dark when it comes to your electricity spend?',
                'Let us shed some light on how you can start reducing your consumption and save money!',
                'Managing your electricity spend can often be an uncertainty, but it doesn’t have to be.',
                'Our experts will work on your behalf and find you the best deal for your business - from fixed tariffs to more flexible contracts, we’ve got you covered.',
                'Did you know you could reduce your energy consumption by up to 33% by getting your staff to help? Once we’ve found you the best deal, we’ll provide you with a Utility Management Plan to help you reduce consumption and save money throughout your contract',
                'Simply fill in your details below and one of our energy experts will be in touch.'
            )
        );
        return view('frontend.product', $page_content);
    }
    //
    public function about ()
    {
        $page_content = array(
            'title' => 'Welcome to Utility Picnic',
            'sub_heading' => 'It’s time to UP your savings!',
            'logo' => '',
            'sentences' => array(
                'When it comes to your utilities - we’re here to save you time, money and effort. Using our unique approach, we’ll work on your behalf to lower your energy and water bills - ensuring your business needs come first every time. From procurement through to consumption reduction, our experts are on hand to guide you through the process from start to finish.',
                'No matter your business size or industry, we’ll work closely with you to help you understand what’s best for your business and educate you on how to use energy responsibly throughout your contract.',
                'Take a look to see how our services can help you:'
            )
        );
        return view('frontend.product', $page_content);
    }
    //
    public function ump ()
    {
        $page_content = array(
            'title' => 'Utility Management Plan',
            'sub_heading' => 'Find out how we can help your business with our bespoke plans',
            'logo' => '',
            'sentences' => array(
                'Whether you’re an SME or a large corporate chain - a utility management plan will make it easier for you to cut down on your energy and water consumption and make big savings.',
                'We’ll work closely with you to identify your needs and requirements in order to design energy management solutions that are easy to implement and work for your business. ',
                'All of our plans are unique to your business, so whether it’s targets you need to hit, a strategy you need in place, or simply money you need to save - our plans will help you reach your goal. ',
                'Fill in your details below to find out how a utility management plan can help your business.'
            )
        );
        return view('frontend.product', $page_content);
    }
    //
    public function contact ()
    {
        $page_content = array(
            'title' => 'Contact Us',
            'sub_heading' => 'It’s time to UP your savings!',
            'logo' => '',
            'sentences' => array(
                'Ready to start saving money? Get in touch today and one of our energy experts will be in touch to help you find a plan that’s right for your business.'
            )
        );
        return view('frontend.contact', $page_content);
    }
}
