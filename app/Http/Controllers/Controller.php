<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Planos;
use Illuminate\Http\Request;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /*
   	*
   	*
   	*	FUNCAO PARA CALCULAR O VALOR DO PLANO
   	*
   	*/
    
    function calculate(Request $request ){
    
   
   	
   	// SELECT DO PLANO
    	$plan = DB::table('planos')
    	->where('origem', $request->input('codigo1'))
    	->where('destino' , $request->input('codigodestino'))
    	->first();
    	
    	// TEMPO DIGITADO 
    	$callTemp = $request->input('tempo');
    	$ChoosePlan = $request->input('plano');
    	
    	switch ($ChoosePlan){
    		case 1:
    		
    		
    		if(isset($plan)){
    		
    		
    		if($callTemp > 30){
    			$time = $callTemp - 30;
    			
    			$percent = ($plan->valor * 0.10) + $plan->valor;
    			
    			$value = $time * $percent;
    			
		
    		}else{
    			$value = 0;
    		}
    		$total  = $callTemp * $value;
    		$totalWithOutPlan  = $callTemp * $plan->valor;
    		
    		$data['total'] = $total;
    		$data['Partial'] = $totalWithOutPlan;
    		}
    		else{
    		$data['total'] = '----';
    		$data['Partial'] = '---';
    		}
    		break;
    		
    		case 2:
    		if($callTemp >= 60){
    			$time = $callTemp - 60;
    			
    			$percent = ($plan->valor * 0.10) + $plan->valor;
    			
    			$value = $time * $percent;
    			
    		}else{
    			$value = 0;
    		}
    		$total  = $value;
    		$totalWithOutPlan  = $callTemp * $plan->valor;
    		
    		$data['total'] = $total;
    		$data['Partial'] = $totalWithOutPlan;
    		break;
    		
    		case 3:
    		if($callTemp > 120){
    			$time = $callTemp - 120;
    			
    			$percent = ($plan->valor * 0.10) + $plan->valor;
    			
    			$value = $time * $percent;
    			
    		}else{
    			$value = 0;
    		}
    		$total  = $value;
    		$totalWithOutPlan  = $callTemp * $plan->valor;
    		
    		$data['total'] = $total;
    		$data['Partial'] = $totalWithOutPlan;
    		break;
    		default:
    		$data['total'] = '';
    		$data['Partial'] = '';
    		
    	}

    	return view('register', compact('data'));
   
    }
    
    function index(){
    	return view('register') ;
    }
    
}
