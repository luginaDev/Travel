<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotelorder extends Model
{
    use HasFactory;

    public function Customer()
    {
    	return $this->hasMany(Customer::class,  'id_customer');
    }

    public function Hotel()
    {
    	return $this->hasMany(Hotel::class, 'id_kamar' );
    }
}
