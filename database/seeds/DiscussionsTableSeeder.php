<?php

use Illuminate\Database\Seeder;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Implementin aje ldje jo hou lumera jedla';
        $t2 = 'Pagination dels toma play la lala gorund';
        $t3 = 'Vuejs eventlisteners for chils components';
        $t4 = 'Laravel homested error - undetected database';
        $d1 = [
            'title' => $t1,
            'contenido' => 'Lorem ipsum solor sit amet consetur adilado solor sit amet consetur adilado',
            'channel_id' => 1,
            'user_id' => 2,
            'slug' => str_slug($t1)
        ];
        $d2 = [
            'title' => $t2,
            'contenido' => 'Vuejs pagination sit amet consetur adilado solor sit amet consetur adilado',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug($t2)
        ];
        $d3 = [
            'title' => $t3,
            'contenido' => 'Lorem ipsum solor sit amet consetur adilado solor sit amet consetur adilado',
            'channel_id' => 2,
            'user_id' => 1,
            'slug' => str_slug($t3)
        ];
        $d4 = [
            'title' => $t4,
            'contenido' => 'Lorem ipsum solor sit amet consetur adilado solor sit amet consetur adilado',
            'channel_id' => 5,
            'user_id' => 1,
            'slug' => str_slug($t4)
        ];
        \App\Discussion::create($d1);
        \App\Discussion::create($d2);
        \App\Discussion::create($d3);
        \App\Discussion::create($d4);
    }
}
