<?php

namespace App\Http\Controllers;

use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * Class SiteController
 * @package App\Http\Controllers
 */
class SiteController extends Controller
{
    /**
     * @Get("/", as="site.index")
     */
    public function index()
    {
        return view('site.index');
    }
}
