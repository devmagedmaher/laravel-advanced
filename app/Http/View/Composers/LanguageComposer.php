<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class LanguageComposer {

	public function compose(View $view) {
        $langs = [
            ['name' => 'english'],
            ['name' => 'arabic'],
            ['name' => 'germany'],
        ];

		$view->with('langs', $langs);
	}
}