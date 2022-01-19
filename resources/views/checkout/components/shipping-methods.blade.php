
<div id="shipping-methods">
    <div class="flex flex-col" style="gap:5px;">
        <div class="flex" style="gap:10px;">
            <div class="flex flex-col" style="color:#666666;">
                <span style="font-size:14px;font-weight:700;">FORMA DE ENVIO</span>
            </div>
        </div>
        <form>
            <div class="flex flex-row items-center form-group" style="color:#666666;font-weight:400;font-size:13px; width:100%;">
                <span style="width:20%;">
                    <div style="min-width: 20px;
                                min-width: 15px;
                                min-height: 15px;
                                width:15px;
                                height:15px;
                                border-radius:100%;
                                border: 1px solid #bbb;
                                background-color: #eee;"
                         class="custom-radio-active">
                    </div>
                </span>
                <span style="width:40%;">Frete Grátis</span>
                <span style="width:30%;">10 à 30 dias</span>
                <span class="flex justify-end" style="width:30%;">Grátis</span>
            </div>

            <div class="flex flex-row items-center form-group" style="color:#666666;font-weight:400;font-size:13px; width:100%;">
                <span style="width:20%;">
                    <div style="min-width: 20px;
                                min-width: 15px;
                                min-height: 15px;
                                width:15px;
                                height:15px;
                                border-radius:100%;
                                border: 1px solid #bbb;
                                background-color: #eee;">
                    </div>
                </span>
                <span style="width:40%;">Frete Sedex</span>
                <span style="width:30%;">7 à 20 dias</span>
                <span class="flex justify-end" style="width:30%;">R$ 400,00</span>
            </div>
            

            

        </form>
    </div>
</div>




@push('styles')
    <style>
        ::placeholder{
            color:#d0d0d0;
        }
        #delivery-address{
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
