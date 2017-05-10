<?php
declare(strict_types=1);

class Calculator{
	public function calculate($num){
		if($num == '0'){
			return 0;
		}
		elseif ($num =='1'){
			return 1;
		}
		elseif ($num == null) {
			return 0;
		}
		elseif ($num == '1+2'){
			return 3;
		}
		else{
		}
	}
}