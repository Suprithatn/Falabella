<?php
	class Challenge{
		public $start;
		public $end;
		
		function __construct($start, $end) {
			$this->start = $start;
			$this->end = $end;
		}
		
		function loop_challenge() {
			$returnString = "";
			for( $i = $this->start; $i <= $this->end; $i++ ){
				$value = $i;
				$value = $this->check($value, 5, 3, 'Linianos');
				$value = $this->check($value, 3, 1, 'Linio');
				$value = $this->check($value, 5, 1, 'IT');
				$returnString.= $value . ",";
			}
			return $returnString;
		}
		
		function check( $num, $da, $db, $return ){
			if ( (is_numeric($num)) && ($num % $da == 0) && ($num % $db == 0) ){
				return $return;
			}
			return $num;
		}
		
		
		function UnitTest( $result ) {
			//return $result;
			$expectedResult = "1,2,Linio,4,IT,Linio,7,8,Linio,IT,11,Linio,13,14,Linianos,16,17,Linio,19,IT,Linio,22,23,Linio,IT,26,Linio,28,29,Linianos,31,32,Linio,34,IT,Linio,37,38,Linio,IT,41,Linio,43,44,Linianos,46,47,Linio,49,IT,Linio,52,53,Linio,IT,56,Linio,58,59,Linianos,61,62,Linio,64,IT,Linio,67,68,Linio,IT,71,Linio,73,74,Linianos,76,77,Linio,79,IT,Linio,82,83,Linio,IT,86,Linio,88,89,Linianos,91,92,Linio,94,IT,Linio,97,98,Linio,IT,";
			return ($result === $expectedResult) ? "Passed" :"Failed" ;
		}
	}
	
	$myValue = new Challenge(1,100);
	echo $myValue->loop_challenge();
	echo "<br>";
	
	//Unit Test Case
	
	echo "Test Case:".$myValue->UnitTest($myValue->loop_challenge());
	
?>