<div>

    <div class="flex flex-col items-center form-group rounded" style="border:1px solid #000;padding:10px;">
        <div class="flex flex-row items-center" style="width:100%;">
            <span style="width:10%;">
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
            <span style="width:40%;font-size:13px;white-space:nowrap;">
                    <span class="rounded" style="background-color:black;padding:4px;color:white;font-size:10px;position:absolute;margin-top:-25px;margin-left:0px;">10% de desconto</span> 
                    BOLETO BANCARIO
                </span>
            <span style="width:50%;font-size:10px;" class="flex justify-end">
                <span class="rounded" style="background-color:#F30168;padding:5px;color:white;">APROVAÇÂO IMEDIATA</span>
            </span>
        </div>


        <div class="flex flex-col" style="gap:20px;margin-top:20px;width:100%;">
            
            <div class="flex items-center" style="gap:5px;">
                <span style="color:#666666;font-size:13px;">Pagamento Processado por</span>
                <img style="width:90px;" src="./images/mercado-pago-logo.png" />
            </div>

            <div class="flex items-center" style="gap:5px;">
                <img style="width:276px;" src="./images/cards.png" />
            </div>


            <form>
                <div class="flex flex-col form-group">
                    <label>Nome igual consta em seu cartão</label>
                    <input placeholder="Preencha o nome igual ao seu cartão" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>CPF</label>
                    <input placeholder="000.000.000-00" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <label>Número do Cartão</label>
                    <input placeholder="0000 0000 0000 0000" class="input-default" type="text" autocomplete="off" />
                    <span class="label-error">Error</span>
                </div>

                <div class="flex" style="gap:10px;">
                    <div class="flex flex-col form-group" style="width:20%;">
                        <label style="white-space:nowrap;">Validade (Mês/Ano):</label>
                        <input class="input-default" type="text" autocomplete="off"/> 
                        <span class="label-error">Error</span>
                    </div>
                    <div class="flex flex-col form-group" style="width:40%;">
                        <label>.</label>
                        <select  class="input-default input-default-select" type="text" autocomplete="off"> 
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>
                        <span class="label-error">Error</span>
                    </div>
                    <div class="flex flex-col form-group" style="width:40%;">
                        <label>CVV:</label>
                        <input  class="input-default" type="text" autocomplete="off"/> 
                        <span class="label-error">Error</span>
                    </div>
                </div>

                <div class="flex flex-col form-group">
                    <label>Parcelas</label>
                    <select  class="input-default input-default-select" type="text" autocomplete="off"> 
                        <option>1 x R$32,00</option>
                        <option>2 x R$18,00</option>
                    </select>
                    <span class="label-error">Error</span>
                </div>

                <div class="flex flex-col form-group">
                    <button style="font-size:16px; background-color:#10C300;" class="btn-default"><b>PAGAR</b> 12 x de R$ 14,99</button>
                </div>
                
            
            </form>


        </div>

    </div>

</div>