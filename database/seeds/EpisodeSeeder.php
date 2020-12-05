<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            //drama 1
            ['movie_id'=>1,'episode'=>1,'title'=>'episode 1:permulaan'],
            ['movie_id'=>1,'episode'=>2,'title'=>'apa yang terjadi?'],
            ['movie_id'=>1,'episode'=>3,'title'=>'entah siapa'],
            ['movie_id'=>1,'episode'=>4,'title'=>'aku tak mengerti'],
            ['movie_id'=>1,'episode'=>5,'title'=>'prajurit andalan'],
            ['movie_id'=>1,'episode'=>6,'title'=>'kena batunya juga'],
            ['movie_id'=>1,'episode'=>7,'title'=>'test purpose'],
            ['movie_id'=>1,'episode'=>8,'title'=>'test purpose'],
            ['movie_id'=>1,'episode'=>9,'title'=>'test purpose'],
            //drama 2
            ['movie_id'=>2,'episode'=>1,'title'=>'episode 1:permulaan baru'],
            ['movie_id'=>2,'episode'=>2,'title'=>'serangan terjadi'],
            ['movie_id'=>2,'episode'=>3,'title'=>'perang perang perang'],
            ['movie_id'=>2,'episode'=>4,'title'=>'habis ide'],
            ['movie_id'=>2,'episode'=>5,'title'=>'test purpose'],
            ['movie_id'=>2,'episode'=>6,'title'=>'test purpose'],
            //drama 3
            ['movie_id'=>3,'episode'=>1,'title'=>'episode 1: bab 1'],
            ['movie_id'=>3,'episode'=>2,'title'=>'pasangan siapa kah itu?'],
            ['movie_id'=>3,'episode'=>3,'title'=>'entah apa yang terjadi'],
            ['movie_id'=>3,'episode'=>4,'title'=>'pernikahan terlarang'],
            ['movie_id'=>3,'episode'=>5,'title'=>'cinta bersemi kembali'],
            //drama 4
            ['movie_id'=>4,'episode'=>1,'title'=>'orang terkenal'],
            ['movie_id'=>4,'episode'=>2,'title'=>'siapakah gerangan?'],
            ['movie_id'=>4,'episode'=>3,'title'=>'dia terlihat seperti model'],
            ['movie_id'=>4,'episode'=>4,'title'=>'test purpose'],
            ['movie_id'=>4,'episode'=>5,'title'=>'test purpose'],
            ['movie_id'=>4,'episode'=>6,'title'=>'test purpose'],
            ['movie_id'=>4,'episode'=>7,'title'=>'test purpose'],
            ['movie_id'=>4,'episode'=>8,'title'=>'test purpose'],

            //kids 1
            ['movie_id'=>5,'episode'=>1,'title'=>'mystery shack'],
            ['movie_id'=>5,'episode'=>2,'title'=>'uncle stan'],
            ['movie_id'=>5,'episode'=>3,'title'=>'goblin'],
            ['movie_id'=>5,'episode'=>4,'title'=>'little gideon'],
            ['movie_id'=>5,'episode'=>5,'title'=>'depth forest'],
            ['movie_id'=>5,'episode'=>6,'title'=>'test purpose'],
            ['movie_id'=>5,'episode'=>7,'title'=>'test purpose'],
            ['movie_id'=>5,'episode'=>8,'title'=>'test purpose'],
            //kids 2
            ['movie_id'=>6,'episode'=>1,'title'=>'starting'],
            ['movie_id'=>6,'episode'=>2,'title'=>'bubblegum'],
            ['movie_id'=>6,'episode'=>3,'title'=>'magical dogs'],
            ['movie_id'=>6,'episode'=>4,'title'=>'lemonade issues'],
            //kids 3
            ['movie_id'=>7,'episode'=>1,'title'=>'hi patrick'],
            ['movie_id'=>7,'episode'=>2,'title'=>'little things called loved'],
            ['movie_id'=>7,'episode'=>3,'title'=>'ooh gary'],
            ['movie_id'=>7,'episode'=>4,'title'=>'chill out squidward'],
            ['movie_id'=>7,'episode'=>5,'title'=>'crabby patty'],
            ['movie_id'=>7,'episode'=>6,'title'=>'test purpose'],
            ['movie_id'=>7,'episode'=>7,'title'=>'test purpose'],
            ['movie_id'=>7,'episode'=>8,'title'=>'test purpose'],
            ['movie_id'=>7,'episode'=>9,'title'=>'test purpose'],
            //kids 4
            ['movie_id'=>8,'episode'=>1,'title'=>'journey start'],
            ['movie_id'=>8,'episode'=>2,'title'=>'portal'],
            ['movie_id'=>8,'episode'=>3,'title'=>'suspicious green stuff'],
            ['movie_id'=>8,'episode'=>4,'title'=>'ufo'],
            ['movie_id'=>8,'episode'=>5,'title'=>'smile'],
            //tv 1
            ['movie_id'=>9,'episode'=>1,'title'=>'starting point'],
            ['movie_id'=>9,'episode'=>2,'title'=>'unindentified object'],
            ['movie_id'=>9,'episode'=>3,'title'=>'test purpose'],
            ['movie_id'=>9,'episode'=>4,'title'=>'test purpose'],
            ['movie_id'=>9,'episode'=>5,'title'=>'test purpose'],
            ['movie_id'=>9,'episode'=>6,'title'=>'test purpose'],
            ['movie_id'=>9,'episode'=>7,'title'=>'test purpose'],

            //tv 2
            ['movie_id'=>10,'episode'=>1,'title'=>'its holiday'],
            ['movie_id'=>10,'episode'=>2,'title'=>'gas?'],
            ['movie_id'=>10,'episode'=>3,'title'=>'restricted area'],
            ['movie_id'=>10,'episode'=>4,'title'=>'test purpose'],
            ['movie_id'=>10,'episode'=>5,'title'=>'test purpose'],
            ['movie_id'=>10,'episode'=>6,'title'=>'test purpose'],
            ['movie_id'=>10,'episode'=>7,'title'=>'test purpose'],

            //tv 3
            ['movie_id'=>11,'episode'=>1,'title'=>'starting point'],
            ['movie_id'=>11,'episode'=>2,'title'=>'mother of dragon'],
            ['movie_id'=>11,'episode'=>3,'title'=>'fire and ice'],
            ['movie_id'=>11,'episode'=>4,'title'=>'is it even real?'],
            ['movie_id'=>11,'episode'=>5,'title'=>'test purpose'],
            ['movie_id'=>11,'episode'=>6,'title'=>'test purpose'],
            ['movie_id'=>11,'episode'=>7,'title'=>'test purpose'],
            ['movie_id'=>11,'episode'=>8,'title'=>'test purpose'],
            ['movie_id'=>11,'episode'=>9,'title'=>'test purpose'],

            //tv 4
            ['movie_id'=>12,'episode'=>1,'title'=>'the scheme'],
            ['movie_id'=>12,'episode'=>2,'title'=>'biographs'],
            ['movie_id'=>12,'episode'=>3,'title'=>'history'],
            ['movie_id'=>12,'episode'=>4,'title'=>'records'],


        ]);
    }
}
