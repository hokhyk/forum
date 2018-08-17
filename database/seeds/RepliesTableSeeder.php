<?php

use Illuminate\Database\Seeder;

class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $r1 = [
            'user_id' => 1,
            'discussion_id' => 1,
            'contenido' => 'Lorem solori psum amet sit consetur adilado solor sit',
        ];
        $r2 = [
            'user_id' => 1,
            'discussion_id' => 2,
            'contenido' => 'Lorem solori psum amet sit consetur adilado solor sit',
        ];
        $r3 = [
            'user_id' => 2,
            'discussion_id' => 3,
            'contenido' => 'Lorem solori psum amet sit consetur adilado solor sit',
        ];
        $r4 = [
            'user_id' => 4,
            'discussion_id' => 4,
            'contenido' => 'Lorem solori psum amet sit consetur adilado solor sit',
        ];
        \App\Reply::create($r1);
        \App\Reply::create($r2);
        \App\Reply::create($r3);
        \App\Reply::create($r4);
    }
}
