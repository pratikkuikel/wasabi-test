<?php

namespace App\Models;

// use App\Traits\Wasabi;
use Pratikkuikel\Wasabi\Traits\Wasabi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class State extends Model
{
    use HasFactory;
    use Wasabi;

    protected $guarded = [];

    // override the default json data field, default field name is `data`
    public function __construct(array $attributes = [])
    {
        static::setWasabiStatus(true);
        static::setDataField('mero');
        parent::__construct($attributes);
    }

    protected $casts = [
        'mero' => 'array'
    ];
}
