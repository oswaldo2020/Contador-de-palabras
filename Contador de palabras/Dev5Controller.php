<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dev5Controller extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         
        if(!$request->filled('frase')){
            return view('dev.countWords' ); 
        }

        $frase1 = $request->frase;
        $frase2 = explode(' ',$frase1);
        
        $totalWords = $this->countWords ($frase2);
        return view('dev.countWords')->with(['totalWord'=>$totalWords]);
    }
    
    function countWords ($frase2){
        $total_sum = 0;     
        $words = [];    
        for($x=0;$x< count($frase2) ;$x++){
            $fraseArray = $this->clearString($frase2);
            $a = $fraseArray[$x];
            // dump($a);
            $b = ctype_alpha($fraseArray[$x]);
            if($b == true){
                array_push($words,$a);
            }
        }
            $total = array_count_values($words);
            $total_sum = array_sum ($total);
            return $total_sum;
    }
    function clearString($string){
        $replace = $string;
        $replace = preg_replace('/[-_,ñ,Ñ.!;áéíóúÁÉÍÓÚñÑ."-".]/', '', $replace);
        return $replace;
    }
}
