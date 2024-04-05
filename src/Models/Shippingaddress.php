<?php

namespace Damann8479\Address\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shippingaddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shipping_name',
        'shipping_street',
        'shipping_housenumber',
        'shipping_postcode' ,
        'shipping_city',
        'shipping_country',
    ];


    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
