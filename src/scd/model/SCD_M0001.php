<?php

//  Classe Dizimo

include '../../../library/util/Conexao.php';

class SCD_M0001 {
    
    Private Static $cd_diz;         // Codigo Dizimo 
    Private Static $vl_diz;         // Valor Dizimo
    Private Static $dt_entr_diz;    // Data Entrada Dizimo
    Private Static $desc_diz;       // Descrição Dizimo
    
    public static function getCd_diz() {
        return self::$cd_diz;
    }

    public static function getVl_diz() {
        return self::$vl_diz;
    }

    public static function getDt_entr_diz() {
        return self::$dt_entr_diz;
    }

    public static function getDesc_diz() {
        return self::$desc_diz;
    }

    public static function setCd_diz($cd_diz) {
        self::$cd_diz = $cd_diz;
    }

    public static function setVl_diz($vl_diz) {
        self::$vl_diz = $vl_diz;
    }

    public static function setDt_entr_diz($dt_entr_diz) {
        self::$dt_entr_diz = $dt_entr_diz;
    }

    public static function setDesc_diz($desc_diz) {
        self::$desc_diz = $desc_diz;
    }
    
    // Função que Inserir Dizimo
    Public Static function Inserir(){
        
        $strsql = 'INSERT INTO SGI.scu_t0001(vl_diz, dt_entr_diz, desc_diz)'
        . 'VALUES(:vl_diz, :dt_entr_diz, :desc_diz)';
        
        try{  
            
            $pdo = Conexao::getInstance();
            $persist = $pdo->prepare($strsql);
            $persist->bindValue(":vl_diz", self::getVl_diz());
            $persist->bindValue(":dt_entr_diz", self::getDt_entr_diz());
            $persist->bindValue(":desc_diz", self::getDesc_diz());
            
            return $persist->execute();
            
        }catch(Exception $e){
            
            return 'Erro'.$e;
        }
        
    }
    
    // Função que Exclui Dizimo
    Public Static function Excluir(){}
    
    //Funçao que Lista Dizimo
    Public Static function Listar(){} 
}
