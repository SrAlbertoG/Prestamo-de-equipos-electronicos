<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\State;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('role_name','Administrador')->first();;
        $operarioRole = Role::where('role_name','Operario')->first();
        $userRole = Role::where('role_name','Usuario')->first();
        $activeState = State::where('state_name','Activo')->first();

        $user = User::firstOrCreate(
            ['user_name_1'=>'Nicolas',
              'user_name_2' => 'Alberto',
              'user_lastname_1' => 'Gutierrez',
              'user_lastname_2' => 'Castillo',
              'user_email' => 'nicog1706@gmail.com',
              'user_password' => Hash::make('Nicolas1706'),
              'user_state' => $activeState ? $activeState->state_id : null,
              'user_rol' => $adminRole ? $adminRole->role_id : null
            ]

        );

        $user = User::firstOrCreate(
            ['user_name_1'=>'Laura',
              'user_name_2' => 'Marcela',
              'user_lastname_1' => 'Benjumea',
              'user_lastname_2' => 'Burbado',
              'user_email' => 'lauraMarcela01@gmail.com',
              'user_password' => Hash::make('LauraMarcela01'),
              'user_state' => $activeState ? $activeState->state_id : null,
              'user_rol' => $operarioRole ? $operarioRole->role_id : null
            ]

        );



        $user = User::firstOrCreate(
            ['user_name_1'=>'Franceny',
              'user_name_2' => '',
              'user_lastname_1' => 'Castillo',
              'user_lastname_2' => '',
              'user_email' => 'castilloFrancy18@gmail.com',
              'user_password' => Hash::make('Franceny1706'),
              'user_state' => $activeState ? $activeState->state_id : null,
              'user_rol' => $userRole ? $userRole->role_id : null
            ]

        );

    }
}
