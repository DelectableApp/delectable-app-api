<?php

use App\Entities\I18n\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 14:50
 */

class LanguageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->delete();
        Language::Create([
            'language_name' => 'Français',
            'language_read_direction' => 'LTR',
        ]);
        Language::Create([
            'language_name' => 'Anglais',
            'language_read_direction' => 'LTR',
        ]);
        Language::Create([
            'language_name' => 'Italien',
            'language_read_direction' => 'LTR',
        ]);
        Language::Create([
            'language_name' => 'Espagnol',
            'language_read_direction' => 'LTR',
        ]);
        Language::Create([
            'language_name' => 'Allemand',
            'language_read_direction' => 'LTR',
        ]);
        Language::Create([
            'language_name' => 'Russe',
            'language_read_direction' => 'LTR',
        ]);
        Language::Create([
            'language_name' => 'Arabe',
            'language_read_direction' => 'RTL',
        ]);
        Language::Create([
            'language_name' => 'Coréen',
            'language_read_direction' => 'LTF or TTB',
        ]);
        Language::Create([
            'language_name' => 'Japonais',
            'language_read_direction' => 'LTR or TTB',
        ]);
        Language::Create([
            'language_name' => 'Ebreux',
            'language_read_direction' => 'RTL',
        ]);
    }
}
