<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class PostController extends Controller
{
	public function index() {

		$items = Item::all();

		return view('items', ['items' => $items]);

	}

	public function delete($id) {

		// $item = Item::onlyTrashed()
  //               ->where('id', $id)
  //               ->get();

		// $item->restore();

		Item::withTrashed()->where('id', $id)->restore();
	}
}
