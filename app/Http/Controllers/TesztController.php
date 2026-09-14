<?php
    namespace App\Http\Controllers;

    class TesztController {

        public function teszt() {
            $names = ['Géza', 'Béla', 'Gizi', 'Pista', 'Ödön', 'Eufrézia'];
            $randomNameKey = array_rand($names);
            $randomName = $names[$randomNameKey];
            return view('pages.teszt', compact('randomName'));
        }

        public function names() {
            $names = ['Géza', 'Béla', 'Gizi', 'Pista', 'Ödön', 'Eufrézia'];
            return view('pages.names', compact('names'));
        }

    }