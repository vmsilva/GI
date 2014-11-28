<?php

//      Classe Boleto

include '../../../library/util/Conexao.php';

class SCB_M0001 {
    
    Private Static $cd_bol;         // Codigo Boleto
    Private Static $desc_bol;       // Descrição Boleto
    Private Static $vl_bol;         // Valor Boleto
    Private Static $dt_venc_bol;    // Data Vencimento Boleto
    Private Static $dt_pg_bol;      // Data Pagamento Boleto
    
    public static function getCd_bol() {
        return self::$cd_bol;
    }

    public static function getDesc_bol() {
        return self::$desc_bol;
    }

    public static function getVl_bol() {
        return self::$vl_bol;
    }

    public static function getDt_venc_bol() {
        return self::$dt_venc_bol;
    }

    public static function getDt_pg_bol() {
        return self::$dt_pg_bol;
    }

    public static function setCd_bol($cd_bol) {
        self::$cd_bol = $cd_bol;
    }

    public static function setDesc_bol($desc_bol) {
        self::$desc_bol = $desc_bol;
    }

    public static function setVl_bol($vl_bol) {
        self::$vl_bol = $vl_bol;
    }

    public static function setDt_venc_bol($dt_venc_bol) {
        self::$dt_venc_bol = $dt_venc_bol;
    }

    public static function setDt_pg_bol($dt_pg_bol) {
        self::$dt_pg_bol = $dt_pg_bol;
    }

    // Inserir Boleto
    Public Static function Inserir(){}
    // Excluir  Boleto
    Public Static function Excluir(){}
    //  Listar Boletos
    Public Static function Listar(){}    
    
}
