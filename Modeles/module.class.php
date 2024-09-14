<?php
//require_once('./dbcontext/dbcontext.php');
    class Module {
        private $id;
        private $designation;
        private $MH;
        private $filiere_id;
        public function __construct($id, $designation, $MH, $filiere_id) {
            $this->id = $id;
            $this->designation = $designation;
            $this->MH = $MH;
            $this->filiere_id = $filiere_id;
        }
        public function getId() {
            return $this->id;
        }
    
        public function setId($id) {
            $this->id = $id;
        }
    
        public function getDesignation() {
            return $this->designation;
        }
    
        public function setDesignation($designation) {
            $this->designation = $designation;
        }
    
        public function getMH() {
            return $this->MH;
        }
    
        public function setMH($MH) {
            $this->MH = $MH;
        }
    
        public function getFiliereId() {
            return $this->filiere_id;
        }
    
        public function setFiliereId($filiere_id) {
            $this->filiere_id = $filiere_id;
        }
        public static function getModules($id) {
            $cnx = getCnx();
            $sql = "SELECT module.*
                    FROM stagiaire
                    LEFT JOIN module ON stagiaire.filiere_id = module.filiere_id
                    WHERE numero = :id;";
            $stmt = $cnx->prepare($sql);
            $stmt->execute(array(':id' => $id));
            $modulesData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $modules = array();
        
            foreach ($modulesData as $moduleData) {
                $module = new Module($moduleData['id'], $moduleData['designation'], $moduleData['MH'], $moduleData['filiere_id']);
                $modules[] = $module;
            }
            closeConnection();
            return $modules;
        }
        
    }
    
?>