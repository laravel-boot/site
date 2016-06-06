<?php

namespace App\Models;

use App\Models\Interfaces\StubInterface;
use Illuminate\Database\Eloquent\Model;

class ServiceProviderStub extends Model implements StubInterface
{
    const STUB_TYPE_APP = 100;

    protected $types = [
        self::STUB_TYPE_APP => 'stub.type_appprovider'
    ];

    protected $table = 'service_provider_stubs';

    public $fillable = [
        'name',
        'title',
        'provider_id',
        'stub',
        'stub_type',
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


    public function getStub()
    {
        // TODO: Implement getStub() method.
    }
}
