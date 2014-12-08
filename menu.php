<?php session_start();
if(!isset($_SESSION['login'])){
    echo "<script type='text/javascript'>location.href = './index.html';</script>";
    exit();
}else{
?>
<!DOCTYPE html>
<html>
    <head>
	<meta charset="utf-8">
	<title>SGI</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="description" content="Avant">
            <meta name="author" content="The Red Team">            
        <!-- Imports css Theme -->
        <link rel="stylesheet" href="library/bootstrap/css/styles.css?=120">        
        <link href="library/bootstrap/css/variations/default.css" rel="stylesheet" type="text/css" media="all" id="styleswitcher">
        <link href="library/bootstrap/css/variations/default.css" rel="stylesheet" type="text/css" media="all" id="headerswitcher">
        <link rel="stylesheet" type="text/css" href="library/bootstrap/css/form-daterangepicker/daterangepicker-bs3.css"/>
        <link rel="stylesheet" type="text/css" href="library/bootstrap/css/fullcalendar/fullcalendar.css "/>
        <link rel="stylesheet" type="text/css" href="library/bootstrap/css/form-markdown/css/bootstrap-markdown.min.css"/>
        <link rel="stylesheet" type="text/css" href="library/bootstrap/css/codeprettifier/prettify.css"/>
        <link rel="stylesheet" type="text/css" href="library/bootstrap/css/form-toggle/toggles.css"/> 
        
        
        
        
        <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>-->
        
        
    </head>    
    <body background="public/pictures/Branco.jpg">        
        
        <!--<div id="index_opcao">  -->  
            <div id="menu_frm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg " ></div>
            </div> 
        <!--</div>-->
        
        <header class="navbar navbar-inverse navbar-fixed-top" role="banner">
            <a id="leftmenu-trigger" class="tooltips" data-toggle="tooltip" data-placement="right" title="" data-original-title="Toggle Sidebar"></a>
            <ul class="nav navbar-nav pull-right toolbar">                
                <li class="dropdown demodrop">
                    <a href="#" class="dropdown-toggle username" data-toggle="dropdown"><span class="hidden-xs"><i class="pull-right fa fa-power-off"></i></span></a>
                    <ul class="dropdown-menu userinfo arrow">        			
                        <li class="userlinks">
                            <ul class="dropdown-menu">                                    
                                <li><a href="logout.php" class="text-right">Sair</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>                
            </ul>            
            <ul class="nav navbar-nav pull-right toolbar">                
                <li class="dropdown demodrop">
                    <i class="fa fa-user"></i>
                    <span >
                        <?php echo $_SESSION['login'] ?>
                    </span>                    
                </li>                
            </ul>           
            
            
        </header>      
                    
        <nav id="page-leftbar" role="navigation">               
            
            <ul class="acc-menu" id="sidebar">  
                <li><a href="javascript:;"><i class="fa fa-user"></i><span>Usuario</span></a>
                    <ul class='acc-menu' id="index_menu_cad_usuario" style="display: none;" >
                        <li><a data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa  fa-pencil"></i>Cadastrar</a></li>                        
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="javascript:;"><i class="fa fa-truck"></i><span>Fornecedor</span></a>
                    <ul class='acc-menu' id="" style="display: none;" >
                        <li><a   href="javascript:;" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa  fa-pencil"></i>Cadastrar</a></li>                        
                    </ul>
                </li>
                <li class="divider"></li>
                <li><a href="javascript:;"><i class="fa fa-book"></i><span>Membro</span></a>
                    <ul class='acc-menu' id="index_menu_cad_membro" style="display: none;" >
                        <li><a data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa  fa-pencil"></i>Cadastrar</a></li>
                        <li><a data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-list-alt"></i>Listar</a></li>
                    </ul>
                </li>
                
                <li class="divider"></li>
                
                <li class="hasChild"> <a href="javascript:;"><i class="fa fa-money"></i><span>Financeiro</span></a>
                    <ul class="acc-menu" style="display: none;">
                        <li class="hasChild"><a href="javascript:;"><i class="fa fa-usd"></i><span>Dizimo</span></a>
                            <ul class="acc-menu" id="index_menu_cad_dizimo">
                                <li><a data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa  fa-pencil"></i>Cadastrar</a></li>
                            </ul>
                        </li>                        
                        <li class="hasChild"><a href="javascript:;"><i class="fa fa-file-text-o"></i><span>Boleto</span></a>
                            <ul class="acc-menu">
                                <li><a href="javascript:; " data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa  fa-pencil"></i>Cadastrar</a></li>                                
                            </ul>
                        </li>
                    </ul>
                </li>
                           
                <li class="divider"></li>
                
                <li><a href="javascript:;"><i class="fa fa-home"></i><span>Patrimonio</span></a>
                    <ul class='acc-menu' id="" style="display: none;" >
                        <li><a   href="javascript:;" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa  fa-pencil"></i>Cadastrar</a></li>                        
                    </ul>
                </li>
                
                <li class="divider"></li>               

                
            </ul>            
        </nav>          


        <!-- Imports js Theme-->        
        <script type='text/javascript' src='library/bootstrap/js/jquery-1.10.2.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jqueryui-1.10.3.min.js'></script>         
        <script type="text/javascript" src="library/bootstrap/js/jquery.min.js"></script>
        <script type="text/javascript" src="library/jQuery/jquery.maskedinput.js"></script>              
        <script type="text/javascript" src="library/bootstrap/js/jquery-ui.min.js"></script>        
        <script type='text/javascript' src='library/bootstrap/js/enquire.js'></script>             
        <script type='text/javascript' src='library/bootstrap/js/bootstrap.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/daterangepicker.min.js'></script>         
        <script type='text/javascript' src='library/bootstrap/js/fullcalendar.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jQuery.pulsate.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.cookie.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.easypiechart.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.flot.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.flot.orderBars.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.flot.resize.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.nicescroll.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jquery.sparklines.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/jqueryui-1.10.3.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/moment.min.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/placeholdr.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/prettify.js'></script>
        <script type='text/javascript' src='library/bootstrap/js/toggle.min.js'></script>
        <script type="text/javascript" src="public/js/menu.js"></script>
        <script type='text/javascript' src='library/bootstrap/js/application.js'></script> 
        <script type='text/javascript' src='library/bootstrap/js/demo.js'></script>     
        <script type="text/javascript" src="library/jQuery/jquery.maskedinput.js"></script>   
        <script type="text/javascript" src="library/jQuery/jquery.maskMoney.js"></script>
        <script type="text/javascript" src="public/modules/scu/js/scu.js"></script>
        <script type="text/javascript" src="public/modules/scm/js/scm.js"></script>
        <script type="text/javascript" src="public/modules/scd/js/scd.js"></script>
        
    </body>
</html>
<?php } ?>