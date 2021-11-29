<?PHP
class Livraison{
	protected $idLiv;
	protected $date;
	protected $localisation;
	protected $idCmd;

	
	
	function __construct($idLiv,$date,$localisation,$idCmd){
		$this->idLiv=$idLiv;
		$this->date=$date;
		$this->localisation=$localisation;
		$this->idCmd=$idCmd;
		

	}
	
	function getIdLiv(){
		return $this->idLiv;
	}
	function setIdLiv($idLiv){
		$this->idLiv=$idLiv;
	}
function getDate(){
		return $this->date;
	}
	function setDate($date){
		$this->date=$date;
	}	
	
function getLocalisation(){
		return $this->localisation;
	}
	function setLocalisation($localisation){
		$this->localisation=$localisation;
	}
function getIdCmd(){
		return $this->idCmd;
	}
function setIdCmd($idCmd){
		$this->idCmd=$idCmd;
	}	
		
}

?>