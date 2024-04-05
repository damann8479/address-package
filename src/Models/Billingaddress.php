<?php

namespace Damann8479\Address\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Billingaddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ust_id',
        'billing_name',
        'billing_street',
        'billing_housenumber',
        'billing_postcode',
        'billing_city',
        'billing_country',
    ];

    public function user ()
    {
        return $this->belongsTo(User::class);
    }
}
