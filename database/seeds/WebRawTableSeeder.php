<?php

use Illuminate\Database\Seeder;
use App\WebRaw;
class WebRawTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          for ($i=0; $i < 1000 ; $i++) {
              $html = file_get_contents('http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=text&id='.$i);
              $nraw = new WebRaw;
              $nraw->Web_id=$i;
              $nraw->Raw=$html;
              if($html){
                     $nraw->Status=1;
              } else {
                     $nraw->Status=0;
              }
              echo $i."\n";
              $nraw->save();
         }
    }
}
