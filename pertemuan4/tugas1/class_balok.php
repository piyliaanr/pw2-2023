
<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($p, $l, $t) {
		        // code..
                $this->panjang = $p;
                $this->lebar = $l;
                $this->tinggi = $t;
        }
    
        public function getLuas() {
					  // code..
                      $Luas = 2 * ($this->panjang*$this->lebar + $this->lebar*$this->tinggi + $this->panjang*$this->tinggi);
                      return $Luas;
				}
    
        public function getKeliling() {
            // code..
            $Kel = 4 * ($this->panjang + $this->lebar + $this->tinggi);
            return $Kel; 
        }
    
        public function getVolume() {
            // code..
            $Vol = $this->panjang * $this->lebar * $this->tinggi;
            return $Vol;
        }
    }
?>