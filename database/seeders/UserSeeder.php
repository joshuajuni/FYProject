<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','admin@bma.com')->first();
        if(!isset($user)){
            $data = [
                'username'     => 'Admin',
                'email'     => 'admin@fyproject.com',
                'password'     => Hash::make('admin123456'),
            ];
            $user = User::create($data);
            $profile = Profile::create([
                'user_id'   => $user->id,
                'name'     => 'Admin',
            ]);
            $admin = Admin::create([
                'profile_id'    => $profile->id,
                'is_active'     => true
            ]);
        }
    }
}
