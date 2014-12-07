<?php session_start();
    
    if((!isset( $_SESSION['login'] ) === true )){        
        unset($_SESSION['login']);
        unset( $_SESSION['SGI']);
        session_unset();
        session_destroy();
        echo "<script type='text/javascript'>location.href = '../../../index.html';</script>";
        exit();    
    }
    
    require_once '../model/SCD_M0001.php';
    
    switch(trim($_POST['opr'])){
        case 'inserir':
            Inserir();
            break;
        case 'excluir':
            Excluir();
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
        
        $vl_diz = $_POST['vl_diz'];                 
        $dt_entr_diz = $_POST['dt_entr_diz'];
        $desc_diz = $_POST['desc_diz'];
        
        
        // Valida Valor Dizimo
        if(trim($vl_diz) == '' || trim($vl_diz) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Valor Dizimo não Informado!';
            echo json_encode($json);
            exit(); 
        }
        
        // Valida Data Entrada diz
        if(trim($dt_entr_diz) == '' || trim($dt_entr_diz) == NULL){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Data de Entrada do Dizimo não Informada!';
            echo json_encode($json);
            exit(); 
        }
        
        // Valida Descrição
        if(trim($desc_diz) == '' || trim($desc_diz) == NULL && strlen($desc_diz) > 200){            
            $json['ret'] = 'false';
            $json['msg'] = 'Erro: Descrição do Dizimo não pode ser Vazia nem conter mais de 200 caracteres!';
            echo json_encode($json);
            exit(); 
        }
        
        
    }
    function Excluir(){}
    function Buscar(){}


?>

