<?PHP
class sponsors{
	private $nom;
	private $type;
	private $renverssement;
	
	function __construct($nom,$type,$renverssement){
		
		$this->nom=$nom;
		$this->type=$type;
		$this->renverssement=$renverssement;
		
	}
	function getNom(){
		return $this->nom;
	}
	function getType(){
		return $this->type;
	}
	function getRenverssement(){
		return $this->renverssement;
	}
	

	function setNom($nom){
		$this->nom=$nom;
	}
	function setType($type){
		$this->type=$type;
	}
	function setRenverssement($renverssement){
		$this->renverssement=$renverssement;
	}
	
	

}

?>