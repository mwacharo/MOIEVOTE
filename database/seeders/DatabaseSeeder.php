<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //  \App\Models\User::factory(10)->create();
        $this->call(CandidateSeeder::class);
       // $this->call(GroupSeeder::Class);

        // \App\Models\User::factory()->create([
        //      'name' => 'Test User',
        //      'email' => 'test@example.com',
        //      'email_verified_at'=>'2023-06-12 17:53:41',
        //      'student_number' =>'EDGHH',
        //      'password' => '12345678',
        //      'created_at' => '2023-06-12 17:53:41',
        //      'updated_at'=>'2023-06-12 17:53:41',


        //  ]);

    //     for ($i = 1; $i <= 10; $i++) {
    //         User::factory()->create([
    //             'name' => 'Test User',
    //             'email' => "test{$i}@example.com",
    //             'email_verified_at' => '2023-06-12 17:53:41',
    //             'student_number' => '123456',
    //             'password' => '12345678',
    //             'created_at' => '2023-06-12 17:53:41',
    //             'updated_at' => '2023-06-12 17:53:41',
    //         ]);
    // }
}
}
