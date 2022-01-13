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

            body{
                background-color:#f3f4f8;
            }

            .rounded{
                border-radius:5px;
            }

            .bg-white{
                background-color:white;
            }

            .flex{
                display:flex;
            }

            .flex-col{
                flex-direction:column;
            }

            .flex-row{
                flex-direction:row;
            }

            .justify-center{
                justify-content:center;
            }

            .items-center{
                align-items:center;
            }

            .justify-end{
                justify-content:end;
            }

            .items-end{
                align-items:end;
            }

            .justify-start{
                justify-content:start;
            }

            .items-start{
                align-items:start;
            }

            .input-default{
                height:40px;
                border-radius:5px;
                border:1px solid #d0d0d0;
                padding:2px 10px;
                color:black;
                /*background-color:#FEECEF;*/
            }
            
            .input-default-error{
                background-color:#FEECEF;
            }
            
            .input-default:focus{
                outline:none;
                border:1px solid #F30168;
            }
            
            .label-error{
                display:none;
                margin-left:1px;
                margin-top:5px;
            }
            
            .btn-default{
                border-radius:4px;
                border:1px solid transparent;
                padding:10px 15px;
                color:black;
                background-color:#F30168;
                color:white;
                cursor:pointer;
                font-size:12px;
                font-weight:400;
            }
            .btn-default:hover{
                background-color:#da066d;
            }
            
            .btn-default-disabled{
                cursor:not-allowed;
                opacity:0.4;
            }

            #bar-security-mobile{display: none;}
            #bar-logo{margin-top:15px;width:1024px;}

            @media (min-width: 768px) and (max-width: 1023px)
            {
                #bar-logo{margin-top:15px;width:768px;}
            }

            @media (min-width: 576px) and (max-width: 767.98px)
            {
                #bar-logo{margin-top:15px;width:100%;}
            }
            

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
                #bar-logo{margin-top:0px;width:100%;}
            }
        </style>

        @stack('styles')
    </head>
    <body>
        @yield('head')
        @yield('content')
        @yield('footer')
    </body>
</html>
