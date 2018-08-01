<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 13:37
 */
use App\Entities\I18n\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CountryTableSeeder extends Seeder
{
  public function run()
{
    DB::table('countries')->delete();

    //AFRIQUE
    Country::Create([
        'country_name' => 'Algérie',
        'country_legal_age' => 19,
        'continent_id' => 1,
    ]);
    //AMERIQUE DU NORD
    Country::Create([
        'country_name' => 'Canada',
        'country_legal_age' => 18,
        'continent_id' => 2,
    ]);
    //AMERIQUE DU SUD
    Country::Create([
        'country_name' => 'Brésil',
        'country_legal_age' => 18,
        'continent_id' => 3,
    ]);
    //ANTARCTIQUE
    Country::Create([
        'country_name' => 'Géorgie du sud et les îles Sandwich du sud',
        'country_legal_age' => 18,
        'continent_id' => 4,
    ]);
    Country::Create([
        'country_name' => 'Antarctiques Agentine',
        'country_legal_age' => 18,
        'continent_id' => 4,
    ]);
    Country::Create([
        'country_name' => 'Terres australes et antarctiques françaises (TAAF)',
        'country_legal_age' => 18,
        'continent_id' => 4,
    ]);
    //ASIE
    Country::Create([
        'country_name' => 'Japon',
        'country_legal_age' => 20,
        'continent_id' => 5,
    ]);

    //EUROPE
    Country::Create([
        'country_name' => 'France',
        'country_legal_age' => 18,
        'continent_id' => 6,
    ]);
    //OCEANIE
    Country::Create([
        'country_name' => 'Australie',
        'country_legal_age' => 18,
        'continent_id' => 7,
    ]);

}

}