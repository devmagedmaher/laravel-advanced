<?php


namespace App\Order;


use App\Billing\Paypal;

class OrderDetails {
	
	private $payment;

	public function __construct(Paypal $payment) {

		$this->payment = $payment;

	}

	public function info() {

		$this->payment->setDiscount(15);

		return [

			'order_number' => 32132,
			'product_id' => 12,

		];

	}

}