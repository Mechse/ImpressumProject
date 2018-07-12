<?php

namespace App\Http\Controllers;

use App\Impressum;
use App\Type;
use App\RegEx;
use App\WebRaw;
use App\User;
use Illuminate\Http\Request;

class ImpressumController extends Controller
{
    public function store($usr, $webid) {



          $types = Type::all();

          $impressum_attr = array();
          $impressum_val = array();

          $regex = new RegEx;

          foreach ($types as $type) {
                $t = $type->Type;

                // //putting RegEx ID !!!!!!!!

                $reg_input = request($t."_reg");

                if(RegEx::where('RegEx', $reg_input)->first()) {
                      $regex = RegEx::where('RegEx', $reg_input)->first();
                      $impressum_val[$t."_id"] = $regex->id;
                } else {
                      $regex = array();
                      $regex['RegEx'] = $reg_input;
                      $regex['Type'] = $t;
                      $regex['created_at'] = date('Y-m-d h:s:i');
                      $regex['updated_at'] = date('Y-m-d h:s:i');
                      $foundRegEx = RegEx::firstOrCreate(['RegEx' => $reg_input], $regex);
                      $impressum_val[$t."_id"] = $foundRegEx->id;
                }
                $impressum_val[$t] = request($t);
          }

            $impressum_val["Web_id"] = $webid;

            Impressum::updateOrCreate(['Web_id' => $webid], $impressum_val);

            $entry = WebRaw::where('Web_id', $webid)->first();

            if(request('worked')) {
                  $entry->Usr_id = User::where('name', $usr)->first()->id;
            } else {
                  $entry->Usr_id = 0;
            }

            $entry->save();



            $datafields = Type::all();
            $impressum = Impressum::where('Web_id', $webid)->first();


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
}
