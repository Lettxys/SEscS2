function mascara(mascaraInput) {

    const tamanhoInputTelFixo = document.getElementById('telmae').maxLength
        let valorInputTelFixo = document.getElementById('telmae').value
        const mascaraTelFixo= {
            TelMae : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3' )
        };
    
        if(valorInputTelFixo.length == tamanhoInputTelFixo){
            document.getElementById('telmae').value = mascaraTelFixo[mascaraInput]
        }
    }

    function mascaraa(mascaraInput) {

        const tamanhoInputTelFixo = document.getElementById('telpai').maxLength
            let valorInputTelFixo = document.getElementById('telpai').value
            const mascaraTelFixo= {
                TelPai : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{2})(\d{5})(\d{4}).*/, '($1) $2-$3' )
            };
        
            if(valorInputTelFixo.length == tamanhoInputTelFixo){
                document.getElementById('telpai').value = mascaraTelFixo[mascaraInput]
            }
        }
        
        function mascaraCM(mascaraInput) {

            const tamanhoInputTelFixo = document.getElementById('cpfmae').maxLength
                let valorInputTelFixo = document.getElementById('cpfmae').value
                const mascaraTelFixo= {
                    CpfMae : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4' )
                };
            
                if(valorInputTelFixo.length == tamanhoInputTelFixo){
                    document.getElementById('cpfmae').value = mascaraTelFixo[mascaraInput]
                }
            }
            
            function mascaraCP(mascaraInput) {

                const tamanhoInputTelFixo = document.getElementById('cpfpai').maxLength
                    let valorInputTelFixo = document.getElementById('cpfpai').value
                    const mascaraTelFixo= {
                        CpfPai : valorInputTelFixo.replace(/[^\d]/g, "").replace(/^(\d{3})(\d{3})(\d{3})(\d{2}).*/, '$1.$2.$3-$4' )
                    };
                
                    if(valorInputTelFixo.length == tamanhoInputTelFixo){
                        document.getElementById('cpfpai').value = mascaraTelFixo[mascaraInput]
                    }
                }
                
            

                function verifica(value){
                    var input = document.getElementById("alergiasInpI");
                
                  if(value == "1"){
                    input.disabled = false;
                  }else if(value == "2"){
                    input.disabled = true;
                  }else if(value == "selecione"){
                    input.disabled = true;
                  }
                };

                
                function verifica1(value){
                    var input = document.getElementById("restAlInpI");
                
                  if(value == "1"){
                    input.disabled = false;
                  }else if(value == "2"){
                    input.disabled = true;
                  }else if(value == "selecione"){
                    input.disabled = true;
                  }
                };

                   
                function verifica2(value){
                    var input = document.getElementById("tratamentoMInI");
                
                  if(value == "1"){
                    input.disabled = false;
                  }else if(value == "2"){
                    input.disabled = true;
                  }else if(value == "selecione"){
                    input.disabled = true;
                  }
                };

               
                function verifica3(value){
                    var input = document.getElementById("medicacaoInpI");
                
                  if(value == "1"){
                    input.disabled = false;
                  }else if(value == "2"){
                    input.disabled = true;
                  }else if(value == "selecione"){
                    input.disabled = true;
                  }
                };


                function verifica4(value){
                    var input = document.getElementById("informacaoInpI");
                
                  if(value == "1"){
                    input.disabled = false;
                  }else if(value == "2"){
                    input.disabled = true;
                  }else if(value == "selecione"){
                    input.disabled = true;
                  }
                };

              /*   $("#tratamentoMInI").on("input", function CAPSLOCK(){
                  $(this).val($(this).val().toUpperCase());
              }); */

             /*  $('input[type=text]').val (function (){
                return this.value.toUpperCase();

              }) */

              function handleInput(e) {
                var ss = e.target.selectionStart;
                var se = e.target.selectionEnd;
                e.target.value = e.target.value.toUpperCase();
                e.target.selectionStart = ss;
                e.target.selectionEnd = se;
             }

           /*   $("#form").submit(function(event){
              // var valDDL = $(this).val();  
                     //event.preventDefault();
                      var valDDL = $("#dependentePSI").val();
                      if(valDDL=="")
                      {
                          event.preventDefault();
                          alert("select dropdown option");
                      } 
                      if(valDDL=="selecione")
                      {
                          event.preventDefault();
                          alert("select dropdown option");
                      } 
             
              });

             */

              