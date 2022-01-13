<div id="container-personal-data" class="flex justify-center" style="gap:20px;">
    <div id="personal-data" class="rounded bg-white" style="padding:20px;">
        <div class="flex" style="gap:5px;">
            <svg style="color:#666666;" width="30" height="30" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="flex flex-col" style="color:#666666;">
                <span style="font-size:14px;">INFORMAÇÕES PESSOAIS</span>
                <span style="font-size:13px;">Solicitamos apenas as informações essenciais para você efetuar sua compra. </span>
            </div>
        </div>
    </div>

    @component('checkout.components.resume-cart')
        
    @endcomponent
</div>



@push('styles')
    <style>
        #personal-data{
            width:661px;
            margin-top:15px;
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
