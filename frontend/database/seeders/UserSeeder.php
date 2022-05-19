<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_login')->insert([
            'name' => 'Gustavo Ajada',
            'mail' => 'teste@gmail.com',
            'password' => '@jada024681',
            'token' => 'dsgds6g7df1sd86e7FAJRIUWRBWAYAGFFiiyurabdfa',
            'courses' => '[{"course_token" : "21j21ç2k3hojgçl6f865da5rh15sj4zdgj5f2dh45dj5czgjcjjjjb"},{"course_token" : "0e5eb9647c9a5e16bf71003226e18cd6"},{"course_token" : "sd8g74bs65g61s8vnc4n5g6d564jgkfk5fgnxvn1v2hf2djzj"},{"course_token" : "bs51fdsv1ds6g4s6df16sd8f4ad1v6a46fd6cb6sfsz5xzgr"},{"course_token" : "d1fe08e03fae33f348299fc66de87bb4"},{"course_token" : "daf21817e5518d35c332acef792db9df"},{"course_token" : "ab044d4ae61f1048e4c4bee1f5f044c2"},{"course_token" : "5d259e8fe6c304c3659436bd3c501c59"}]',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);
    }
}
