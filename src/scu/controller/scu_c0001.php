<?php session_start();
    
    if((!isset( $_SESSION['login'] ) === true )){        
        unset($_SESSION['login']);
        unset( $_SESSION['SGI']);
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>location.href = '../../../index.html';</script>";
        exit();    
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
            echo "<script type='text/javascript'>location.href = '../../../menu.php';</script>";
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
        $senha_usu = md5($senha_usu);   // Criptografa a senha no Padrão md5
        
        // Valida Nome de Usuario
        if(trim($nm_usu) == '' || trim($nm_usu) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Nome Usuario não Informado!';
            echo json_encode($json);
            exit(); 
        } 
        
        // Valida Data de Nascimento Usuario
        if(trim($dt_nasc_usu) == '' || trim($dt_nasc_usu) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Data Nascimento Usuario não Informado!';
            echo json_encode($json);
            exit(); 
        } 
        
        // Valida Email Usuario
        if(trim($email_usu) == '' || trim($email_usu) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Email Usuario não Informado!';
            echo json_encode($json);
            exit(); 
        } 
        
        // Valida Telefone Usuario
        if(trim($fn_usu) == '' || trim($fn_usu) == NULL){
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Telefone Usuario não Informado!';
            echo json_encode($json);
            exit();            
        }
        
        // Valida Cpf Usuario
        if(trim($cpf_usu) == '' || trim($cpf_usu) == NULL){
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Cpf Usuario não Informado!';
            echo json_encode($json);
            exit();            
        }
        
        // Valida Senha Usuario
        if(trim($senha_usu) == '' || trim($senha_usu) == NULL){
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Senha Usuario não Informada!';
            echo json_encode($json);
            exit();            
        }
                
                
        SCU_M0001::setNm_usu($nm_usu);
        SCU_M0001::setDt_nasc_usu($dt_nasc_usu);
        SCU_M0001::setEmail_usu($email_usu);
        SCU_M0001::setFn_usu($fn_usu);
        SCU_M0001::setCpf_usu($cpf_usu);
        SCU_M0001::setSenha_usu($senha_usu);
        SCU_M0001::setSt_usu($st_usu);
        
        $ver = SCU_M0001::Buscar();   //Verifica se ja Existe algum usuario com o mesmo nome e cpf Cadastrado
              
        if(count($ver) > 0){
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Usuario já Incluso!';
            echo json_encode($json);
            exit();
        }else{
            
            $rs = SCU_M0001::Inserir();
            
            if($rs > 0){
                $json['ret'] = 'true';
                $json['msg'] = 'Sucesso: Usuario Incluso!';
                echo json_encode($json);
                exit();
            }else{
                $json['ret'] = 'true';
                $json['msg'] = 'Erro: Usuario não Incluso!';
                echo json_encode($json);
                exit();
            }
        }       
    }
    
    function Excluir(){}
    function Alterar(){
        
        
    }
    function Buscar(){
        
        $cd_usu = $_POST['cd_usu'];
        $cpf_usu = $_POST['cpf_usu'];
        $senha_usu = $_POST['senha_usu'];
        
        
        SCU_M0001::setCpf_usu($cpf_usu);
        SCU_M0001::setSenha_usu($senha_usu);        
        $rs = SCU_M0001::Buscar();

        echo json_encode($rs);
        exit();
        
    }

    
    
?>

