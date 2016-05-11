<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Display the home page.
     *
     * @return Response
     */
    public function index()
    {
        return view('page.index');
    }
}
