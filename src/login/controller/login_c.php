<?php
     
    require_once '../../../../GI/src/login/model/LOGIN.php';
        
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
            $json['ret'] = 'false';
            $json['msg'] = 'Cpf Vazio!';
            echo json_encode($json);
            exit();            
        }
        
        if($senha == '' || $senha == NULL){
            $json['ret'] = 'false';
            $json['msg'] = 'Senha Vazio!';
            echo json_encode($json);
            exit();
        }
        
        
        $senha = md5($senha);           
        
        
        LOGIN::setCpf_usuario($cpf);
        LOGIN::setSenha_usuario($senha);
        $rs = LOGIN::Logar();        
                
        if($rs){
            
            session_start();
            
            $_SESSION['SGI']  = session_id();
            $_SESSION['logado'] = strtotime('now') ;
            $_SESSION['login'] =  $cpf;
            //$_SESSION['nm_usu'] = $rs['nm_usu'];
            
            $ret['ret']= 'true';
            $ret['url']= './../../../../menu.php';
            echo json_encode($ret);
        }else{
            
            unset($_SESSION['login']);
            unset($_SESSION['SGI']);
            unset($_SESSION['logado']);
            unset($_SESSION['nm_usu']);
            
            $json['ret']= 'false';
            $json['msg']= ' Cpf ou Senha Invalidos';
            echo json_encode($json);
            echo "<script type='text/javascript'>location.href = './index.html';</script>";            
            exit();
            
                      
        }
    }
    
?>

