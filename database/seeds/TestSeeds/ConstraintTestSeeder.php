<?php

use App\Entities\Food\Constraint;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * Created by PhpStorm.
 * User: heldwin
 * Date: 01/08/2018
 * Time: 16:28
 */

class ConstraintTestSeeder extends Seeder
{
    public function run()
    {
        DB::table('constraints')->delete();
        Constraint::Create([
            'constraint_name' => 'Allergie au gluten',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie au lactose',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux crustacés',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux oeuf',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux arachide',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie au soja',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux fruits à coques',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie au céleri',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie à la moutarde',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux graines de sésame',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie au lupin',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux mollusques',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux Anhydrides sulfureux',
        ]);
        Constraint::Create([
            'constraint_name' => 'Allergie aux sulfites',
        ]);
        Constraint::Create([
            'constraint_name' => 'Diabète',
        ]);

    }
}