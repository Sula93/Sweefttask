<?php
	class Functions{
		public function Fibo($n){  
		    $num1 x = 0;
		    $num2 y = 1;  
		    $counter = 0;

		    $result_array = array();

		    while ($counter < $n){
		        //echo ' '.x;
		    	$result_array[] = $x;

		        $m = $y + $x;
		        $x = $y;
		        $y = $m;
		        $counter = $counter + 1;
		    }

		    return $result_array;
		}

		public function reverse_integer($n)
		{
		    $reverse = 0;
		    while ($n > 0)
		      {
		        $reverse = $reverse * 10;
		        $reverse = $reverse + $n % 10;
		        $n = (int)($n/10);
		      }
		     return $reverse;
		}   
		 
		public function is_arithmetic($arr)
		{
		   $delta = $arr[1] - $arr[0];
		   for($index=0; $index<sizeof($arr)-1; $index++)
		    {
		        if (($arr[$index + 1] - $arr[$index]) != $delta)
		        {
		             
		             return "არითმეტიკული პროგრესია არ არის ";
		        }       
		    }
		    return "არითმეტიკული პროგრესია არის";
		}



		public function most_repeated($array){				
				$values = array_count_values($array);
				arsort($values);
				$most =  array_slice(array_keys($values), 0, 5, true);			
				return $most[0];	
		}


		public function sort_array($array,$search_element){
			 $return_array = array();
			 $counter = 0;
			 $reverse = count($array) - 1;
			for($i=0; $i<count($array); $i++){
				if(strpos((string)$array[$i],(string)$search_element) !== false){	
					$return_array[$reverse] = $array[$i];					
					$reverse--;						
				}else{					
					$return_array[$counter] = $array[$i];
					$counter++;
				}
					
			}
			ksort($return_array);
			return $return_array;

		}

		public function dump($param){
			echo '<pre>';				 
				print_r($param);
			echo '</pre>';
		}
	}
?>