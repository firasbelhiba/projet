<?PHP
class event{
	private $nom;
	private $dated;
	private $datef;
	private $lieu;
	private $type;
	function __construct($nom,$dated,$datef,$lieu,$type){
		
		$this->nom=$nom;
		$this->dated=$dated;
		$this->datef=$datef;
		$this->lieu=$lieu;
		$this->type=$type;
	}
	
	function getNom(){
		return $this->nom;
	}
	function getDated(){
		return $this->dated;
	}
	function getDatef(){
		return $this->datef;
	}
	function getLieu(){
		return $this->lieu;
	}
	function getType(){
		return $this->type;
	}

	function setNom($nom){
		$this->nom=$nom;
	}
	function setDated($dated){
		$this->dated=$dated;
	}
	function setLieu($lieu){
		$this->lieu=$lieu;
	}
	function setDatef($datef){
		$this->datef=$datef;
	}
	function setType($type){
		$this->type=$type;
	}
	
}

?>