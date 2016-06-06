<?php

namespace App\Models;

use App\Models\Interfaces\PackageInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Package
 * @package App\Models
 */
class Package extends Model implements PackageInterface
{
    protected $table = 'packages';

    public $fillable = [
        'name',
        'title',
        'description',
        'versions',
    ];
    
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'name' => 'string',
    ];



}
