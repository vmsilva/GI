<?php
//      Classe Usuario

    include '../../../library/util/Conexao.php';
    
class SCU_M0001 {

    private Static $cd_usu;         // Codigo Usuario
    private Static $nm_usu;         // Nome Usuario
    private Static $dt_nasc_usu;    // Data Nascimento usuario
    private Static $email_usu;      // Email Usuario
    private Static $senha_usu;      // Senha Usuario
    private Static $cpf_usu;        // Cpf Usuario
    private Static $fn_usu;         // Telefone Usuario
    private Static $st_usu;         // Status Usuario

    public static function getCd_usu() {
        return self::$cd_usu;
    }

    public static function getNm_usu() {
        return self::$nm_usu;
    }

    public static function getDt_nasc_usu() {
        return self::$dt_nasc_usu;
    }

    public static function getEmail_usu() {
        return self::$email_usu;
    }

    public static function getSenha_usu() {
        return self::$senha_usu;
    }

    public static function getCpf_usu() {
        return self::$cpf_usu;
    }

    public static function getFn_usu() {
        return self::$fn_usu;
    }

    public static function getSt_usu() {
        return self::$st_usu;
    }

    public static function setCd_usu($cd_usu) {
        self::$cd_usu = $cd_usu;
    }

    public static function setNm_usu($nm_usu) {
        self::$nm_usu = $nm_usu;
    }

    public static function setDt_nasc_usu($dt_nasc_usu) {
        self::$dt_nasc_usu = $dt_nasc_usu;
    }

    public static function setEmail_usu($email_usu) {
        self::$email_usu = $email_usu;
    }

    public static function setSenha_usu($senha_usu) {
        self::$senha_usu = $senha_usu;
    }

    public static function setCpf_usu($cpf_usu) {
        self::$cpf_usu = $cpf_usu;
    }

    public static function setFn_usu($fn_usu) {
        self::$fn_usu = $fn_usu;
    }

    public static function setSt_usu($st_usu) {
        self::$st_usu = $st_usu;
    }

    
    // Inserir Usuario
    public static function Inserir(){
    
        $strsql = 'INSERT INTO SGI.scu_t0001(nm_usu, dt_nasc_usu, email_usu, senha_usu, cpf_usu, fn_usu, st_usu)'
        . 'VALUES(:nm_usu, :dt_nasc_usu, :email_usu, :senha_usu, :cpf_usu, :fn_usu, :st_usu)';
        
        try{        
            $pdo = Conexao::getInstance();
            $persist = $pdo->prepare($strsql);
            $persist->bindValue(":nm_usu", self::getNm_usu());
            $persist->bindValue(":dt_nasc_usu", self::getDt_nasc_usu());
            $persist->bindValue(":email_usu", self::getEmail_usu());
            $persist->bindValue(":senha_usu", self::getSenha_usu());
            $persist->bindValue(":cpf_usu", self::getCpf_usu());
            $persist->bindValue(":fn_usu", self::getFn_usu());
            $persist->bindValue(":st_usu", self::getSt_usu());
            
            return $persist->execute();
            
        }catch(Exception $e){
            
            return 'Erro'.$e;
        }
                
         
    }
    
    // Excluir Usuario
    public static function Excluir(){}
    // Alterar Usuario
    public static function Alterar(){}
    // Buscar Usuario
    public static function Buscar(){
        
        $strsql = "SELECT * FROM SGI.scu_t0001";        
        
        try{
            
            $pdo = Conexao::getInstance();        
            $persist = $pdo->query($strsql);
            $persist->execute();

            return $persist->fetchAll(PDO::FETCH_OBJ);   
            
        }catch(Exception $e){
            
            return 'Erro'.$e;
            
        } 
        
        
    }
    
    
}
