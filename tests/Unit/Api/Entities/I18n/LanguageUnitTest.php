<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 16:54
 */

namespace Tests\Unit\Api\I18n;

use App\Entities\I18n\Language;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class LanguageUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_country_entity()
    {
        echo "\n".__FUNCTION__."\n\n";
        $data = [
            'language_name' => 'Test_language_name',
            'language_read_direction' => 'Test_language_read_direction',
        ];


        $language = new Language($data);

        $this->assertInstanceOf(Language::class, $language);
        $this->assertEquals($data['language_name'], $language->language_name);
        $this->assertEquals($data['language_read_direction'], $language->language_read_direction);



        $results=$language;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}