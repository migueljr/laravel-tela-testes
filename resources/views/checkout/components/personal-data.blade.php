
<div id="personal-data">
    <div class="flex flex-col" style="gap:5px;">
        <div class="flex items-center" style="gap:5px;">
            <svg style="color:#666666;min-width:35px;height:35px;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="flex flex-col" style="color:#666666;">
                <span style="font-size:14px;font-weight:700;">INFORMAÇÕES PESSOAIS</span>
                <span style="font-size:13px;font-weight:400;">Solicitamos apenas as informações essenciais para você efetuar sua compra. </span>
            </div>
        </div>
        <form>
            <div class="flex flex-col form-group">
                <label>Primeiro Nome</label>
                <input required minlength='2' placeholder="Informe seu primeiro nome" name="first_name" class="input-default" type="text" autocomplete="off" />
                <span name="first_name_label_error" class="label-error">Error</span>
            </div>

            <div class="flex flex-col form-group">
                <label>Sobrenome</label>
                <input required minlength='2' placeholder="Informe seu sobrenome completo" name="last_name"  class="input-default" type="text" />
                <span name="last_name_label_error" class="label-error">Error</span>
            </div>

            <div class="flex flex-col form-group">
                <label>CPF</label>
                <input required minlength='11' onkeypress="mascara(this, cpf)" maxlength="14" name="doc" placeholder="000.000.000-00"  class="input-default" type="text" />
                <span name="doc_label_error" class="label-error">Error</span>
            </div>

            <div class="flex flex-col form-group">
                <label>E-mail</label>
                <input required placeholder="Ex.: seu.e-mail@gmail.com"  name="email" class="input-default" type="text" />
                <span name="email_label_error" class="label-error">Error</span>
            </div>

            <div class="flex flex-col form-group">
                <label>Celular</label>
                <input required minlength='11' onkeypress="mascara(this, telefone)" name="phone" maxlength="15" placeholder="(00) 00000-0000"  class="input-default" type="text" />
                <span name="phone_label_error" class="label-error">Error</span>
            </div>
        </form>
    </div>
</div>




@push('styles')
    <style>
        ::placeholder{
            color:#d0d0d0;
        }
        #personal-data{
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


    </script>
@endpush
