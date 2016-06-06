<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\GenerateRequest;

/**
 * Class GeneratorController
 * @package App\Http\Controllers
 */
class GeneratorController extends Controller
{

    public function generate(GenerateRequest $request)
    {
        dump($request->all()); die();
    }
}
