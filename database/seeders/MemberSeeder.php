<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    public function run()
    {
        Member::create([
            'photo' => 'images/default.jpg',
            'name' => 'John Doe',
            'number' => '1234567890',
            'village' => 'Village A',
            'group' => 'Group 1',
            'caste' => 'OBC',
            'share_price' => 100.00,
            'share_quantity' => 1,
            'member_type' => 'Member',
            'member_id' => uniqid('MEM'),
        ]);
    }
}

