<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 31/07/2018
 * Time: 10:30
 */

namespace Tests\Unit\Api\Recipe;


use App\Entities\Recipe\Menu;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class MenuUnitTest extends TestCase
{

    use WithoutMiddleware;

    public function test_create_menu_entity()
    {
        echo "\n".__FUNCTION__."\n\n";


        $data = [
            'menu_name' => 'Test_menu_name',
            'menu_slug' => 'Test_menu_slug',
            'image_id' => 42,
        ];
        $menu = new Menu($data);

        $this->assertInstanceOf(Menu::class, $menu);
        $this->assertEquals($data['menu_name'], $menu->menu_name);
        $this->assertEquals($data['menu_slug'], $menu->menu_slug);
        $this->assertEquals($data['image_id'], $menu->image_id);



        $results=$menu;
        echo json_encode($results, JSON_PRETTY_PRINT);
    }
}