<section id="top" style="display:flex;justify-content:center;flex-direction:column; align-items:center; gap:15px;background-color: white;">
    <div id="bar-security-mobile" style="width:100%;height:36px;background-color:#10C300;font-size:12px; gap:10px;">
        <span style="font-weight:700;">COMPRA SEGURA</span>
        <span 
            style="    
                border-radius: 100%;
                background-color: white;
                color: #10C300;
                padding: 1px;
                width: 20px;
                height: 20px;
                display: flex;
                align-items: center;
                justify-content: center;">
            <svg width="13" heigth="13" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
            </svg>
        </span>
        <span>SITE 100% PROTEGIDO</span>
    </div>

    <div id="bar-logo" style="display:flex;justify-content:space-between;">
        <img width="160" height="43" style="margin-left:15px;" src="https://www.adoorei.com.br/wp-content/uploads/2021/08/logo-header.svg" alt="Adoorei">
        
        <div 
            id="logo-sucurity-desktop"
            style="
                display:flex;
                gap:5px;
                align-items:center;
                margin-right:15px;
            ">
            <span 
                style="    
                    border-radius: 100%;
                    background-color: #10C300;
                    color: white;
                    padding: 2px;
                    width: 30px;
                    height: 30px;
                    display: flex;
                    align-items: center;
                    justify-content: center;">
                <svg width="15" heigth="15" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </span>
            <div
                style="
                    display:flex;
                    flex-direction:column;
                    font-size:12px;
                    font-weight:400;
                    color:#10C300;
                ">
                <span style="font-weight:700;">COMPRA SEGURA</span>
                <span>SITE 100% PROTEGIDO</span>
            </div>
        </div>
        <div id="cart-mobile" style="margin-right:15px;" class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
            <span id="notify-cart">10</span>
        </div>
    </div>

    <div style="width:100%;background-color:#F30168;height:71px; color:white; font-weight:700; font-size:14px; display:flex; justify-content:center;align-items:center;text-align:center;">
        <span style="padding:25px;">
            {{$slot}}
        </span>
    </div>
</section>


@push('styles')

    <style>
        
        #cart-mobile svg{
            min-width:30px;
            height:30px;
            color:#666666;
        }

        #cart-mobile{
            display:none;
        }

        #cart-mobile{
            order:1;
        }
        #logo-sucurity-desktop{
            order:2;
        }

        #bar-security-mobile{
            display: none;
            justify-content:center;
            align-items:center;
            text-align:center;
            color:white;
        }
        #bar-logo{margin-top:15px;width:1024px;}

        #notify-cart{
            background-color:#F30168;
            padding:4px;
            color:white;
            border-radius:100%;
            font-size:13px;
            position:absolute;
            margin-top:-10px;
            margin-left:-10px;
        }

        @media (min-width: 768px) and (max-width: 1023px)
        {
            #cart-mobile{order:2;}
            #logo-sucurity-desktop{order:1;}
            #cart-mobile{display:block;}
            #bar-security-mobile{display: flex;}
            #logo-sucurity-desktop{visibility:hidden;}

            #bar-logo{margin-top:15px;width:768px;}
        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            #cart-mobile{order:2;}
            #logo-sucurity-desktop{order:1;}
            #cart-mobile{display:block;}
            #bar-security-mobile{display: flex;}
            #logo-sucurity-desktop{visibility:hidden;}

            #bar-logo{margin-top:15px;width:100%;}
        }
        

        @media (max-width: 575px)
        {
            #cart-mobile{order:2;}
            #logo-sucurity-desktop{order:1;}
            #cart-mobile{display:block;}
            #bar-security-mobile{display: flex;}
            #logo-sucurity-desktop{visibility:hidden;}

            #bar-logo{margin-top:0px;width:100%;}
        }
    </style>
@endpush