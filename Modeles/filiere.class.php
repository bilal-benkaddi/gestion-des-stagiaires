<?php
//require_once('./dbcontext/dbcontext.php');
    class Filiere {
        private $id;
        private $libelle;
        private $anneeFormation;
        private $totalMH;
        public function __construct($id, $libelle, $anneeFormation, $totalMH) {
            $this->id = $id;
            $this->libelle = $libelle;
            $this->anneeFormation = $anneeFormation;
            $this->totalMH = $totalMH;
        }
        public function getId() {
            return $this->id;
        }
    
        public function setId($id) {
            $this->id = $id;
        }
    
        public function getLibelle() {
            return $this->libelle;
        }
    
        public function setLibelle($libelle) {
            $this->libelle = $libelle;
        }
    
        public function getAnneeFormation() {
            return $this->anneeFormation;
        }
    
        public function setAnneeFormation($anneeFormation) {
            $this->anneeFormation = $anneeFormation;
        }
    
        public function getTotalMH() {
            return $this->totalMH;
        }
    
        public function setTotalMH($totalMH) {
            $this->totalMH = $totalMH;
        }
        public static function getFiliere($id) {
            //require_once('../dbcontext/dbcontext.php');
            $cnx = getCnx();
            $sql = "SELECT * FROM stagiaire LEFT JOIN filiere ON stagiaire.filiere_id = filiere.id WHERE numero = :id";
            $stmt = $cnx->prepare($sql);
            $stmt->execute(array(':id' => $id));
            $fil = $stmt->fetch(PDO::FETCH_ASSOC);
            $filiere = new Filiere($fil['id'],$fil['libelle'],$fil['anneeformation'],$fil['totalMH']);
            closeConnection();
            return $filiere;
        }
        public static function updateFiliere($filiereId, $newLibelle){
            //require_once('../dbcontext/dbcontext.php');
            $cnx = getCnx();
            $sql = "UPDATE filiere SET libelle = ? WHERE id = ?";
            $stmt = $cnx->prepare($sql);
            closeConnection();
            $stmt->execute(array($newLibelle, $filiereId));
        }
    }
    

?>