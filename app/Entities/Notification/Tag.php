<?php
/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 30/07/2018
 * Time: 10:28
 */

namespace App\Entities\Notification;


use App\Entities\Recipe\Category;
use App\Entities\Recipe\Collection;
use App\Entities\Recipe\Menu;
use App\Entities\Recipe\Recipe;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public $timestamps = false;

    protected $table = 'tags';

    protected $primaryKey = 'tag_id';

    protected $fillable = [
        'tag_name',
        //FK
        'menu_id',
        'recipe_id',
        'collection_id',
        'category_id',

    ];
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
    public function recipe()
    {
        return $this->belongsTo(Recipe::class, 'recipe_id');
    }
    public function collection()
    {
        return $this->belongsTo(Collection::class, 'collection_id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function setmenu($menu)
    {
        return $this->menu()->sync($menu);
    }
    public function setrecipe($recipe)
    {
        return $this->recipe()->sync($recipe);
    }
    public function setcollection($collection)
    {
        return $this->collection()->sync($collection);
    }
    public function setcategory($category)
    {
        return $this->category()->sync($category);
    }

}