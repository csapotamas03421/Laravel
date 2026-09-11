<?php
    namespace App\Http\Controllers;

    class TesztController {

        public function teszt() {
            $names = ['Géza', 'Béla', 'Gizi', 'Pista', 'Ödön', 'Eufrézia'];
            $randomNameKey = array_rand($names);
            $randomName = $names[$randomNameKey];
            return view('teszt', compact('randomName'));
        }

    }