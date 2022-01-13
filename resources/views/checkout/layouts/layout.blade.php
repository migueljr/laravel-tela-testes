<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <title>Laravel</title>

        {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500&display=swap" rel="stylesheet"> --}}

        <style>
            *{
                padding:0px;
                margin:0px;
                font-family: Arial;
                /*font-family: 'Nunito', sans-serif;*/
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
                justify-content:flex-end;
            }

            .items-end{
                align-items:end;
            }

            .justify-start{
                justify-content:start;
            }

            .justify-between{
                justify-content:space-between;
            }

            .items-start{
                align-items:start;
            }

            .input-default{
                height:40px;
                border-radius:5px;
                border:1px solid #d0d0d0;
                padding:2px 20px;
                color:black;
                color:#666666;
                /*background-color:#FEECEF;*/
            }

            .input-default-select{
                height:46px !important;
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

            

        </style>

        @stack('styles')
    </head>
    <body>
        @yield('head')
        @yield('content')
        @yield('footer')
    </body>
</html>
