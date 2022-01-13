
<div id="delivery-address">
    <div class="flex flex-col" style="gap:5px;">
        <div class="flex" style="gap:10px;">
            <img width="28" height="20" src="./images/shipping.svg" />
            <div class="flex flex-col" style="color:#666666;">
                <span style="font-size:14px;font-weight:700;">ENDEREÇO DE ENTREGA</span>
                <span style="font-size:13px;font-weight:400;">Agora precisamos do seu endereço para entrega. </span>
            </div>
        </div>
        <form>
            <div class="flex flex-col form-group">
                <label>CEP</label>
                <input onkeypress="mascara(this, cep)" maxlength="9" placeholder="00000-000" class="input-default" type="text" autocomplete="off" />
                <span class="label-error">Error</span>
                <span style="font-size:13px;font-weight:400;color:#666666;margin-top:10px;">
                    Para calcular o frete é necessário preenche todos os campos acima.
                </span>
            </div>
            <div class="flex flex-col form-group">
                <label>Endereço</label>
                <input placeholder="Informe seu endereço sem número" class="input-default" type="text" autocomplete="off" />
                <span class="label-error">Error</span>
            </div>
            <div class="flex" style="gap:10px;">
                <div class="flex flex-col form-group" style="width:40%;">
                    <label>Número</label>
                    <input onkeypress="mascara(this, soNumeros)" maxlength="4"  placeholder="0000" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>
                <div class="flex flex-col form-group" style="width:60%;">
                    <label>Complemento</label>
                    <input placeholder="Apartamento, casa, loja.." class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>
            </div>

            <div class="flex flex-col form-group">
                <label>Bairro</label>
                <input placeholder="Informe seu bairro" class="input-default" type="text" autocomplete="off" />
                <span class="label-error">Error</span>
            </div>

            <div class="flex" style="gap:10px;">
                <div class="flex flex-col form-group" style="width:50%;">
                    <label>Estado</label>
                    <select class="input-default input-default-select" type="text" autocomplete="off"> 
                        <option>- Selecione</option>
                    </select>
                    <span class="label-error">Error</span>
                </div>
                <div class="flex flex-col form-group" style="width:50%;">
                    <label>Cidade</label>
                    <select  class="input-default input-default-select" type="text" autocomplete="off"> 
                        <option>- Selecione</option>
                    </select>
                    <span class="label-error">Error</span>
                </div>
            </div>

            

        </form>
    </div>
</div>




@push('styles')
    <style>
        ::placeholder{
            color:#d0d0d0;
        }
        #delivery-address{
            width:100%;
        }

        .form-group{
            gap:5px;
            margin-top:20px;
        }

        .form-group label{
            font-size:13px;
            color:#666666;
        }

        @media (min-width: 768px) and (max-width: 1023px)
        {
            

        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            

        }
        

        @media (max-width: 575px)
        {
            
        }
    </style>
@endpush

@push('scripts')
    <script>

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

        function cep(v){
            v=v.replace(/D/g,"")                //Remove tudo o que não é dígito
            v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
            return v
        }function soNumeros(v){
            return v.replace(/\D/g,"")
        }


    </script>
@endpush
