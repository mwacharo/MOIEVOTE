<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $groups = [
            [
                'id' => 1,
                'group_name' => 'president',
            ],
            [
                'id' => 2,
                'group_name' => 'secretary',
            ],
            [
                'id' => 3,
                'group_name' => 'entertainment',
            ],
            [
                'id' => 4,
                'group_name' => 'treasury',
            ],
        ];

        Group::insert($groups);
    }
}
