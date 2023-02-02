<?php

namespace Database\Seeders;
//use App\Models\level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('levels')->truncate();
        $xp=100;
        $stat=2;
        for($i=0;$i<10;$i++){
            $xp *=2;
            DB::table('levels')->insert([
                'xp'=>$xp,
                'stat'=>$stat
            ]);
            $stat*=2;
        }
        
    }
}
