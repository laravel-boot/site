<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\GenerateRequest;

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

    public function generatePost(GenerateRequest $request)
    {
        dump($request->all()); die();
    }
}
