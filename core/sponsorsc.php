<?PHP
include "../config.php";
class sponsorsC {
function afficher ($sponsors){
		echo "Nom: ".$sponsors->getNom()."<br>";
		echo "type: ".$sponsors->getType()."<br>";
		echo "Renverssement: ".$sponsors->getRenverssement()."<br>";
		
	}
	
	
	function ajoutersponsors($sponsors){
		$sql="insert into sponsors (nom,type,renverssement) values (:nom, :type,:renverssement)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $nom=$sponsors->getNom();
        $type=$sponsors->getType();
        $renverssement=$sponsors->getRenverssement();
        $req->bindValue(':nom',$nom);
		$req->bindValue(':type',$type);
		$req->bindValue(':renverssement',$renverssement);
		
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
		function affichersponsors(){
		//$sql="SElECT * From employe e inner join formationphp.employe a on e.cin= a.cin";
		$sql="SElECT * From sponsors";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimersponsors($nom){
		$sql="DELETE FROM sponsors where nom= :nom";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':nom',$nom);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifiersponsors($sponsors,$nom){
		$sql="UPDATE sponsors SET nom=:nomm, type=:typee,renverssement=:renverssementt WHERE nom=:nom";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
try{		
        $req=$db->prepare($sql);
		$nomm=$sponsors->getNom();
        $type=$sponsors->getType();
        $renverssement=$sponsors->getRenverssement();
        $datas = array(':nomm'=>$nomm, ':nom'=>$nom, ':typee'=>$type,':renverssement'=>$renverssement);
		$req->bindValue(':nomm',$nomm);
		$req->bindValue(':nom',$nom);
		$req->bindValue(':typee',$type);
		$req->bindValue(':renverssementt',$renverssement);
		
		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		

	}


		function recuperersponsors($nom){
		$sql="SELECT * from sponsors where nom=$nom";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	
}

?>