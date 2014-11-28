<?php

// Classe Membro

include '../../../library/util/Conexao.php';

class SCM_M0001 {
    
    Private static $cd_mem;             // Codigo Membro
    Private static $nm_mem;             // Nome  Membro
    Private static $nm_mae_mem;         // Nome Mãe Membro
    Private static $email_mem;          // Email Membro
    Private static $dt_nasc_mem;        // Data Nascimento Membro
    Private static $est_civ_mem;        // Estado Civil Membro
    Private static $end_mem;            // Endereço Membro
    Private static $cpf_mem;            // Cpf Membro
    Private static $loc_bat_mem;        // Local Batismo Membro
    Private static $st_mem;             // Status Membro
    
    public static function getCd_mem() {
        return self::$cd_mem;
    }

    public static function getNm_mem() {
        return self::$nm_mem;
    }

    public static function getNm_mae_mem() {
        return self::$nm_mae_mem;
    }

    public static function getEmail_mem() {
        return self::$email_mem;
    }

    public static function getDt_nasc_mem() {
        return self::$dt_nasc_mem;
    }

    public static function getEst_civ_mem() {
        return self::$est_civ_mem;
    }

    public static function getEnd_mem() {
        return self::$end_mem;
    }

    public static function getCpf_mem() {
        return self::$cpf_mem;
    }

    public static function getLoc_bat_mem() {
        return self::$loc_bat_mem;
    }

    public static function getSt_mem() {
        return self::$st_mem;
    }

    public static function setCd_mem($cd_mem) {
        self::$cd_mem = $cd_mem;
    }

    public static function setNm_mem($nm_mem) {
        self::$nm_mem = $nm_mem;
    }

    public static function setNm_mae_mem($nm_mae_mem) {
        self::$nm_mae_mem = $nm_mae_mem;
    }

    public static function setEmail_mem($email_mem) {
        self::$email_mem = $email_mem;
    }

    public static function setDt_nasc_mem($dt_nasc_mem) {
        self::$dt_nasc_mem = $dt_nasc_mem;
    }

    public static function setEst_civ_mem($est_civ_mem) {
        self::$est_civ_mem = $est_civ_mem;
    }

    public static function setEnd_mem($end_mem) {
        self::$end_mem = $end_mem;
    }

    public static function setCpf_mem($cpf_mem) {
        self::$cpf_mem = $cpf_mem;
    }

    public static function setLoc_bat_mem($loc_bat_mem) {
        self::$loc_bat_mem = $loc_bat_mem;
    }

    public static function setSt_mem($st_mem) {
        self::$st_mem = $st_mem;
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
