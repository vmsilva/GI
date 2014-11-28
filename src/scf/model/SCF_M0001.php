<?php

//   Classe Fornecedor

include '../../../library/util/Conexao.php';

class SCF_M0001 {
    
    Private Static $cd_forn;        // Codigo Fornecedor
    Private Static $nm_forn;        // Nome Fornecedor
    Private Static $cnpj_forn;      // Cnpj Fornecedor
    Private Static $desc_forn;      // Descrição Fornecedor
    Private Static $end_forn;       // Endereço Fornecedor
    
    public static function getCd_forn() {
        return self::$cd_forn;
    }

    public static function getNm_forn() {
        return self::$nm_forn;
    }

    public static function getCnpj_forn() {
        return self::$cnpj_forn;
    }

    public static function getDesc_forn() {
        return self::$desc_forn;
    }

    public static function getEnd_forn() {
        return self::$end_forn;
    }

    public static function setCd_forn($cd_forn) {
        self::$cd_forn = $cd_forn;
    }

    public static function setNm_forn($nm_forn) {
        self::$nm_forn = $nm_forn;
    }

    public static function setCnpj_forn($cnpj_forn) {
        self::$cnpj_forn = $cnpj_forn;
    }

    public static function setDesc_forn($desc_forn) {
        self::$desc_forn = $desc_forn;
    }

    public static function setEnd_forn($end_forn) {
        self::$end_forn = $end_forn;
    }

    // Inserir Fornecedor
    Public Static function Inserir(){}
    // Alterar Fornecedor
    Public Static function Alterar(){}
    // Excluir  Fornecedor
    Public Static function Excluir(){}
    //  Listar Fornecedor
    Public Static function Listar(){}
}
