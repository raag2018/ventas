<?php 
	class service{
		public function datos($var){
			$fecha = date('F j, Y, g:i:s a');
			$var = $var.'  '.$fecha;
			return $var;
		}
	}

 ?>