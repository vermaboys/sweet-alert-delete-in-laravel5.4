<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //call uses table seeder class
  		$this->call('student');
        //this message shown in your terminal after running db:seed command
        $this->command->info("student table seeded :)");
    }
}
class student extends Seeder {

   public function run()
   {
     //insert some dummy records
     DB::table('student')->insert(array(
         array('roll_no'=>'101','name'=>'deepak','class'=>'10+2'),
         array('roll_no'=>'102','name'=>'satwinder','class'=>'10+2'),
         array('roll_no'=>'103','name'=>'rohit','class'=>'10+2'),
         array('roll_no'=>'104','name'=>'mandeep','class'=>'10+2'),
         array('roll_no'=>'105','name'=>'ajay','class'=>'10+2'),
         array('roll_no'=>'106','name'=>'samar','class'=>'10+2')
    ));
   }

}
