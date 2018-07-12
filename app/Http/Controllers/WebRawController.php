<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\WebRaw;
use App\Impressum;
use App\Type;
use App\RegEx;
use Illuminate\Http\Request;

class WebRawController extends Controller
{

      public function dash() {
            return view('dashboard.master');
      }
    public function index($usr) {
          #self::requestRaws();
          self::checkRaws();
          $raw_entries = DB::table('web_raws')->where(['status' => 1, 'Usr_id' => 0])->simplePaginate(15);
          return view('webraw.index', ['raw_entries' => $raw_entries, 'user' => $usr]);
   }

   public function show($usr, $webid) {
         $entry = WebRaw::where('Web_id', $webid)->first();
         $datafields = Type::all();
         $impressum = Impressum::where('Web_id', $webid)->first();

         $types = Type::all();
         $reg_exes = array();
         foreach($types as $type) {
               $rid = $type->Type."_id";

               if($impressum) {
                     $regex_find = RegEx::where('id', $impressum->$rid)->first();
               } else {
                     $reg_exes[$type->Type] = NULL;
                     continue;
               }

               if($regex_find) {
               $reg_exes[$type->Type] = $regex_find->RegEx;
               } else {
                    $reg_exes[$type->Type] = NULL;
               }
         }



         return view('dashboard.master', ['entry' => $entry, 'user' => $usr,
                                          'datafields' => $datafields,
                                          'datas' => $impressum,
                                          'regex' => $reg_exes,
                                          'worked' => request('worked')]);
   }

   public static function checkRaws() {
         if(WebRaw::first()) {
               $i = 0;
               $last = WebRaw::orderBy('id', 'desc')->limit(15);
               foreach ($last as $entry) {
                     if($entry->User_id){
                           $i++;
                     }
               }
               if($i>10) {
                     self::requestRaws();
               }
         } else {
               self::requestRaws();
         }
         return;
   }

   public static function requestRaws() {
         $last = WebRaw::orderBy('id', 'desc')->first();
         if($last) {
               for ($i=$last->Web_id; $i < $last->Web_id+1000 ; $i++) {
                     $html = file_get_contents('http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=text&id='.$i);
                     $nraw = new WebRaw;
                     $nraw->Web_id=$i;
                     $nraw->Raw=$html;
                     if($html){
                           $nraw->Status=1;
                     } else {
                           $nraw->Status=0;
                           $nCounter++;
                     }
                     $nraw->save();
               }
         } else {
               for ($i=0; $i < 1000 ; $i++) {
                     $html = file_get_contents('http://88.99.67.75/getArchiveData.php?pw=0c20fc30c1cfe46df3ebf7eb6224b16e&source=webpage&output=text&id='.$i);
                     $nraw = new WebRaw;
                     $nraw->Web_id=$i;
                     $nraw->Raw=$html;
                     if($html){
                           $nraw->Status=1;
                     } else {
                           $nraw->Status=0;
                           $nCounter++;
                     }
                     $nraw->save();
               }
            }
            return;
      }

}
