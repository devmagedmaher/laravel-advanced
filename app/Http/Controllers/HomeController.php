<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Billing\Paypal;
use App\Order\OrderDetails;

class HomeController extends Controller
{
	public function index(Paypal $paypal, OrderDetails $order) {
		
		$order->info();

		dd($paypal->charge(500));



	}
}
