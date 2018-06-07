<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = new User();
        $user1->name = "Miguel Ataíde";
        $user1->email = "miguelataide365@gmail.com";
        $user1->password = bcrypt("Ordinateur");
        $user1->save();

        $user1->assignRole('admin');

        $user2 = new User();
        $user2->name = "Nevaldo Rocha";
        $user2->email = "nevaldorocha@gmail.com";
        $user2->password = bcrypt("vshopvshop");
        $user2->save();

        $user2->assignRole('empresario');
    }
}
