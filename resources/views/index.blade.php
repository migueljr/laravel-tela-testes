<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            *{
                padding:0px;
                margin:0px;
                font-family: Arial;
            }

            #bar-security-mobile{display: none;}
            #bar-logo{margin-top:15px;}
            

            @media (max-width: 575px)
            {
                #bar-security-mobile
                {
                    display: flex;
                    justify-content:center;
                    align-items:center;
                    text-align:center;
                    color:white;
                }
                #logo-sucurity-desktop{visibility:hidden;}
                #bar-logo{margin-top:0px;}
            }
        </style>
    </head>
    <body>
        <section id="top" style="display:flex;justify-content:center;flex-direction:column; align-items:center; gap:15px;">
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

            <div id="bar-logo" style="display:flex;justify-content:space-between;width:100%;">
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
            </div>

            <div style="width:100%;background-color:#F30168;height:71px; color:white; font-weight:700; font-size:14px; display:flex; justify-content:center;align-items:center;text-align:center;">
                <span style="padding:10px;">
                    Você ganhou frete grátis para essa compra e 12 sem juros para finalizar sua compra agora.

                </span>
            </div>
        </section>
    </body>
</html>
