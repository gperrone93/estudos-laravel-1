<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index()
    {
        $series = [
            'Punisher',
            'Lost',
            'The walking dead'
        ];

        return view('series.index', compact('series'));

    }

    public function create()
    {
        return view('series.create');
    }
}
