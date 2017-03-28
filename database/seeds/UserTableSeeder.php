<?php

use Illuminate\Database\Seeder;
use Teach\Entities\User;

class UserTableSeeder extends Seeder {
    
    public function run(){
        
      //  DB::table('users')->truncate();
        $this->createAdmin();
        factory(User::class, 20)->create();
    }
    
    private function createAdmin(){
        
        User::create([
            
            'name' => 'Giovanny',
            'email' => 'giovanny@gmail.com',
            'password' => bcrypt('admin')
        ]);
        
    }
}