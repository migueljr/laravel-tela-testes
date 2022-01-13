
<div id="delivery-address">
    <div class="flex flex-col" style="gap:5px;">
        <div class="flex" style="gap:10px;">
            <img src="./images/shipping.svg" />
            <div class="flex flex-col" style="color:#666666;">
                <span style="font-size:14px;font-weight:700;">ENDEREÇO DE ENTREGA</span>
                <span style="font-size:13px;font-weight:400;">Agora precisamos do seu endereço para entrega. </span>
            </div>
        </div>
        <form>
            <div class="flex flex-col form-group">
                <label>CEP</label>
                <input placeholder="00000-000" class="input-default" type="text" autocomplete="off" />
                <span class="label-error">Error</span>
                <span style="font-size:13px;font-weight:400;color:#666666;margin-top:10px;">
                    Para calcular o frete é necessário preenche todos os campos acima.
                </span>
            </div>
            <div class="flex flex-col form-group">
                <label>Endereço</label>
                <input placeholder="Informe seu endereço sem número" class="input-default" type="text" autocomplete="off" />
                <span class="label-error">Error</span>
            </div>
            <div class="flex" style="gap:10px;">
                <div class="flex flex-col form-group" style="width:40%;">
                    <label>Número</label>
                    <input placeholder="0000" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>
                <div class="flex flex-col form-group" style="width:60%;">
                    <label>Complemento</label>
                    <input placeholder="Apartamento, casa, loja.." class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>
            </div>

            <div class="flex flex-col form-group">
                <label>Bairro</label>
                <input placeholder="Informe seu bairro" class="input-default" type="text" autocomplete="off" />
                <span class="label-error">Error</span>
            </div>

            <div class="flex" style="gap:10px;">
                <div class="flex flex-col form-group" style="width:50%;">
                    <label>Estado</label>
                    <select class="input-default input-default-select" type="text" autocomplete="off"> 
                        <option>- Selecione</option>
                    </select>
                    <span class="label-error">Error</span>
                </div>
                <div class="flex flex-col form-group" style="width:50%;">
                    <label>Cidade</label>
                    <select  class="input-default input-default-select" type="text" autocomplete="off"> 
                        <option>- Selecione</option>
                    </select>
                    <span class="label-error">Error</span>
                </div>
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
