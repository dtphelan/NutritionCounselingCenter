<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller {
    public function getIndex() {
        $page = 'Home';

        return view('layouts.page')
            ->with('page',$page);
    }

    public function getAbout() {
        $page = 'About';

        return view('layouts.page')
            ->with('page',$page);
    }

    public function getServices() {
        $page = 'Services';

        return view('layouts.page')
            ->with('page',$page);
    }

    public function getTestimonials() {
        $page = 'Testimonials';

        return view('layouts.page')
            ->with('page',$page);
    }

    public function getDirections() {
        $page = 'Directions';

        return view('layouts.page')
            ->with('page',$page);
    }

    public function getContact() {
        $page = 'Contact';

        return view('layouts.page')
            ->with('page',$page);
    }
}
