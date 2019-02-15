<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show()
    {
        $slug = 'contact-us';
        $page = Page::findBySlug($slug);
        return view('page.contact',compact('page'));
    }

    public function store(Request $request)
    {
        Contact::create($request->all());
        return back();
    }
    public function about()
    {
        $slug = 'about-japan';
        $page = Page::findBySlug($slug);
        return view('page.about',compact('page'));
    }
    public function notAvailable()
    {
        $slug = 'not-available';
        $page = Page::findBySlug($slug);
        return view('page.notAvailable',compact('page'));
    }
}
