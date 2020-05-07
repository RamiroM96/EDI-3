<?php

//Observer

interface Manager{

	public function alert();
}


class ContractNotification implements Manager{

	public function alert(){
		echo 'New contract signed';
	}
}

class ProgressNotification implements Manager{

	public function alert(){
		echo 'The building construction is in progress';
	}
}

//Obserbale

class Employee{

	public $subs = array();

	public function subscribeToNotification(Manager $sub){
		array_push($this->subs,$sub );
	}

	function update(){
		foreach ($this->subs as $observer) {
			$observer->alert();
			echo '<br>';
		}
	}
}


$employee = new Employee();

$newContract = new ContractNotification();

$newProgress = new ProgressNotification();

// Register to the Observable

$employee->subscribeToNotification($newContract);
$employee->subscribeToNotification($newContract);
$employee->subscribeToNotification($newContract);

$employee->subscribeToNotification($newProgress);
//Send Notification
$employee->update();
?>