<div id="container-personal-data" class="flex justify-center" style="gap:20px;">
    <div id="personal-data" class="rounded bg-white" style="padding:20px;">
        <div class="flex flex-col" style="gap:5px;">
            <div class="flex" style="gap:5px;">
                <svg style="color:#666666;min-width:30px;height:30px;" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
                    <input placeholder="Informe seu primeiro nome" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>Sobrenome</label>
                    <input placeholder="Informe seu sobrenome completo"  class="input-default" type="text" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>CPF</label>
                    <input placeholder="000.000.000-00"  class="input-default" type="text" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>E-mail</label>
                    <input placeholder="Ex.: seu.e-mail@gmail.com"  class="input-default" type="text" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>Celular</label>
                    <input placeholder="(00) 00000-0000"  class="input-default" type="text" />
                    <span class="label-error">Error</span>
                </div>
            </form>
        </div>
    </div>

    @component('checkout.components.resume-cart')
        
    @endcomponent
</div>



@push('styles')
    <style>
        ::placeholder{
            color:#d0d0d0;
        }
        #personal-data{
            width:661px;
            margin-top:15px;
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
            #personal-data{margin-top:5px;width:85%;}
            #container-personal-data{ flex-direction:column !important; align-items:center;}
        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            #personal-data{margin-top:5px;width:85%;}
            #container-personal-data{ flex-direction:column !important; align-items:center;}
        }
        

        @media (max-width: 575px)
        {
            #personal-data{margin-top:5px;width:85%;}
            #container-personal-data{ flex-direction:column !important; align-items:center;}
        }
    </style>
@endpush
