<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/

	function kelulusan($ratarata){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/

		if ($ratarata > 55) {
			return "Lulus";
		} else {
			return "Tidak Lulus";
		}
	}
	
	function grade($ratarata){
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/
		if ($ratarata <= 35) {
			return 'E';
		} elseif ($ratarata <= 55) {
			return 'D';
		} elseif ($ratarata <= 69) {
			return 'C';
		} elseif ($ratarata <= 84) {
			return 'B';
		} elseif ($ratarata <= 100) {
			return 'A';
		} else {
			return 'I';
		}
	}
	
	function predikat($grade){
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/
		switch ($grade) {
			case 'A': 
				return 'Sangat Memuaskan';
			case 'B':
				return 'Memuaskan';
			case 'C':
				return 'Cukup';
			case 'D':
				return 'Kurang';
			case 'E':
				return 'Sangat Kurang';
			default :
				return 'Tidak Ada';
		}
	}
?>