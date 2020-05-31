<?php
class reservation
{
	private $numReservation;
	private $dateReservation;
	private $heureReservation;
	private $etatReservation;
	private $id_service;
	private $cin;



	public function __construct($id_service,$cin,$dateReservation,$heureReservation)
	{
		$this->id_service=$id_service;
		$this->cin=$cin;
		$this->dateReservation=$dateReservation;
		$this->heureReservation=$heureReservation;

	}

	public function getNumReservation(){return $this->numReservation;}
	public function getDateReservation(){return $this->dateReservation;}
	public function getHeureReservation(){return $this->heureReservation;}
	public function getEtatReservation(){return $this->etatReservation;}
	public function getIdService(){return $this->id_service;}
	public function getCin(){return $this->cin;}



	public function setNumReservation($new){$this->numReservation=$new;}
	public function setDateReservation($new){$this->dateReservation=$new;}
	public function setHeureReservation($new){$this->heureReservation=$new;}
	public function setEtatReservation($new){$this->etatReservation=$new;}
	public function setIdService($new){$this->id_service=$new;}
	public function setCin($new){$this->cin=$new;}
}

?>