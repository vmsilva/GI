<?php session_start();
            
    if((!isset( $_SESSION['login'] ) === true )){        
        unset($_SESSION['login']);
        unset( $_SESSION['SGI']);
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>location.href = '../../../index.html';</script>";
        exit();    
    }    
            
    require_once '../model/SCM_M0001.php';

    switch (trim($_POST['opr'])) {
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
        
        $nm_mem = $_POST['nm_mem'];                 
        $nm_mae_mem = $_POST['nm_mae_mem'];                 
        $dt_nasc_mem = $_POST['dt_nasc_mem'];
        $email_mem = $_POST['email_mem'];
        $cpf_mem = $_POST['cpf_mem'];
        $loc_bat_mem = $_POST['loc_bat_mem'];
        $est_civ_mem = $_POST['est_civ_mem'];
        $end_mem = $_POST['end_mem'];
        $st_mem = $_POST['st_mem'];
        
        $dt_nasc_mem = str_replace("/", '', $dt_nasc_mem);
        
        // Valida Nome de Membro
        if(trim($nm_mem) == '' || trim($nm_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Nome Membro não Informado!';
            echo json_encode($json);
            exit(); 
        } 
        
        // Valida Nome da Mãe Membro
        if(trim($nm_mae_mem) == '' || trim($nm_mae_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Nome da Mãe Membro não Informado!';
            echo json_encode($json);
            exit(); 
        } 
        
        // Valida Data Nascimento Membro
        if(trim($dt_nasc_mem) == '' || trim($dt_nasc_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Data de Nascimento do Membro não Informada!';
            echo json_encode($json);
            exit(); 
        } 
        
        // Valida Email Membro
        if(trim($email_mem) == '' || trim($email_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Email do Membro não Informado!';
            echo json_encode($json);
            exit(); 
        }
        
        // Valida Cpf Membro
        if(trim($cpf_mem) == '' || trim($cpf_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Cpf do Membro não Informado!';
            echo json_encode($json);
            exit(); 
        }
        
        // Valida Local de Batismo Membro
        if(trim($loc_bat_mem) == '' || trim($loc_bat_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Local de Batismo não Informado!';
            echo json_encode($json);
            exit(); 
        }
        
        // Valida Endereço do  Membro
        if(trim($end_mem) == '' || trim($end_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Endereço do Membro não Informado!';
            echo json_encode($json);
            exit(); 
        }
        
        //Valida Estado Civil Membro
        if(trim($est_civ_mem) == '' || trim($est_civ_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Estado Civil não Informado!';
            echo json_encode($json);
            exit(); 
        }
        
        //Valida Estado Civil Membro
        if(trim($st_mem) == '' || trim($st_mem) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Status do Membro não Informado!';
            echo json_encode($json);
            exit(); 
        }
        
        
        SCM_M0001::setNm_mem($nm_mem);
        SCM_M0001::setNm_mae_mem($nm_mae_mem);
        SCM_M0001::setCpf_mem($cpf_mem);
        SCM_M0001::setDt_nasc_mem($dt_nasc_mem);
        SCM_M0001::setEmail_mem($email_mem);
        SCM_M0001::setEnd_mem($end_mem);
        SCM_M0001::setEst_civ_mem($est_civ_mem);
        SCM_M0001::setLoc_bat_mem($loc_bat_mem);
        SCM_M0001::setSt_mem($st_mem);
        $ver = SCM_M0001::Buscar();
        
        if(count($ver) > 0 ){
            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Membro já Incluso!';
            echo json_encode($json);
            exit();            
            
        }else{
            
            $rs = SCM_M0001::Inserir();
            
            if($rs){
                
                $json['ret'] = 'true';
                $json['msg'] = 'Sucesso: Membro Incluso!';
                echo json_encode($json);
                exit();
                
            }else{
                
                $json['ret'] = 'false';
                $json['msg'] = 'Erro: Membro Não Incluso!';
                echo json_encode($json);
                exit();
                
            }
            
        }
            
            
        
    }
    
    function Excluir(){
        
    }
    function Alterar(){
        
    }
    function Buscar(){
        
        $dados = array();
        
        SCM_M0001::setNm_mem('edil');
        $rs = SCM_M0001::Buscar();
        exit($rs);
        if(count($rs)>0){
            foreach ($rs as $key => $value) {
                $dados[$key] = (array)$rs[$key];
            }

            $json['ret'] = 'true';
            $json['dados'] = $dados;
            echo json_encode($json);
        }else{
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Nenhum Registro Cadastrado!';
            echo json_encode($json);
        }
        
    }
?>

