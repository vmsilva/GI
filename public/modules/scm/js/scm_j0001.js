$(function(){
    
    var SCM_M0001 = new pacote_SCM.Scm.m0001();
    var self = this;
    
    this.Inicializa = function(){       
        
        $('#scm_h0001-dt_nasc_mem').datepicker();
        $('#scm_h0001-cpf_mem').mask("999.999.999-99");
        $("#scu_h0001-fn_usu").mask("(99)9999-9999");
        
        $('#scm_h0001-btn_incluir').click(function(){
            self.Incluir();
        });        
        
        $('#scm_h0001-btn_alterar').click(function(){
            self.Alterar();
        });
        
        $('#scm_h0001-btn_excluir').click(function(){
            self.Excluir();
        });
        
        $('#scm_h0001-btn_limpar').click(function(){
            self.Limpar();
        });
        
        self.Limpar();
        
    };
        
        this.Incluir = function(){
             SCM_M0001.nm_mem = $('#scm_h0001-nm_mem').val();    
             SCM_M0001.nm_mae_mem = $('#scm_h0001-nm_mae_mem').val();    
             SCM_M0001.email_mem = $('#scm_h0001-email_mem').val();    
             SCM_M0001.dt_nasc_mem = $('#scm_h0001-dt_nasc_mem').val();    
             SCM_M0001.est_civ_mem = $('#scm_h0001-est_civ_mem').val();    
             SCM_M0001.end_mem = $('#scm_h0001-end_mem').val();    
             SCM_M0001.cpf_mem = $('#scm_h0001-cpf_mem').val();    
             SCM_M0001.loc_bat_mem = $('#scm_h0001-loc_bat_mem').val();    
             SCM_M0001.st_mem = $('#scm_h0001-st_mem').val();
             SCM_M0001.Inserir();
        }
        
        this.Alterar = function(){
            alert("Alterar"); 
        };
        this.Excluir = function(){
            alert("Excluir"); 
        };
        this.Buscar = function(){
             SCM_M0001.Buscar();
        };
        
        this.Limpar = function(){
            
            $('#scm_h0001-cd_usu').val('');
            $('#scm_h0001-nm_mem').val('');
            $('#scm_h0001-nm_mae_mem').val('');
            $('#scm_h0001-email_mem').val('');
            $('#scm_h0001-dt_nasc_mem').val('');
            $('#scm_h0001-est_civ_mem').val('');
            $('#scm_h0001-end_mem').val('');
            $('#scm_h0001-cpf_mem').val('');
            $('#scm_h0001-loc_bat_mem').val('');
            $('#scm_h0001-st_mem').val('');
            
            self.Buscar();
            
        };
    
    
    this.Inicializa();    
});


    $(document).ready(function(){
        $(function() {
            $( "#scu_h0001-dt_nascimento" ).datepicker();
        });    
    });