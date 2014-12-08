$(function(){
    
    var SCD_M0001 = new Pacote_SCD.Scd.m0001();
    var self = this;
    
    this.Inicializar = function(){
            
        $("#scd_h0001-dt_entr_diz").mask("99/99/9999");
        $("#scd_h0001-vl_diz").maskMoney({showSymbol:true, symbol:"R$", decimal:".", thousands:"."});
//        $("#scd_h0001-vl_diz").mask("99,99");
        
        
        $('#scd_h0001-btn_incluir').click(function(){
            self.Inserir();
        });
        
        $('#scd_h0001-btn_excluir').click(function(){});
        
        $('#scd_h0001-btn_limpar').click(function(){
            self.Limpar();
        });        
        $('#scd_h0001-buscar_mem').click(function(){
            self.Buscar();
        });
        
        self.Limpar();
        
    };
    
    
    this.Inserir = function(){
        
        SCD_M0001.cd_mem = $('#scd_h0001-cd_mem').val();
        SCD_M0001.vl_diz = $('#scd_h0001-vl_diz').val();
        SCD_M0001.dt_entr_diz = $('#scd_h0001-dt_entr_diz').val();
        SCD_M0001.desc_diz = $('#scd_h0001-desc_diz').val();
        SCD_M0001.Inserir();
        
    }
    
    this.Alterar = function(){}
    this.Excluir = function(){}
    this.Buscar  = function(){
        
        SCD_M0001.st_mem = '1';
        SCD_M0001.nm_mem = $('#scd_h0001-buscar_mem').val();
        SCD_M0001.Buscar();
        
    }
    this.Limpar  = function(){
        
        $('#scd_h0001-desc_diz').val('');
        $('#scd_h0001-dt_entr_diz').val('');
        $('#scd_h0001-vl_diz').val('');
        $('#scd_h0001-nm_mem').val('');
        $('#scd_h0001-cd_mem').val('');
        
        //$('#scd_h0001-buscar_mem').val('');
        
        self.Buscar();
    }
    
    self.Inicializar();
    
});


