<?php

    include '../../../public/util/Conexao.php';
    
class SCU_M0001 {

    private Static $cd_usu;
    private Static $nm_usu;
    private Static $dt_nasc_usu;
    private Static $email_usu;
    private Static $senha_usu;
    private Static $cpf_usu;
    private Static $fn_usu;
    private Static $st_usu;

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


    public static function Inserir(){
    
        $strsql = 'INSERT INTO SGI.scu_t0001(nm_usu, dt_nasc_usu, email_usu, senha_usu, cpf_usu, fn_usu, st_usu)'
        . 'VALUES(:nm_usu, :dt_nasc_usu, :email_usu, :senha_usu, :cpf_usu, :fn_usu, :st_usu)';
        
                
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
         
    }
    
    public static function Excluir(){}
    public static function Alterar(){}
    
    public static function Buscar(){
        
        $strsql = "SELECT * FROM SGI.scu_t0001";        
        
        
        $pdo = Conexao::getInstance();        
        $persist = $pdo->query($strsql);
        $persist->execute();
        
        return json_encode($persist->fetchAll(PDO::FETCH_OBJ));
        //return $persist->fetch(PDO::FETCH_ASSOC);
         
        
        
    }
    
    
//    if(self::getCd_usu() !== ''|| self::getCd_usu() !== NULL){ 
//            $strsql .= " WHERE scu_t0001.cd_usu = ".self::getCd_usu();
//            
//        }
//        
//        if(self::getCpf_usu() !== '' and self::getCd_usu() === '' || self::getCd_usu() === NULL){
//            $strsql .= " WHERE scu_t0001.cpf_usu =".self::getCpf_usu ();
//        }else {
//            $strsql .= " AND scu_t0001.cpf_usu =".self::getCpf_usu ();
//        }   
//        
//        if(self::getSenha_usu() !== ''){
//            $strsql .= " AND scu_t0001.senha_usu =".self::getSenha_usu ();            
//        }
//      return $strsql;
    
    
}
