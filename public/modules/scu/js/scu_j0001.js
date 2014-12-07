$(function(){
    
    var SCU_M0001 = new pacote_SCU.Scu.m0001();
    var self = this;
    
    this.Inicializa = function(){        
        
        //$('#scu_h0001-dt_nasc_usu').datepicker();
        //$('#scu_h0001-cpf_usu').mask("99/99/9999");
        //$('#example').dataTable({});
        $("#scu_h0001-dt_nasc_usu").mask("99/99/9999");
        
        $('#scu_h0001-btn_incluir').click(function(){
            self.Incluir();
        });        
        $('#scu_h0001-btn_alterar').click(function(){            
           alert('cuzinho') ;
        });
        $('#scu_h0001-btn_excluir').click(function(){});
        $('#scu_h0001-btn_limpar').click(function(){
            self.Limpar();
        });
        
        self.Limpar();
        
    };
        
        this.Incluir = function(){
            
            SCU_M0001.nm_usu = $('#scu_h0001-nm_usu').val();
            SCU_M0001.dt_nasc_usu = $('#scu_h0001-dt_nasc_usu').val();
            SCU_M0001.email_usu = $('#scu_h0001-email_usu').val();
            SCU_M0001.senha_usu = $('#scu_h0001-senha_usu').val();
            SCU_M0001.cpf_usu = $('#scu_h0001-cpf_usu').val();
            SCU_M0001.fn_usu = $('#scu_h0001-fn_usu').val();
            SCU_M0001.st_usu = $('#scu_h0001-st_usu').val();
            SCU_M0001.Inserir();
        }
        
        this.Alterar = function(){};
        this.Excluir = function(){};
        this.Buscar = function(){
            
              SCU_M0001.Buscar();
          
        };
        
        this.Limpar = function(){
            
            $('#scu_h0001-cd_usu').val('');
            $('#scu_h0001-nm_usu').val('');
            $('#scu_h0001-dt_nasc_usu').val('');
            $('#scu_h0001-email_usu').val('');
            $('#scu_h0001-senha_usu').val('');
            $('#scu_h0001-cpf_usu').val('');
            $('#scu_h0001-fn_usu').val('');
            $('#scu_h0001-st_usu').val('');
            
            self.Buscar();
            
        };
    
    
    this.Inicializa();    
});


    $(document).ready(function(){
        $(function() {
            $( "#scu_h0001-dt_nascimento" ).datepicker();
        });    
    });