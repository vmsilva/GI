$(function(){
    
    var self = this;
    
    this.Inicializar = function(){
        

        $("#login_cpf_usuario").mask("999.999.999-99");
        
        $('#logar_btn').click(function(){
            self.Logar();
        });
        
        self.Limpar();
        
    }
    
     this.Limpar = function(){
         $("#login_cpf_usuario").val('');
         $("#login_senha_usuario").val('');
     }
     
     this.Logar = function(){
         
            var cpf   = $('#login_cpf_usuario').val();
            var senha = $('#login_senha_usuario').val();
            var opr   = 'logar';
            var url   = '../../../src/login/controller/login_c.php';
            var erro  = "<div class='alert alert-danger alert-dismissable'><i class='fa fa-ban'></i><button class='close' aria-hidden='true' data-dismiss='alert' type='button'>×</button><b>Alert!</b></div>";
           $.ajax({
               url: url,
               type: 'POST',
               data:{
                  opr:opr,
                  login_cpf_usuario:cpf,
                  login_senha_usuario: senha
               },
               dataType:'json',
               success: function(result){
                   console.log(result.ret);
                   if(result.ret === 'true'){
                       window.location = result.url;
                   }else{                       
                        $('#login_dv-retorno').html("<div class='alert alert-danger alert-dismissable'>\n\
                        <i class='fa fa-ban'></i>\n\
                        <strong> Erro!: </strong> "+ result.msg +" \n\
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>\n\
                        </div>");                       
                   }                 
                   
                   return;                                      
               }
           });
     }
     
     
     self.Inicializar();
    
});


