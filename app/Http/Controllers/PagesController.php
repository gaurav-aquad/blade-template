<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function home() {
      return view('home', ['page' => 'home']);
    }

    public function typography() {
      return view('pages.typography', ['page' => 'typography']);
    }

    public function helperClasses() {
      return view('pages.helper-classes', ['page' => 'helper-classes']);
    }

    public function cardsBasic() {
      return view('pages.widgets.cards.basic', ['widgets' => 'basic']);
    }

    public function cardsColored() {
      return view('pages.widgets.cards.colored', ['widgets' => 'colored']);
    }

    public function cardsNoHeader() {
      return view('pages.widgets.cards.no-header', ['widgets' => 'no-header']);
    }

}
