<?php
    namespace App\Http\Controllers;
    use App\Models\Name;
    use App\Models\Family;

    class TesztController {

        public function teszt() {
            $names = ['Géza', 'Béla', 'Gizi', 'Pista', 'Ödön', 'Eufrézia'];
            $randomNameKey = array_rand($names);
            $randomName = $names[$randomNameKey];
            return view('pages.teszt', compact('randomName'));
        }

        public function names() {
            $names = Name::all(); 
            // Name::find(1) 
            // Name::where('name', 'Ubul')->get()
            // Name::where('id', '>', 2)->get()

            /*
            $names = Name::where('name', '<>', 'Béla')
                ->whereAnd('id', '>', 1)
                ->orderBy('id', 'desc')
                ->get()
            */

            return view('pages.names', compact('names'));
        }

        public function familyCreate($name) {
            $familyRecord = new Family();
            $familyRecord->surname = $name;
            $familyRecord->save();
            return $familyRecord->id;
        }

        public function namesCreate($family, $name) {
            $nameRecord = new Name();
            $nameRecord->name = $name;
            $nameRecord->family_id = $family;
            $nameRecord->save();
            return $nameRecord->id;
        }

    }