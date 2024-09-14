<?php
//require_once('./dbcontext/dbcontext.php');
class Stagiaire {
    private $numero;
    private $nom;
    private $prenom;
    private $email;
    private $datenaiss;
    private $annee;
    private $niveaux;
    private $filiere_id;
    public function __construct($numero, $nom, $prenom, $email, $datenaiss, $annee, $niveaux, $filiere_id) {
        $this->numero = $numero;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
        $this->datenaiss = $datenaiss;
        $this->annee = $annee;
        $this->niveaux = $niveaux;
        $this->filiere_id = $filiere_id;
    }
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getDatenaiss() {
        return $this->datenaiss;
    }

    public function setDatenaiss($datenaiss) {
        $this->datenaiss = $datenaiss;
    }

    public function getAnnee() {
        return $this->annee;
    }

    public function setAnnee($annee) {
        $this->annee = $annee;
    }

    public function getNiveaux() {
        return $this->niveaux;
    }

    public function setNiveaux($niveaux) {
        $this->niveaux = $niveaux;
    }

    public function getFiliere_id() {
        return $this->filiere_id;
    }

    public function setFiliere_id($filiere_id) {
        $this->filiere_id = $filiere_id;
    }
    public static function getusers(){
        $pdo =getCnx();
        $sql = $pdo->query("SELECT * FROM stagiaire LEFT JOIN filiere ON stagiaire.filiere_id = filiere.id ORDER BY numero ");
        $users = $sql->fetchAll(PDO::FETCH_ASSOC);
        closeConnection();
        return $users;
    }
    public static function getuser($id) {
        $cnx = getCnx();
        $sql = "SELECT * FROM stagiaire WHERE numero = :id";
        $stmt = $cnx->prepare($sql);
        $stmt->execute(array(':id' => $id));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $tab = new Stagiaire($user['numero'],$user['nom'],$user['prenom'],$user['email'],$user['date_naiss'],$user['anne'],$user['niveux'],$user['filiere_id']);
        closeConnection();
        return $tab;
    }
    
    public static function Updateuser($nom ,$preno,$email,$annee,$niveaux,$date_naiss,$id){
        $cnx =getCnx();
        $sql = "UPDATE stagiaire SET nom = ?, prenom = ?, email = ?, anne = ? , niveux=? ,date_naiss =?  WHERE numero = ?";
        $stmt = $cnx->prepare($sql);
        $stmt->execute(array($nom ,$preno,$email,$annee,$niveaux,$date_naiss,$id));
        closeConnection();
    }
    public static function setstagiaire($nom,$prenom,$email,$annee,$niveaux,$filiereId,$date_naiss){
        $cnx=getCnx();  
        $sql = "INSERT INTO stagiaire (numero, nom, prenom, email, anne, niveux, filiere_id, date_naiss) VALUES (NULL, ?, ?, ?, ?,?, ?,?) ";
        $req = $cnx->prepare($sql);
        $req->execute(array($nom,$prenom,$email,$annee,$niveaux,$filiereId,$date_naiss));
        closeConnection();
    }
    public static function Deleteuser($id){
        $cnx=getCnx();
        $sql = "DELETE FROM stagiaire WHERE numero = ?";
        $req= $cnx->prepare($sql);
        $n=$req->execute(array($id));
        closeConnection();
    }
}
?>
