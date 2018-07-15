<?php
use App\Entities\User\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();
        Role::create([
            'role_id' => Role::ADMIN,
            'role_name' => Role::ADMIN_LABEL,
        ]);
        Role::create([
            'role_id' => Role::MODERATEUR,
            'role_name' => Role::MODERATEUR_LABEL,
        ]);
        Role::create([
            'role_id' => Role::CONTRIBUTEUR,
            'role_name' => Role::CONTRIBUTEUR_LABEL,
        ]);
        Role::create([
            'role_id' => Role::VERIFIEDUSER,
            'role_name' => Role::VERIFIEDUSER_LABEL,
        ]);
        Role::create([
            'role_id' => Role::USER,
            'role_name' => Role::USER_LABEL,
        ]);
    }
}