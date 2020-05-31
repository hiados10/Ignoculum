<?php
class reservationExp
{
	private $numReservation;
	//private $dateReservation;
	//private $heureReservation;
	private $etatReservation;
	private $extra;
	private $id_service;
	private $cin;

		public function __construct($id_service,$cin)
	{
		$this->id_service=$id_service;
		$this->cin=$cin;

	}

	public function getNumReservation(){return $this->numReservation;}
	public function getEtatReservation(){return $this->etatReservation;}
	public function getIdService(){return $this->id_service;}
	public function getCin(){return $this->cin;}
	public function getExtra(){return $this->extra;}



	public function setNumReservation($new){$this->numReservation=$new;}
	public function setEtatReservation($new){$this->etatReservation=$new;}
	public function setIdService($new){$this->id_service=$new;}
	public function setCin($new){$this->cin=$new;}
	public function setExtra($new){$this->extra=$new;}

}
?>