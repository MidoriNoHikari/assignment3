<?php
  // This is the file for the parent class

  class ParentClass {
    public $model = array("X-Wing", "A-Wing", "B-Wing", "Y-Wing", "TIE-Fighter", "TIE-Interceptor", "TIE-Bomber");
    private $attack = array(5, 7, 8, 3, 6, 8, 4);
	private $durability = array(5, 3, 6, 8, 4, 2, 9);
    private $manuverability = array(5, 8, 4, 5, 8, 9, 3);
	public $color = "";
	public $attStat = "";
	public $durStat = "";
	public $manStat = "";
	
	public function __construct($entry, $paint) {
	  $this->key = array_search($entry,$this->model);
	  $this->att = $this->attack[$this->key];
	  $this->dur = $this->durability[$this->key];
	  $this->man = $this->manuverability[$this->key];
	  $this->color = $paint;
	  
	  $counter = $this->att;
	  for ($i = 0; $i < $counter; $i++) {
        $this->attStat = $this->attStat . "[]";
	  }
	  
	  $counter = $this->dur;
	  for ($j = 0; $j < $counter; $j++) {
	    $this->durStat = $this->durStat . "[]";
	  }
	  
	  $counter = $this->man;
	  for ($k = 0; $k < $counter; $k++) {
		$this->manStat = $this->manStat . "[]";
	  }
	}
	
	public function getModelList() {
	  return $model;
	}
	
	public function getAttackList() {
	  return $attack;
	}
	
	public function getDurabilityList() {
	  return $durability;
	}
	
	public function getManuverabilityList() {
	  return $manuverability;
	}
	
	public function getAttack() {	
	  return $this->attStat;
	}
	
	public function getDurability() {
	  return $this->durStat;
	}
	
	public function getManuverability() {
	  return $this->manStat;
	}
	
	public function getColor() {
	  return $this->color;
	}
	
	public function __toString() {
	  return "<br> Attack: " . $this->attStat . "<br> Durability: " . $this->durStat . "<br> Manuverability: " . $this->manStat . "<br> Color: " . $this->color;
	}
  }
?>
