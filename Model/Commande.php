<?PHP
class Commande{
	private $idCmd;
	private $fname;
private $lname;
private $idProd;
private $email;
private $adresse;
private $quantity;
	
	function __construct($idCmd,$fname,$lname,$idProd,$email,$adresse,$quantity){
		$this->idCmd=$idCmd;
		$this->fname=$fname;
$this->lname=$lname;
$this->idProd=$idProd;
$this->email=$email;
$this->adresse=$adresse;
$this->quantity=$quantity;
		
	}
	
	function getIdCmd(){
		return $this->idCmd;
	}
function setIdCmd($idCmd){
		$this->idCmd=$idCmd;
	}
	function getFname(){
		return $this->fname;
	}
function setFname($fname){
		$this->fname=$fname;
	}
function getLname(){
		return $this->lname;
	}
function setLname($lname){
		$this->lname=$lname;
	}	
	
function getIdProd(){
		return $this->idProd;
	}
function setIdProd($idProd){
		$this->idProd=$idProd;
	}
function getEmail(){
		return $this->email;
	}
function setEmail($email){
		$this->email=$email;
	}
function getAdresse(){
		return $this->adresse;
	}
function setAdresse($adresse){
		$this->adresse=$adresse;
	}
function getQuantity(){
		return $this->quantity;
	}
function setQuantity($quantity){
		$this->quantity=$quantity;
	}	
}

?>