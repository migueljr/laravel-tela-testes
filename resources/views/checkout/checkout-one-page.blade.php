@extends('checkout.layouts.layout')

@section('head')
    @component('checkout.components.head')
        {{'Você ganhou frete grátis para essa compra e 12 sem juros para finalizar sua compra agora.'}}
    @endcomponent
@endsection

@section('content')

    <div id="content" class="flex justify-center" style="gap:20px;">
        <div id="content-checkout-one-page" class="rounded bg-white flex justify-center flex-col" style="padding:20px; gap:40px;">

            @component('checkout.components.personal-data')  
            @endcomponent

            @component('checkout.components.delivery-address')
            @endcomponent

            @component('checkout.components.shipping-methods')
            @endcomponent

            @component('checkout.components.payment-methods')
            @endcomponent

        </div>
        @component('checkout.components.resume-cart')
    </div>

    
    
    @endcomponent
    
@endsection

@section('footer')
    @component('checkout.components.footer')
    @endcomponent
@endsection


@push('styles')
    <style>
        #content-checkout-one-page{width:661px;}
        #content-checkout-one-page{margin-top:15px;}

        @media (min-width: 768px) and (max-width: 1023px)
        {   
            #content{
                flex-direction:column;
                align-items:center;
            }
            #content-checkout-one-page{margin-top:15px;width:85%;}

        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            #content{
                flex-direction:column;
                align-items:center;
            }
            #content-checkout-one-page{margin-top:15px;width:85%;}

        }
        

        @media (max-width: 575px)
        {
            #content{
                flex-direction:column;
                align-items:center;
            }
            #content-checkout-one-page{margin-top:15px;width:85%;}
        }
    </style>
@endpush