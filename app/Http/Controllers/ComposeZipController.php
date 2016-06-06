<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alchemy\Zippy\Zippy;


use App\Http\Requests;


/**
 * Class ComposeZipController
 * @package App\Http\Controllers
 */
class ComposeZipController extends Controller
{
    protected $zippy;


    public function __construct()
    {
        $zippy = Zippy::load();
        // customize GNU Tar inflator
        $zippy->adapters['gnu-tar.inflator'] = '/bin/tar';
        $zippy->adapters['gnu-tar.deflator'] = '/bin/tar';

        // customize ZIP deflator
        $zippy->adapters['zip.deflator'] = '/usr/bin/unzip';

        $this->zippy = $zippy;
    }
    
   
    public function index()
    {
        $name = uniqid();
        $path = storage_path('compose/' . $name . '.tar');

        $mapping = $this->mapSource();
        $archive = $this->zippy->create($path,$mapping, true);


        return response()->download($path);
    }

    protected function mapSource($version = '5.2')
    {
        $source_dir = storage_path('sources/'.$version);

        $mapping = [];
        foreach (new \DirectoryIterator($source_dir) as $file) {
            if ($file->isDot()) {
                continue;
            }
            $mapping[$file->getBasename()] = $file->getRealPath();
        }

        return $mapping;
    }
}
