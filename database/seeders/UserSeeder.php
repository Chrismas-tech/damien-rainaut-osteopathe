<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */
        // Définir les utilisateurs prédéfinis
        $arrayUsers = [
            [
                'firstname' => 'Christophe',
                'lastname' => 'Luciani',
                /* 'address' => '60 bis rue du Faubourg Saint-Honoré',
                'phone' => '0472483333', */
                'email' => 'admin@gmail.com',
                'password' => bcrypt('secret'),
                'role' => 'admin',
                'email_verified_at' => now(),
                'created_at' => now(),
            ],
        ];
        // Insérer tous les utilisateurs dans la base de données
        User::insert($arrayUsers);
    }
}
