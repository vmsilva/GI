$(function(){
    
    $('#index_menu_cad a').click(function(e){
        e.preventDefault();        
        var href = $(this).attr('href');
        $('#index_opcao').load(href+"#scu_h0001-dv");    
    });    
   
    
});





// Carrega div de formulario externo dentro da Index
//$(document).ready(function(){
//    $('#index_menu_cad a').click(function(e){
//        e.preventDefault();        
//        var href = $(this).attr('href');
//        $('#index_opcao').load(href+"#scu_h0001-dv");    
//    });      
//});





