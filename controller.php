<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SberXml extends Controller
{

    public function GetApi(Request $request)
   {
       $open = $request->open;
        $close = $request->close;
       $request->session()->put('session_open', $open );
       $request->session()->put('session_close', $close );
        $date = [];
       $values= [];
       if(!$open || !$close){
           // ответ от банка бывает долго приходит
           $url = "https://www.cbr.ru/scripts/XML_dynamic.asp?date_req1=10/02/2000&date_req2=10/02/2005&VAL_NM_RQ=R01235";

       }else {
           @$url = "https://www.cbr.ru/scripts/XML_dynamic.asp?date_req1=$open&date_req2=$close&VAL_NM_RQ=R01235";
       }
           @$dataName = simplexml_load_file($url);

        if($dataName) {

            foreach ($dataName->Record as $name) {

                $date [] = $name['Date'];
                foreach ($name->Value as $value) {

                    $values[] = $value;
                }
            }

            return view('welcome', ['date' => $date, 'values' => $values]);
        }else{

            return redirect()->to(route('api'));
        }

    }

}
