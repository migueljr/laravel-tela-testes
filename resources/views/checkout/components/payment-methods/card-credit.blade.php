<div>

    <div class="flex flex-col items-center form-group rounded" style="border:1px solid #000;padding:10px;">
        <div class="flex flex-row items-center" style="width:100%;">
            <span style="width:10%;">
                <div style="min-width: 20px;
                            min-width: 15px;
                            min-height: 15px;
                            width:15px;
                            height:15px;
                            border-radius:100%;
                            border: 1px solid #bbb;
                            background-color: #eee;"
                        class="custom-radio-active">
                </div>
            </span>
            <span style="width:40%;font-size:13px;white-space:nowrap;">
                    <span class="rounded" style="background-color:black;padding:4px;color:white;font-size:10px;position:absolute;margin-top:-25px;margin-left:0px;">10% de desconto</span> 
                    BOLETO BANCARIO
                </span>
            <span style="width:50%;font-size:10px;" class="flex justify-end">
                <span class="rounded" style="background-color:#F30168;padding:5px;color:white;">APROVAÇÂO IMEDIATA</span>
            </span>
        </div>


        <div class="flex flex-col" style="gap:20px;margin-top:20px;width:100%;">
            
            <div class="flex items-center" style="gap:5px;">
                <span style="color:#666666;font-size:13px;">Pagamento Processado por</span>
                <img style="width:90px;" src="./images/mercado-pago-logo.png" />
            </div>

            <div class="flex items-center" style="gap:5px;">
                <img style="width:276px;" src="./images/cards.png" />
            </div>


            <form>
                <div class="flex flex-col form-group">
                    <label>Nome igual consta em seu cartão</label>
                    <input placeholder="Preencha o nome igual ao seu cartão" class="input-default"  type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>CPF</label>
                    <input onkeypress="mascara(this, cpf)" placeholder="000.000.000-00" maxlength="14" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>Número do Cartão</label>
                    <input
                        onkeypress="mascara(this, card)" 
                        maxlength="19"
                        id="card-input"
                        style="
                            background-image:url(./images/payment.svg);
                            background-repeat:no-repeat; 
                            background-size: 40px 30px;
                            background-position: left; 
                            padding-left: 50px;
                            background-position-x: 5px;
                        "
                        placeholder="0000 0000 0000 0000" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex" style="gap:10px;">
                    <div class="flex flex-col form-group" style="width:30%;">
                        <label style="white-space:nowrap;">Validade (Mês/Ano):</label>
                        <select  class="input-default input-default-select" type="text" autocomplete="off"> 
                            <option>01</option>
                            <option>02</option>
                            <option>03</option>
                            <option>04</option>
                        </select>
                        <span class="label-error">Error</span>
                    </div>
                    <div class="flex flex-col form-group" style="width:40%;">
                        <label>.</label>
                        <select  class="input-default input-default-select" type="text" autocomplete="off"> 
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>
                        <span class="label-error">Error</span>
                    </div>
                    <div class="flex flex-col form-group" style="width:30%;">
                        <label>CVV:</label>
                        <input  class="input-default" type="text" autocomplete="off"/> 
                        <span class="label-error">Error</span>
                    </div>
                </div>

                <div class="flex flex-col form-group">
                    <label>Parcelas</label>
                    <select  class="input-default input-default-select" type="text" autocomplete="off"> 
                        <option>1 x R$32,00</option>
                        <option>2 x R$18,00</option>
                    </select>
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <button style="font-size:16px; background-color:#10C300;" class="btn-default"><b>PAGAR</b> 12 x de R$ 14,99</button>
                </div>
                
            
            </form>


        </div>

    </div>

</div>



@push('scripts')
    <script>
        var cartoes = {
            Visa: /^4[0-9]{12}(?:[0-9]{3})/,
            Mastercard: /^5[1-5][0-9]{14}/,
            Amex: /^3[47][0-9]{13}/,
            DinersClub: /^3(?:0[0-5]|[68][0-9])[0-9]{11}/,
            Discover: /^6(?:011|5[0-9]{2})[0-9]{12}/,
            JCB: /^(?:2131|1800|35\d{3})\d{11}/
        };

        function testarCC(nr) {
            if(nr.slice(0,1)=='3') return 'America'
            if(nr.slice(0,1)=='4') return 'Visa'
            if(nr.slice(0,1)=='6') return 'Elo'
            if(parseInt(nr.slice(0,2))>=51 && parseInt(nr.slice(0,2))<=55 || parseInt(nr.slice(0,4))>=2221 && parseInt(nr.slice(0,4))<=2720) return 'Master'
        }

        document.querySelector('#card-input').addEventListener('keyup', ()=>{
            console.log(testarCC(document.querySelector('#card-input').value, cartoes))
            if(testarCC(document.querySelector('#card-input').value)=='Visa'){
                document.querySelector('#card-input').style.backgroundImage = 'url(./images/visa.png)'
            }else if(testarCC(document.querySelector('#card-input').value)=='Master'){
                document.querySelector('#card-input').style.backgroundImage = 'url(./images/master.svg)'
            }
            else if(testarCC(document.querySelector('#card-input').value)=='Elo'){
                document.querySelector('#card-input').style.backgroundImage = 'url(./images/elo.jpeg)'
            }
            else if(testarCC(document.querySelector('#card-input').value)=='America'){
                document.querySelector('#card-input').style.backgroundImage = 'url(./images/america.png)'
            }
            else{
                document.querySelector('#card-input').style.backgroundImage = 'url(./images/payment.svg)'
            }
            
        })


        function numberToReal(numero) {
            var numero = numero.toFixed(2).split('.');
            numero[0] = "R$ " + numero[0].split(/(?=(?:...)*$)/).join('.');
            return numero.join(',');
        }

        function mascara(o,f){
            v_obj=o
            v_fun=f
            setTimeout("execmascara()",1)
        }
        function execmascara(){
            v_obj.value=v_fun(v_obj.value)
        }
        function leech(v){
            v=v.replace(/o/gi,"0")
            v=v.replace(/i/gi,"1")
            v=v.replace(/z/gi,"2")
            v=v.replace(/e/gi,"3")
            v=v.replace(/a/gi,"4")
            v=v.replace(/s/gi,"5")
            v=v.replace(/t/gi,"7")
            return v
        }
        function soNumeros(v){
            return v.replace(/\D/g,"")
        }
        function telefone(v){
            v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
            v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
            return v
        }
        function cpf(v){
            v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
            v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                                    //de novo (para o segundo bloco de números)
            v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
            return v
        }
        function card(v){
            v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
            v=v.replace(/(\d{4})(\d)/,"$1 $2")       //Coloca um ponto entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{4})(\d)/,"$1 $2")       //Coloca um ponto entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{4})(\d)/,"$1 $2")       //Coloca um ponto entre o terceiro e o quarto dígitos

            return v
        }
        function cep(v){
            v=v.replace(/D/g,"")                //Remove tudo o que não é dígito
            v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
            return v
        }function soNumeros(v){
            return v.replace(/\D/g,"")
        }
        function telefone(v){
            v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
            v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
            v=v.replace(/(\d{5})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
            return v
        }
        function cpf(v){
            v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
            v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
            v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
                                                    //de novo (para o segundo bloco de números)
            v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
            return v
        }
        function mdata(v){
            v=v.replace(/\D/g,"");
            v=v.replace(/(\d{2})(\d)/,"$1/$2");
            v=v.replace(/(\d{2})(\d)/,"$1/$2");

            v=v.replace(/(\d{2})(\d{2})$/,"$1$2");
            return v;
        }
        function mcc(v){
            v=v.replace(/\D/g,"");
            v=v.replace(/^(\d{4})(\d)/g,"$1 $2");
            v=v.replace(/^(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3");
            v=v.replace(/^(\d{4})\s(\d{4})\s(\d{4})(\d)/g,"$1 $2 $3 $4");
            return v;
        }

    </script>
@endpush