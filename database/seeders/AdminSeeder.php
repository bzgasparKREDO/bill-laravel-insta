<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->user->name = 'The Admin';
        $this->user->email = 'admin@gmail.com';
        $this->user->password = Hash::make('admin12345');
        $this->user->role_id = 1;
        $this->user->save();
    }
}
