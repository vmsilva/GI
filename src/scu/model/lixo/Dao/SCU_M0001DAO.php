<?php

include '../../../../../GI/public/util/CONEXAO.php';

class SCU_M0001DAO {
    
    
    public static $instance;
    
    private function __construct() {
        
    }
    
    public static function getInstance(){
        
        if (!isset(self::$instance)) {
            self::$instance = new SCU_M0001DAO();
            echo('xoxota');
            
        }
        
        //return var_dump(self::$instance);;
        return self::$instance;
    }
    
    public static function Inserir() {
        
        try {
            $sql = "Insert Into SGI.scu_t0001(nm_usu, email_usu, senha_usu, cpf_usu, dt_nasc_usu, fn_usu, st_usu)"
           . "Values(:nm_usu, :email_usu, :senha_usu, :cpf_usu, :dt_nasc_usu, :fn_usu, :st_usu)";

            $p_sql = CONEXAO::getInstance()->prepare($sql);

            
            $p_sql->bindValue(":nm_usu", SCU_M0001::setNm_usu());
            $p_sql->bindValue(":email_usu", SCU_M0001::setEmail_usu());
            $p_sql->bindValue(":senha_usu", SCU_M0001::setSenha_usu());
            $p_sql->bindValue(":cpf_usu", SCU_M0001::setCpf_usu());
            $p_sql->bindValue(":dt_nasc_usu", SCU_M0001::dt_nasc_usu());
            $p_sql->bindValue(":fn_usu", SCU_M0001::setFn_usu());            
            $p_sql->bindValue(":st_usu", SCU_M0001::setSt_usu());

            return $p_sql->execute();
            
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação ". $e->getMessage();
        }
    }


//    public static $instance;
//    
//    private function __construct() {
//        //
//    }
//
//    public static function getInstance() {
//        exit('xoxota');
//        if (!isset(self::$instance)) {
//            self::$instance = new SCU_M0001DAO();
//        }
//
//        return self::$instance;
//    }
//    
//    public static function Inserir() {
//        try {
//            $sql = "Insert Into SGI.scu_t0001(nm_usu, email_usu, senha_usu, cpf_usu, dt_nasc_usu, fn_usu, st_usu)"
//           . "Values(:nm_usu, :email_usu, :senha_usu, :cpf_usu, :dt_nasc_usu, :fn_usu, :st_usu)";
//
//            $p_sql = CONEXAO::getInstance()->prepare($sql);
//
//            
//            $p_sql->bindValue(":nm_usu", SCU_M0001::setNm_usu());
//            $p_sql->bindValue(":email_usu", SCU_M0001::setEmail_usu());
//            $p_sql->bindValue(":senha_usu", SCU_M0001::setSenha_usu());
//            $p_sql->bindValue(":cpf_usu", SCU_M0001::setCpf_usu());
//            $p_sql->bindValue(":dt_nasc_usu", SCU_M0001::dt_nasc_usu());
//            $p_sql->bindValue(":fn_usu", SCU_M0001::setFn_usu());            
//            $p_sql->bindValue(":st_usu", SCU_M0001::setSt_usu());
//
//            return $p_sql->execute();
//            
//        } catch (Exception $e) {
//            print "Ocorreu um erro ao tentar executar esta ação ". $e->getMessage();
//        }
//    }
}
