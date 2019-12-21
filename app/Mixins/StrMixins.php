<?php

namespace App\Mixins;


class StrMixins {

	public function max() {

		return function ($string, $max) {
            return strlen($string) <= $max;
        };
	}

	public function prefix() {

		return function ($string, $prefix) {
			return $prefix . $string;
		};
	}
}