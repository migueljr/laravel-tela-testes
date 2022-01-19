@extends('checkout.layouts.layout')

@section('head')
    @component('checkout.components.head')
        {{'Você ganhou frete grátis para essa compra e 12 sem juros para finalizar sua compra agora.'}}
    @endcomponent
@endsection

@section('content')


    <div id="timer-mobile" class="flex justify-center" style="gap:10px;">
        <div style="width:85%;">
            @component('checkout.components.timer')  
            @endcomponent
        </div>
    </div>

    <div id="content" class="flex justify-center" style="gap:10px;">
        

        <div id="content-checkout-one-page" class="rounded bg-white flex justify-center flex-col" style="padding:20px; gap:40px;">

            @component('checkout.components.personal-data')  
            @endcomponent

            @component('checkout.components.delivery-address')
            @endcomponent

            @component('checkout.components.shipping-methods')
            @endcomponent

            @component('checkout.components.order-bump')
            @endcomponent

            @component('checkout.components.payment-methods')
            @endcomponent

        </div>
        @component('checkout.components.resume-cart')
        @endcomponent
    </div>

    
    
    
    
@endsection

@section('footer')
    @component('checkout.components.footer')
    @endcomponent
@endsection


@push('styles')
    <style>
        #content-checkout-one-page{width:661px;}
        #content-checkout-one-page{margin-top:15px;}

        #timer-mobile{ display:none; }

        @media (min-width: 768px) and (max-width: 1023px)
        {   
            #content{
                flex-direction:column;
                align-items:center;
            }
            #content-checkout-one-page{margin-top:15px;width:85%;}
            #timer-mobile{ display:flex; }

        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            #content{
                flex-direction:column;
                align-items:center;
            }
            #content-checkout-one-page{margin-top:15px;width:85%;}

            #timer-mobile{ display:flex; }

        }
        

        @media (max-width: 575px)
        {
            #content{
                flex-direction:column;
                align-items:center;
            }
            #content-checkout-one-page{margin-top:15px;width:85%;}

            #timer-mobile{ display:flex; }
        }
    </style>
@endpush

@push('scripts')
    <script>
        
        document.querySelector('#shipping-methods').style.display = 'none'
        document.querySelector('#delivery-address-next').style.display = 'none'
        document.querySelector('#order-bump').style.display = 'none'
        document.querySelector('#payment-methods').style.display = 'none'
        
        
        var form = {}

        var canUnlockSubmit = false;


        document.querySelectorAll('.input-default').forEach(item=>{
            item.addEventListener('focusout', ()=>{
                form[`${item.name}`] = item.value
                changeCanUnlockSubmit()
                validateInput(item)
            })  
            
            item.addEventListener('keyup', ()=>{
                form[`${item.name}`] = item.value
                changeCanUnlockSubmit()
                validateInput(item)

                if(!canUnlockSubmit && document.querySelector('#general-submit-button')){
                  document.querySelector('#general-submit-button').style.opacity = '0.5'
                  document.querySelector('#general-submit-button').disabled = true
                }else{
                  document.querySelector('#general-submit-button').style.opacity = '1'
                  document.querySelector('#general-submit-button').disabled = false
                }
            })  

            
        })


        document.querySelectorAll('.input-default-select').forEach(item=>{
            item.addEventListener('change', ()=>{
                changeCanUnlockSubmit()
                form[`${item.name}`] = item.value

                if(!canUnlockSubmit && document.querySelector('#general-submit-button')){
                  document.querySelector('#general-submit-button').style.opacity = '0.5'
                  document.querySelector('#general-submit-button').disabled = true
                }else{
                  document.querySelector('#general-submit-button').style.opacity = '1'
                  document.querySelector('#general-submit-button').disabled = false
                }
            })  
        })


        document.querySelector('input[name="postal_code"]').addEventListener('keyup', (e)=>{
            if(document.querySelector('input[name="postal_code"]').value.length==9){
                console.log('liberado')
                document.querySelector('#shipping-methods').style.display = ''
                document.querySelector('#delivery-address-next').style.display = ''
                document.querySelector('#label-next-step-postal-code').style.display = 'none'
                document.querySelector('#order-bump').style.display = ''
                document.querySelector('#payment-methods').style.display = ''
                
            }
        }) 


        function changeCanUnlockSubmit(){

                console.log('first_name', form["first_name"] && form["first_name"].length)
                console.log('last_name', form["last_name"] && form["last_name"].length)
                console.log('email', form["email"] && form["email"].length) 
                console.log('phone', form["phone"] && form["phone"].length)
                console.log('doc', form["doc"] && form["doc"].length) 
                console.log('postal_code', form["postal_code"] && form["postal_code"].length) 
                console.log('address_line_1', form["address_line_1"] && form["address_line_1"].length)
                console.log('address_neighborhood', form["address_neighborhood"] && form["address_neighborhood"].length) 
                console.log('state', form["state"] && form["state"].length) 
                console.log('city', form["city"] && form["city"].length) 
                console.log('card_name', form["card_name"] && form["card_name"].length) 
                console.log('card_doc', form["card_doc"] && form["card_doc"].length) 
                console.log('card_number', form["card_number"] && form["card_number"].length) 
                console.log('card_month', form["card_month"] && form["card_month"].length) 
                console.log('card_year', form["card_year"] && form["card_year"].length) 
                console.log('cvv', form["cvv"] && form["cvv"].length) 
                console.log('card_installments', form["card_installments"] && form["card_installments"].length)

                console.log('..........................')
            
               if(
                    (form["first_name"] && form["first_name"].length) &&
                    (form["last_name"] && form["last_name"].length) &&
                    (form["email"] && form["email"].length) &&
                    (form["phone"] && form["phone"].length) &&
                    (form["doc"] && form["doc"].length) &&
                    (form["postal_code"] && form["postal_code"].length) &&
                    (form["address_line_1"] && form["address_line_1"].length) &&
                    (form["address_neighborhood"] && form["address_neighborhood"].length) &&
                    (form["state"] && form["state"].length) &&
                    (form["city"] && form["city"].length) &&
                    (form["card_name"] && form["card_name"].length) &&
                    (form["card_doc"] && form["card_doc"].length) &&
                    (form["card_number"] && form["card_number"].length) &&
                    (form["card_month"] && form["card_month"].length) &&
                    (form["card_year"] && form["card_year"].length) &&
                    (form["cvv"] && form["cvv"].length) &&
                    (form["card_installments"] && form["card_installments"].length)
               ){
                   canUnlockSubmit = true
               }else{
                   canUnlockSubmit = false
               }
                
            
        }


        function validateInput(item){
            if(item.required){
                if(!validate(item).status){
                    item.classList.add('input-default-error')
                    document.querySelector(`span[name="${item.name}_label_error"]`).style.display = 'block'
                    document.querySelector(`span[name="${item.name}_label_error"]`).textContent = validate(item).message
                }else{
                    item.classList.remove('input-default-error')
                    document.querySelector(`span[name="${item.name}_label_error"]`).style.display = 'none'
                    document.querySelector(`span[name="${item.name}_label_error"]`).textContent = ''
                }
            }
            
        } 


        function validate(input){

            let result = {message:'', status:false}

            if(input.required){
                if(input.value.length) result.status = true
                else {
                    result.status = false
                    result.message = 'Este campo é obrigatório'
                    return result
                }

                if(input.minLength){
                    if(input.value.length >= input.minLength) result.status = true
                    else {
                        result.status = false
                        result.message = 'O mínimo de caracteres para esse campo é '+input.minLength
                        return result
                    }
                }
                if(input.maxlength){
                    if(input.value.length <= input.maxLength) result.status = true
                    else {
                        result.status = false
                        result.message = 'O máximo de caracteres para esse campo é  '+input.maxLength
                        return result
                    }
                }

                return result
            }

            return true
            
        }


        
    </script>
@endpush