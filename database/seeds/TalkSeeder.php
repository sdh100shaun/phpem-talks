<?php

use Illuminate\Database\Seeder;



class TalkSeeder extends Seeder
{
    public function run()
    {
        //INSERT INTO TALKS(starttime,endtime,title,speaker) VALUES ('2015-10-03 10:45','2015-10-03 11:10','Docker','Billie Thompson');

        DB::table('talks')->insert([
            'starttime' => '2015-10-03 10:45',
            'endtime' => '2015-10-03 11:10',
            'title' => 'Docker',
            'speaker' =>'Billie Thompson',
            'abstract'=>'',
            'created_at'=>'now',
            'updated_at'=>'now'
        ]);
    }
}
