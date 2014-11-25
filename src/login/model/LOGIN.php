<?php

include '../../../public/util/Conexao.php';

class LOGIN {
    
    Private Static $cpf_usuario;
    Private Static $senha_usuario;
    
    public static function getCpf_usuario() {
        return self::$cpf_usuario;
    }

    public static function getSenha_usuario() {
        return self::$senha_usuario;
    }

    public static function setCpf_usuario($cpf_usuario) {
        self::$cpf_usuario = $cpf_usuario;
    }

    public static function setSenha_usuario($senha_usuario) {
        self::$senha_usuario = $senha_usuario;
    }

        
    Public Static function Logar(){
        
        $strsql = "Select * From SGI.scu_t0001";
        $strsql .= " WHERE scu_t0001.cpf_usu = '".self::$cpf_usuario."'";
        $strsql .= " AND scu_t0001.senha_usu = '".self::$senha_usuario."'";
        $strsql .= " AND scu_t0001.st_usu = 1";
        
        //return $strsql;
        
        $pdo = Conexao::getInstance();        
        $persist = $pdo->prepare($strsql);
        $persist = $pdo->query($strsql);
        $persist->execute();
        return $persist->fetchObject();
              
        
    }
}
