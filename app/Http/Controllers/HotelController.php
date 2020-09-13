<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Hotel;
use App\Models\Hotelorder;

class HotelController extends Controller
{
    public function index()
    {
    	$data = Hotelorder::with('Hotel', 'Customer')->get();
    	return $data;
    }
}
