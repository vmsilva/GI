$(function(){
    
    var self = this;
    
    $('#logar_btn').click(function(){
        self.Logar();
    });
     
     this.Logar = function(){
            var index = '../../../menu.html';
            var cpf   = $('#login_cpf_usuario').val();
            var senha = $('#login_senha_usuario').val();
            var opr   = 'logar';
            var url   = '../../../src/login/controller/login_c.php';
            var erro  = "<div class='alert alert-dismissable alert-danger'>\n\
                    <strong>Erro!</strong> Usuario ou Senha Invalidos \n\
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>\n\
                    </div>";
           $.ajax({
               url: url,
               type: 'POST',
               data:{
                  opr:opr,
                  login_cpf_usuario:cpf,
                  login_senha_usuario: senha
               },
               dataType:'html',
               success: function(result){           
                   
                   if(result === '1'){
                       console.log(result.ret);
                       $(window.document.location).attr('href',index);                       
                   }else if(result === '0'){
                       $('#login_dv-retorno').html(erro);
                   }else if( result === 'CPF Vazio!' || result === 'SENHA Vazio!'){
                        $('#login_dv-retorno').html("<div class='alert alert-dismissable alert-danger'>\n\
                    <strong>Erro!</strong> "+ result +" \n\
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>\n\
                    </div>");
                   }
                                      
               }
           });
     }
    
});


