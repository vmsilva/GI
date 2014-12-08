var Pacote_SCD = {
    Scd: {
        
        m0001: function() {
            
            var cd_diz;
            var vl_diz;
            var dt_entr_diz;
            var desc_diz;
            var nm_mem;
            var st_mem;
            var cd_mem;
            
            this.getcd_diz = getcd_diz;
            function getcd_diz(){ return cd_diz;}
            
            this.getvl_diz = getvl_diz;
            function getvl_diz(){ return vl_diz;}
            
            this.getdt_entr_diz = getdt_entr_diz;
            function getdt_entr_diz(){ return dt_entr_diz;}
            
            this.getdesc_diz = getdesc_diz;
            function getdesc_diz(){ return desc_diz;}
            
            this.getnm_mem = getnm_mem;
            function getnm_mem(){ return nm_mem;}   
            
            this.getcd_mem = getcd_mem;
            function getcd_mem(){ return cd_mem;} 
            
            this.getst_mem = getst_mem;
            function getst_mem(){ return st_mem;}          
            
            
            
            
            this.Inserir = function() {

                var url = '../../../../src/scd/controller/scd_c0001.php';
                var opr = 'inserir';

                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        opr: opr,
                        vl_diz:this.vl_diz,
                        dt_entr_diz:this.dt_entr_diz,
                        desc_diz:this.desc_diz,
                        cd_mem:this.cd_mem                  
                    },
                    dataType: 'json',
                    success: function(result){
                        
                        if(result.ret == 'true'){

                            $('#scd_h0001-ret_msg').html('<div class/="alert alert-success/">\n\
                            <a href="#" class="close" data-dismiss="alert">&times;</a> <strong> Sucesso! </strong>\n\
                            '+result.msg+'</div>');

                        }else if(result.ret == 'false'){

                            $('#scd_h0001-ret_msg').html('<div class/="alert alert-error/">\n\
                            <a href="#" class="close" data-dismiss="alert">&times;</a> <strong> Erro! </strong>\n\
                            '+result.msg+'</div>');

                        }
                    }
                });

            };

            this.Excluir = function() {
            };
            this.Alterar = function() {
            };

            this.Buscar = function(data) {

                var url = '../../../../src/scm/controller/scm_c0001.php';
                var opr = 'buscar';
                var itens = "";
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: {
                        opr: opr,
                        st_mem:this.st_mem,
                        nm_mem:this.nm_mem
                    },
                    dataType: 'json',
                    success: function(data) {
                        var html = "";
                        var lista = new Array();
                        lista.push(data.dados);
                        
                        for ($i = 0; $i < lista[0].length; $i++) {
                            html += "<tr data-data='" + JSON.stringify(lista[0][$i]) + "'>";
                            html += "<td class='cel_" + $i + "'>" + lista[0][$i].nm_mem + "</td>";
                            html += "<td class='cel_" + $i + "'>" + lista[0][$i].email_mem + "</td>";
                            html += "<td class='cel_" + $i + "'>" + lista[0][$i].dt_nasc_mem + "</td>";
                            html += "<td class='cel_" + $i + "'>" + lista[0][$i].cpf_mem + "</td>";
                            html += "</tr>";
                        }                        
                        
                        $("#scd_h0001-tb tbody").html(html);

                        $('#scd_h0001-tb').find('tbody tr').click(function() {
                            var dados = $(this).data().data;
                            $('#scd_h0001-nm_mem').val(dados.nm_mem)
                            $('#scd_h0001-cd_mem').val(dados.cd_mem);
                        });

                    }

                });
            };
        }
    }
}

Pacote_SCD.Scd.m0001.prototype;


