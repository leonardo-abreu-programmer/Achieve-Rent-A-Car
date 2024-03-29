<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Accommodations extends Controller
{
    public function index($locale)
    {
        $this->setLocale($locale);
        $this->isCurrent('accommodations');
        $this->setDiscount();
        $this->createView();
        return view('accommodations', $this->data);
    }
}
