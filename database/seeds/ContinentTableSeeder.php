<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 14:05
 */

use App\Entities\I18n\Continent;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('continents')->delete();
        Continent::Create([
            'continent_name' => 'Afrique',
        ]);
        Continent::Create([
            'continent_name' => 'Amérique du nord',
        ]);
        Continent::Create([
            'continent_name' => 'Amérique du sud',
        ]);
        Continent::Create([
            'continent_name' => 'Antarctique',
        ]);
        Continent::Create([
            'continent_name' => 'Asie',
        ]);
        Continent::Create([
            'continent_name' => 'Europe',
        ]);
        Continent::Create([
            'continent_name' => 'Océanie',
        ]);
    }
}