<?php     session_start();    
     
    require_once '../../../../GI/src/login/model/LOGIN.php';
    
    
//    ini_set('display_errors',1);
//    ini_set('display_startup_erros',1);
//    error_reporting(E_ALL);
        
    $opr = $_POST['opr'];  
    
    switch ($opr){
        case'logar':
            logar();
            break;
        default :
            break;
    }
    
    function logar(){        
        
        $cpf = $_POST['login_cpf_usuario'];
        $senha = $_POST['login_senha_usuario'];
        
        if(trim($cpf) == '' || trim($cpf) == NULL){
            echo "CPF Vazio!";
            exit();            
        }
        
        if($senha == '' || $senha == NULL){
            echo 'SENHA Vazio!';
            exit();
        }
        
        
        $senha = md5($senha);           
        
        
        LOGIN::setCpf_usuario($cpf);
        LOGIN::setSenha_usuario($senha);
        $rs = LOGIN::Logar();
        
                
        if($rs){
            
            $_SESSION['login'] =  $cpf;
            $_SESSION['senha'] =  $senha;
            exit('1');
            
            
            $ret = array(
                'ret'=>'true'
            );
            echo json_encode($ret);
            exit();
        }else{
            
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            exit('0');
            
            
            $ret = array(
                'ret'=>'false'
            );
            echo json_encode($ret);
            exit();           
        }
    }
    
?>

