<?php 
  #include("ParentClass.php");
  // this file will extend PArentClass.php
  class ChildClass extends ParentClass {
	#public $model = parent::getModelList();
	#public $damage = parent::getAttackList();
	#public $hull = parent::getDurabilityList();
	#public $speed = parent::getManuverabilityList();
	public $color = "";
	public $attStat = "";
	public $manStat = "";
	public $durStat = "";
	
	public function __construct($entry, $paint) {
	  return parent::__construct($entry, $paint);
	  #$this->key = array_search($entry, $this->model);
	  #$this->att = $this->damage[$this->key];
	  #$this->dur = $this->hull[$this->key];
	  #$this->man = $this->speed[$this->key];
	  #$this->color = $paint;
	}
	
	public function changeColor($newPaint) {
	  echo "<!--Setting Color to " . $newPaint . "-->";
	  
	  $this->color = $newPaint;
	  
	}
	
	public function changeDamage($newAttack) {
	  $this->attStat = "";
	  for ($i = 0; $i < $newAttack; $i++) {
	    $this->attStat = $this->attStat . "[]";
	  }
	}
	
	public function changeDurability($newHull) {
	  $this->durStat = "";
	  for ($j = 0; $j < $newHull; $j++) {
	    $this->durStat = $this->durStat . "[]";
	  }
	}
	public function changeManuverability($newSpeed) {
	  $this->manStat = "";
	  for ($k = 0; $k < $newSpeed; $k++) {
		$this->manStat = $this->manStat . "[]";
	  }
	}
  }
  $attemptOne = new ChildClass("TIE-Fighter","Orange");
?>  
 
