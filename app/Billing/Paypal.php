<?php

namespace App\Billing;



class Paypal 
{
	private $currency;
	private $discount;

	public function __construct($currency) {

		$this->currency = $currency;

	}

	public function charge($amount) {

		return [

			'order_number' => rand(1111,9999),
			'currency' => $amount,
			'discount' => $this->discount,
			'status' => 'success',

		];

	}

	public function setDiscount($amount) {

		$this->discount = $amount;

	}
}
