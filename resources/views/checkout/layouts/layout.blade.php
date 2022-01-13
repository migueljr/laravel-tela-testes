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
