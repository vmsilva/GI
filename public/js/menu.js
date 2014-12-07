$(function(){
    
    //Carrega Pagina Cadastro Usuario
    $('#index_menu_cad_usuario a').click(function(e){
        e.preventDefault();        
        var href = 'src/scu/view/scu_h0001.html';
        $('#menu_frm').load(href+"#scu_h0001-dv");  
            
    });    
   
    //Carrega Pagina Cadastro Membro
    $('#index_menu_cad_membro a').click(function(e){        
        e.preventDefault();         
        var href = 'src/scm/view/scm_h0001.html';        
        $('#menu_frm').load(href+"#scm_h0001-dv");        
    });
    
    $('#index_menu_cad_dizimo a').click(function(e){   
        e.preventDefault();         
        var href = 'src/scd/view/scd_h0001.html';        
        $('#menu_frm').load(href+"#scd_h0001-dv");        
    });

    
});










