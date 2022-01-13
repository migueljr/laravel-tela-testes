<div    
        id="resume-cart-mobile"
        style="
            position:absolute;
            background-color:white;
            width:100%;
            top:110px;
            box-shadow: 0px 13px 15px -8px rgba(0,0,0,0.3);
            display:none;
        "
        >
            <div class="flex justify-start flex-col" style="padding:20px;">
                <div>
                    <h3 style="font-weight:700;font-size:14px;color:#666666;margin-bottom:15px !important;">SEU CARRINHO</h3>

                    <div class="flex " style="gap:15px;border-bottom:1px solid #eee;padding-bottom:15px;padding-top:15px;´">
                        <img width="60" height="60" class="rounded" src="./images/product.png" />
                        <div class="flex flex-col" style="gap:5px;font-weight:400;font-size:13px;color:#666666;">
                            <span >Nome do Produto</span>
                            <span >Variante 1</span>
                            <span >Variante 2</span>
                            <span >R$ 120,00</span>

                            <div class="flex justify-between items-center rounded" style="border:1px solid #e7e7e7;padding:5px;">
                                <svg width="15" style="color:#b6b2b2;font-weight:700;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                </svg>
                                <span style="font-weight:700;">1</span>
                                <svg width="15" style="color:#b6b2b2;font-weight:700;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex " style="gap:15px;border-bottom:1px solid #eee;padding-bottom:15px;padding-top:15px;´">
                        <img width="60" height="60" class="rounded" src="./images/product.png" />
                        <div class="flex flex-col" style="gap:5px;font-weight:400;font-size:13px;color:#666666;">
                            <span >Nome do Produto</span>
                            <span >Variante 1</span>
                            <span >Variante 2</span>
                            <span >R$ 120,00</span>

                            <div class="flex justify-between items-center rounded" style="border:1px solid #e7e7e7;padding:5px;">
                                <svg width="15" style="color:#b6b2b2;font-weight:700;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                                </svg>
                                <span style="font-weight:700;">1</span>
                                <svg width="15" style="color:#b6b2b2;font-weight:700;" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center" style="gap:15px;border-bottom:1px solid #eee;padding-bottom:15px;padding-top:15px;´">
                        <input placeholder="Cupom de Desconto" type="text" class="input-default"/>   
                        <button style="background-color:black;" class="btn-default">Aplicar</button>
                    </div>

                    <div class="flex items-end flex-col" style="gap:15px;padding-bottom:15px;padding-top:15px;font-weight:700;font-size:12px;color:#666666;´">
                        <div class="flex justify-between" style="gap:25px;width:200px;">
                            <span>Produtos</span>
                            <span>R$ 548,00</span>
                        </div>
                        <div class="flex justify-between" style="gap:25px;width:200px;">
                            <span>Descontos</span>
                            <span>R$ 548,00</span>
                        </div>
                        <div class="flex justify-between" style="gap:25px;width:200px;color:black;">
                            <span>Total</span>
                            <span style="font-size:16px;">R$ 548,00</span>
                        </div>
                        <div class="flex justify-between" style="gap:25px;width:200px;">
                            <span></span>
                            <span style="font-size:14px;color:black;">ou em 12x de 54,80</span>
                        </div>
                    </div>


                </div>
            </div>
    </div>



     @push('styles')
        <style>
            document.querySelector()
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