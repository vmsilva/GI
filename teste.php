<?php //
 
    require_once '../GI/src/scu/model/SCU_M0001.php';
    include '../GI/public/util/Conexao.php';
    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);
    
//    try{
//        $pdo = new PDO('mysql:host=localhost;dbname=SGI', 'root', 'victor');
//    }  catch (PDOException $e){
//        echo $e->getMessage();
//    }
    
    $nm_usu = 'brrhehuheuheu';
    
    SCU_M0001::setNm_usu("Nome Teste.php");
    SCU_M0001::setDt_nasc_usu("20112014");
    SCU_M0001::setEmail_usu("Email@test.com");
    SCU_M0001::setFn_usu("6299999999");
    SCU_M0001::setCpf_usu("00000000011");
    SCU_M0001::setSenha_usu("Senha Teste");
    SCU_M0001::setSt_usu("1");
    
        echo SCU_M0001::Inserir();
        exit();
        $pdo  = Conexao::getInstance();
      
      
    
    
    $BB = $pdo->prepare($sql2);
    $BB->bindValue(":nm_usu", $nm_usu);
    $BB->execute();
            
    //echo $BB->rowCount();
    
    
?>

 <!-- Imports js Theme-->        
        
        <script type="text/javascript" src="library/jQuery/jquery.maskedinput.js"></script>              
        <script type="text/javascript" src="library/bootstrap/js/jquery-ui.min.js"></script>
        <script type='text/javascript' src='library/bootstrap/js/prettify.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.flot.min.js'></script>       
        <script type='text/javascript' src='library/bootstrap/js/jquery.flot.orderBars.js'></script>       
        <script type='text/javascript' src='library/bootstrap/js/jquery.sparklines.min.js'></script>
        
        <script type='text/javascript' src='library/bootstrap/js/jquery-1.10.2.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jqueryui-1.10.3.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/enquire.js'></script>        
        <script type='text/javascript' src='library/bootstrap/js/jquery.cookie.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.easypiechart.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jqueryui-1.10.3.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/toggle.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/fullcalendar.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/daterangepicker.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/moment.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.flot.resize.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.flot.orderBars.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jQuery.pulsate.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/demo-index.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/placeholdr.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/application.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/demo.js'></script>
        
        
        
        <!-- Imports js Aplicativo --> 
        <script type="text/javascript" src="library/bootstrap/js/jquery.min.js"></script>        
        <script type="text/javascript" src="public/modules/scu/js/scu.js"></script>       
        <script type="text/javascript" src="public/js/index.js"></script>