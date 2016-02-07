<?php
 
class UserApiTableSeeder extends Seeder {
 
  public function run()
  {
      DB::table('usersapi')->delete();
 
      User::create(array(
          'username' => 'ciet',
          'password' => Hash::make('cietifsp0802')
      ));
 
      User::create(array(
          'username' => 'grupotcc',
          'password' => Hash::make('cietaplicativo')
      ));
  }
 
}