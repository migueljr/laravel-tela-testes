<div    
        id="resume-cart-mobile"
        style="
            position:absolute;
            background-color:white;
            width:100%;
            top:108px;
            box-shadow: 0px 13px 15px -8px rgba(0,0,0,0.3);
            display:none;
        "
        >
            @component('checkout.components.content-resume-cart')
            @endcomponent
    </div>



     @push('styles')
        <style>
            
             @media (min-width: 768px) and (max-width: 1023px)
            {
                 #resume-cart-mobile-content{padding:20px 100px;}
            }

            @media (min-width: 576px) and (max-width: 767.98px)
            {
                  #resume-cart-mobile-content{padding:20px 100px;}
            }
            

            @media (max-width: 575px)
            {
                 #resume-cart-mobile-content{padding:20px;}
            }   
        </style>
    @endpush

    @push('scripts')
        <script>
            
            document.querySelector('#cart-mobile').addEventListener('click',()=>{
                if(document.querySelector('#resume-cart-mobile').style.display == 'block'){
                    document.querySelector('#resume-cart-mobile').style.display = 'none'
                }else{
                    document.querySelector('#resume-cart-mobile').style.display = 'block'
                }
            })
            
        </script>
    @endpush