<?php

 abstract class form {
    protected $local, $checkIn, $checkOut, $hospedes, $dias;
    
    public function __construct($local, $checkIn, $checkOut, $hospedes) {
        $this->local = $local;
        $this->setCheckIn($checkIn);
        $this->setCheckOut($checkOut);
        $this->setHospedes($hospedes);
 
    }

    public function getLocal() {       
        return $this->local;
    }

    public function getCheckIn() {
        return $this->checkIn;
    }

    public function getCheckOut() {
        return $this->checkOut;
    }

    public function getHospedes() {
        return $this->hospedes;
    }

    public function setLocal($local) { 
       
        $this->local = $local;
    }

    public function setCheckIn($data1) {        
        $datatime = new DateTime($data1);
        $checkIn = $datatime->format('d-m-Y');
        $this->checkIn = $checkIn;
        
    }

    public function setCheckOut($data1) {
        $datatime =new DateTime($data1);
        $checkOut= $datatime->format('d-m-Y');
        $this->checkOut = $checkOut;
        
   }

    public function setHospedes($hospedes) {
       if($hospedes > 0 )
           $this->hospedes = $hospedes;
       
       else{
           $this->hospedes = 0;        
          
       }   
    }
   
    public function getDias() {
        $hoje = date('Y-m-d');
        $hoje = new DateTime($hoje);
        $auxcheckin = new DateTime($this->checkIn);
        $auxcheckin->format('Y-m-d');
        $auxcheckout = new Datetime($this->checkOut);
        $auxcheckout->format('Y-m-d');
            
   // var_dump($hoje <= $auxcheckin);
            if(($auxcheckin < $auxcheckout) and ($hoje <= $auxcheckin) ){
                $datetime1 = new DateTime($this->checkIn);
                $datetime2 = new DateTime($this->checkOut);
                $interval = $datetime1->diff($datetime2);
                $this->dias=$interval->days; 
            }
            else{         
                $this->dias = 0;
            }

         return $this->dias;
    }
    
    public function setDias($dias) {
        $this->dias = $dias;
    }
}
