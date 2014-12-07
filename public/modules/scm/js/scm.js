var pacote_SCM = {
    
    Scm:{
        
        m0001:function (){
            
            var cd_mem;             //Codigo Membro
            var nm_mem;             //Nome Membro
            var nm_mae_mem;         //Nome da Mãe do Membro
            var email_mem;          //Email do membro
            var dt_nasc_mem;        //Data Nascimento Membro
            var est_civ_mem;        //Estado Civil Membro
            var end_mem;            //Endereço Membro
            var cpf_mem;            //Cpf Membro
            var loc_bat_mem;        //Local Batismo Membro
            var st_mem;             //Status Membro Igreja
            
            
            this.getcd_mem = getcd_mem;
            function getcd_mem(){ return cd_mem;}
            
            this.getnm_mem = getnm_mem;
            function getnm_mem(){ return nm_mem;}
            
            this.getnm_mae_mem = getnm_mae_mem;
            function getnm_mae_mem(){ return nm_mae_mem;}            
            
            this.getemail_mem = getemail_mem;
            function getemail_mem(){ return email_mem;}
            
            this.getdt_nasc_mem = getdt_nasc_mem;
            function getdt_nasc_mem(){ return dt_nasc_mem;}
            
            this.getest_civ_mem = getest_civ_mem;
            function getest_civ_mem(){ return est_civ_mem;}
            
            this.getend_mem = getend_mem;
            function getend_mem(){ return end_mem;}
            
            this.getcpf_mem = getcpf_mem;
            function getcpf_mem(){ return cpf_mem;}
            
            this.getloc_bat_mem = getloc_bat_mem;
            function getloc_bat_mem(){ return loc_bat_mem;}
            
            this.getst_mem = getst_mem;
            function getst_mem(){ return st_mem;}
            
            this.Inserir = function(){
                
                var url = "../../../../src/scm/controller/scm_c0001.php";
                var opr = 'inserir';
                
                $.ajax({
                    
                    url:url,
                    type:'POST',
                    
                    data:{
                        opr:opr,
                        nm_mem:this.nm_mem,
                        nm_mae_mem:this.nm_mae_mem,
                        email_mem:this.email_mem,
                        dt_nasc_mem:this.dt_nasc_mem,
                        est_civ_mem:this.est_civ_mem,
                        end_mem:this.end_mem,
                        cpf_mem:this.cpf_mem,                       
                        loc_bat_mem:this.loc_bat_mem,                       
                        st_mem:this.st_mem                       
                    },
                    dataType: 'json',
                    success: function(result) {
                        
                        if(result.ret == 'true'){
                            
                            $('#index_dv_sucesso').append('<div class/="alert alert-success/">\n\
                            <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Success!</strong>\n\
                            '+result.msg+'</div>');
                            
                        }else if(result.ret == 'false'){
                            
                            $('#index_dv_sucesso').append('<div class/="alert alert-error/">\n\
                            <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Success!</strong>\n\
                            '+result.msg+'</div>');
                            
                        }
                    }
                });
                
            };
            
            this.Excluir = function(){};
            this.Alterar = function(){};
            
            this.Buscar  = function(){
                
                var url = '../../../../src/scm/controller/scm_c0001.php';
                var opr = 'buscar';
                var itens ="";
                $.ajax({
                    
                    url:url,
                    type:'POST',
                    
                    data:{
                        opr:opr,
                        nm_mem:this.nm_mem
                    },
                    dataType: 'json',
                    success: function(data){
                        
                    }
                    
                });
            };
            
        }
    }
}

pacote_SCM.Scm.m0001.prototype;