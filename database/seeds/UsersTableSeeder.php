<?php

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
        $this->command->info(" create Users loading ... ");
        for($i=0 ; $i<50 ; $i++)
        {
            $user = factory(\App\Models\User::class)->create();
            \App\Models\UserContent::firstOrCreate(['user_id' => $user->id]);
            \Illuminate\Support\Facades\Event::fire(
                new \App\Events\RegisterEvent($user)
            );
            ;
        }
    }

}
