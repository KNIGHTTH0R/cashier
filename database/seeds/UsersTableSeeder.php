<?php

use App\User;
use App\Customer;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Administrator',
            'email' => 'admin@cashier.com',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'remember_token' => str_random(10),
        ];
        $admin = factory(User::class)->create($admin);
        $admin->assignRole('super');

        // Customer Default
        $customer = [
          'name' => 'Walk in customer',
          'phone' => null,
          'gender' => 'male'
        ];
        factory(Customer::class)->create($customer);
    }
}
