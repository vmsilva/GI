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
                        //$('#index_dv_sucesso').append(result);
                        $('#index_dv_sucesso').append('<div class/="alert alert-success/">\n\
                        <a href="#" class="close" data-dismiss="alert">&times;</a> <strong>Success!</strong>\n\
                        '+result+'</div>');    
                    }
                });
                
            };
            
            this.Excluir = function(){};
            this.Alterar = function(){};
            this.Buscar  = function(){
                
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
                       for($i=0; $i < data.length; $i++){
                           
                           html += "<tr class='gradeA odd'>";
                           html += "<td>"+ data[$i].nm_usu+"</td>";
                           html += "<td>"+ data[$i].email_usu+"</td>";
                           html += "<td>"+ data[$i].dt_nasc_usu+"</td>";
                           html += "<td>"+ data[$i].cpf_usu+"</td>";                           
                           html += "</tr>";
                           //html += "<strong>Nome:</strong> "+data[$i].nm_usu +" "+ data[$i].dt_nasc_usu;            
                       }
                       console.log(html);
                       $("#scu_h0001-tb tbody").html(html);
                       //$("#minhaTabela tbody").html(itens);
                        
//                        for(var i = 0; i<result.length; i++){
//                            
//				    itens += "<tr>";
//				    itens += "<td>" + result[i].cd_usu + "</td>";
//				    itens += "<td>" + result[i].nm_usu + "</td>";
//				    itens += "<td>" + result[i].email_usu + "</td>";
//				    itens += "<td>" + result[i].cpf_usu + "</td>";
//				    itens += "<td>" + result[i].dt_nasc_usu + "</td>";
//				    itens += "<td>" + result[i].fn_usu + "</td>";
//				    itens += "<td>" + result[i].st_usu + "</td>";
//				    itens += "</tr>";
//			    }
//                            
//                            alert(itens);
                        
//                        $(function(){
//$("#gcd-ct-extrato").addClass("gcd-loading");
//
//$.getJSON("json/extrato.json", function(data){
//$.each(data.DADOS, function(i, item){
//$("#extrato-usuario tbody").append(
//‘<tr class="’+ item.credito +’" title="’ + item.descricao + ‘">
//<td>’+item.estabelecimento+'</td>
//<td class="gcd-extrato-centro">’ + item.dia + ‘</td>
//<td class="gcd-extrato-centro ‘ + item.lancamento +’">’
//+ item.valor + ‘
//</td>
//</tr>’);
//});
                    }
                });
            };
            
        }
    }
}

pacote_SCU.Scu.m0001.prototype;





// Js pai com todos os scripts do modulo SCU
//$(document).ready(function(){    
//    $('#btn_teste').click(function(){
//        $.ajax({
//            url:'../../../../src/scu/controller/scu_c0001.php',
//            type:'POST',
//            data: {
//                opr:'Cadastrar',
//                nm_usu: 'nm_usu'                
//            },
//            dataType: 'html',
//            success: function(result) {
//                $('#index_dv_sucesso').append(result);
//            }
//        });
//    });
//    
//});


