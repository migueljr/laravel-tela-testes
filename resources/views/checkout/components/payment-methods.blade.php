
<div id="payment-methods">
    <div class="flex flex-col" style="gap:20px;">
        <div class="flex" style="gap:10px;">
            <img width="28" height="20" src="./images/payment.svg" />
            <div class="flex flex-col" style="color:#666666;">
                <span style="font-size:14px;font-weight:700;">FORMAS DE PAGAMENTO</span>
                <span style="font-size:13px;font-weight:400;">Para finalizar seu pedido escolha uma forma de pagamento </span>
            </div>
        </div>
        
        <div>
            @component('checkout.components.payment-methods.card-credit', ['testes'=>'abc'])
            @endcomponent
        </div>

    </div>
</div>




@push('styles')
    <style>
        ::placeholder{
            color:#d0d0d0;
        }
        #payment-methods{
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

        .custom-radio-active{
            background-color:#F30168 !important;
            box-shadow: 0px 0px 0px 3px white inset;
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
