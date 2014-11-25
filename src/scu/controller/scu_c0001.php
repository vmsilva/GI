<?php session_start();
    if((!isset( $_SESSION['login'] ) === true ) and (!isset( $_SESSION['senha'] ) === true)){
        
        unset($_SESSION['login']);
        unset($_SESSION['senha']);        
        header('location:../../../index.html');
        session_destroy();
    }
    
    require_once '../model/SCU_M0001.php';
    
    switch(trim($_POST['opr'])){
        case 'inserir':
            Inserir();
            break;
        case 'excluir':
            Excluir();
            break;
        case 'alterar':
            Alterar();
            break;
        case 'buscar':
            Buscar();
            break;
        default:
            session_destroy();
            exit();
        ;
    }
    
    function Inserir(){
        
        $nm_usu = $_POST['nm_usu'];
        $dt_nasc_usu = $_POST['dt_nasc_usu'];
        $email_usu = $_POST['email_usu'];
        $fn_usu = $_POST['fn_usu'];
        $cpf_usu = $_POST['cpf_usu'];
        $senha_usu = $_POST['senha_usu'];
        $st_usu = $_POST['st_usu'];
        
        $dt_nasc_usu = str_replace("/", '', $dt_nasc_usu);
        $senha_usu = md5($senha_usu);
        
        
        if(trim($nm_usu) == '' || trim($nm_usu) == NULL){            
            $dados = array(
                'msg'=>'Nome de Usuario Não Informado!'                
            );            
            echo json_encode($dados);
            exit();
        }       
                
                
        SCU_M0001::setNm_usu($nm_usu);
        SCU_M0001::setDt_nasc_usu($dt_nasc_usu);
        SCU_M0001::setEmail_usu($email_usu);
        SCU_M0001::setFn_usu($fn_usu);
        SCU_M0001::setCpf_usu($cpf_usu);
        SCU_M0001::setSenha_usu($senha_usu);
        SCU_M0001::setSt_usu($st_usu);
        $rs = SCU_M0001::Inserir();
        
        
        if($rs > 0){
            echo'Incluso Com Sucesso!';
            exit();
        }else{
            echo'Usuario Não Incluso!';
            exit();
        }
        
    }
    
    function Excluir(){}
    function Alterar(){}
    function Buscar(){
        
        $cd_usu = $_POST['cd_usu'];
        $cpf_usu = $_POST['cpf_usu'];
        $senha_usu = $_POST['senha_usu'];
        
        
        SCU_M0001::setCpf_usu($cpf_usu);
        SCU_M0001::setSenha_usu($senha_usu);        
        $rs = SCU_M0001::Buscar();
//        $rs = array(
//                'bb' => 'bunda',
//                'xx' => 'xoxota'                
//                );
        
        
        //echo json_encode($rs);
        echo $rs;
        exit();
//        foreach($rs as $dado){
//            echo $dado;
//        }
        
    }

    
    
?>

