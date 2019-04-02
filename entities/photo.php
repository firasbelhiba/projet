<?PHP
class Photo{
	private $id;
	private $nom;
	private $type;
	private $size;
	function __construct($nom,$type, $size){
		$this->nom=$nom;
		$this->type=$type;
		$this->size=$size;
	}

	function getId(){
		return $this->id;
	}
	
	function getNom(){
		return $this->nom;
	}
	
	function getType(){
		return $this->type;
	}

	function getSize(){
		return $this->size;
	}


	function setId($id){
		$this->id=$id;
	}

	function setNom($nom){
		$this->nom=$nom;
	}

	function setType($type){
		$this->type=$type;
	}

	function setSize($size){
		$this->size=$size;
	}
}

?>