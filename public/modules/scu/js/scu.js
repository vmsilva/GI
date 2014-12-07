var pacote_SCU = {
    
    Scu:{
        
        m0001:function (){
            
            var cd_usu;
            var nm_usu;
            var dt_nasc_usu;
            var email_usu;
            var senha_usu;
            var cpf_usu;
            var fn_usu;
            var st_usu;
            
            this.getcd_usu = getcd_usu;
            function getcd_usu(){ return cd_usu;}
            
            this.getnm_usu = getnm_usu;
            function getnm_usu(){ return nm_usu;}
            
            this.getdt_nasc_usu = getdt_nasc_usu;
            function getdt_nasc_usu(){ return dt_nasc_usu;}            
            
            this.getemail_usu = getemail_usu;
            function getemail_usu(){ return email_usu;}
            
            this.getsenha_usu = getsenha_usu;
            function getsenha_usu(){ return senha_usu;}
            
            this.getcpf_usu = getcpf_usu;
            function getcpf_usu(){ return cpf_usu;}
            
            this.getfn_usu = getfn_usu;
            function getfn_usu(){ return fn_usu;}
            
            this.getst_usu = getst_usu;
            function getst_usu(){ return st_usu;}
            
            this.Inserir = function(){
                
                var url = '../../../../src/scu/controller/scu_c0001.php';
                var opr = 'inserir';
                
                $.ajax({
                    
                    url:url,
                    type:'POST',
                    
                    data:{
                        opr:opr,
                        nm_usu:this.nm_usu,
                        dt_nasc_usu:this.dt_nasc_usu,
                        email_usu:this.email_usu,
                        senha_usu:this.senha_usu,
                        cpf_usu:this.cpf_usu,
                        fn_usu:this.fn_usu,
                        st_usu:this.st_usu                       
                    },
                    dataType: 'html',
                    success: function(result) {
                        
                        $('#menu_dv_retorno').html("<div class='alert alert-danger alert-dismissable'>\n\
                        <i class='fa fa-ban'></i>\n\
                        <strong> Erro!: </strong> "+ result.msg +" \n\
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>\n\
                        </div>");   
                    }
                });
                
            };
            
            this.Excluir = function(){};
            this.Alterar = function(){};
            
            this.Buscar  = function(data){
                
                var url = '../../../../src/scu/controller/scu_c0001.php';
                var opr = 'buscar';
                var itens ="";
                $.ajax({
                    
                    url:url,
                    type:'POST',
                    
                    data:{
                        opr:opr,
                        cd_usu:this.cd_usu,
                        senha_usu:this.senha_usu,
                        cpf_usu:this.cpf_usu,
                                              
                    },
                    dataType: 'json',
                    success: function(data) {

                       var html = "";
                       var lista = new Array();
                       lista.push(data.dados);
                       
                       for($i=0; $i < lista[0].length; $i++){                     
                           html += "<tr data-data='"+JSON.stringify(lista[0][$i])+"'>";
                           html += "<td class='cel_"+$i+"'>"+ lista[0][$i].nm_usu+"</td>";
                           html += "<td class='cel_"+$i+"'>"+ lista[0][$i].email_usu+"</td>";
                           html += "<td class='cel_"+$i+"'>"+ lista[0][$i].dt_nasc_usu+"</td>";
                           html += "<td class='cel_"+$i+"'>"+ lista[0][$i].cpf_usu+"</td>";
                           html += "</tr>";                          
                       }      
                       
                       $("#scu_h0001-tb tbody").html(html);
                       
                       $('#scu_h0001-tb').find('tbody tr').click(function(){
                           var dados = $(this).data().data;
                           $('#scu_h0001-nm_usu').val(dados.nm_usu);
                           $('#scu_h0001-dt_nasc_usu').val(dados.dt_nasc_usu);
                           $('#scu_h0001-email_usu').val(dados.email_usu);
                           $('#scu_h0001-cpf_usu').val(dados.cpf_usu);
                           $('#scu_h0001-fn_usu').val(dados.fn_usu);
                           $('#scu_h0001-st_usu').val(dados.st_usu);
                       });
        
                    }
                    
                });
            };
            
        }
    }
}

pacote_SCU.Scu.m0001.prototype;




    


