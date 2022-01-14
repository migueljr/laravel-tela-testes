
<div style="display:flex;justify-content:center;">
  <div id="slider" class="slider">
    <div class="wrapper">
      <div id="slides" class="slides">
        <span class="slide">
          <h5 style="text-align:center;">
            PARABÉNS VOCÊ TEM UMA OFERTA ESPECIAL
          </h5>
          <p style="text-align:center;">
            Mensagem oferecendo o produto determinada pelo lojista no ato do cadastro
          </p>
          <img style="width:100px;border-radius:5px;" src="https://a-static.mlcdn.com.br/618x463/bicicleta-aro-29-mountain-bike-caloi-velox-freio-v-brake-21-marchas/magazineluiza/224968700/f8e8eac41c5d1b42ccac9cc345008608.jpg" alt="">
          <span style="text-decoration: line-through;">R$ 120,00</span>
          <span>R$ 80,00</span>
          <button style="padding:8px 8px;color:white;background-color:black;border-radius:5px;">COMPRAR JUNTO</button> 
        </span>
        <span class="slide">
          <h5 style="text-align:center;">
            PARABÉNS VOCÊ TEM UMA OFERTA ESPECIAL
          </h5>
          <p style="text-align:center;">
            Mensagem oferecendo o produto determinada pelo lojista no ato do cadastro
          </p>
          <img style="width:100px;border-radius:5px;" src="https://a-static.mlcdn.com.br/618x463/bicicleta-aro-29-mountain-bike-caloi-velox-freio-v-brake-21-marchas/magazineluiza/224968700/f8e8eac41c5d1b42ccac9cc345008608.jpg" alt="">
          <span style="text-decoration: line-through;">R$ 120,00</span>
          <span>R$ 80,00</span>
          <button style="padding:8px 8px;color:white;background-color:black;border-radius:5px;">COMPRAR JUNTO</button> 
        </span>
        <span class="slide">
          <h5 style="text-align:center;">
            PARABÉNS VOCÊ TEM UMA OFERTA ESPECIAL
          </h5>
          <p style="text-align:center;">
            Mensagem oferecendo o produto determinada pelo lojista no ato do cadastro
          </p>
          <img style="width:100px;border-radius:5px;" src="https://a-static.mlcdn.com.br/618x463/bicicleta-aro-29-mountain-bike-caloi-velox-freio-v-brake-21-marchas/magazineluiza/224968700/f8e8eac41c5d1b42ccac9cc345008608.jpg" alt="">
          <span style="text-decoration: line-through;">R$ 120,00</span>
          <span>R$ 80,00</span>
          <button style="padding:8px 8px;color:white;background-color:black;border-radius:5px;">COMPRAR JUNTO</button> 
        </span>
      </div>
    </div>
    <a style="visibility:hidden;" id="prev" class="control prev"></a>
    <a style="visibility:hidden;" id="next" class="control next"></a>
  </div>

  <div id="map" style="display:flex;gap:10px;position:absolute; margin-top:350px;z-index:99;width:400px;justify-content:center;">
      <div style="width:10px;height:10px; border-radius:100%; background-color:blue;"></div>
      <div style="width:10px;height:10px; border-radius:100%; background-color:blue;"></div>
      <div style="width:10px;height:10px; border-radius:100%; background-color:blue;"></div>
  </div>
  
</div>






@push('styles')
    <style>
        

        * { box-sizing: border-box; }

        :root {
            --width: 650px;
            --height: 370px;
        }  

        @media (min-width: 768px) and (max-width: 1023px)
        {
            :root {
                --width: 650px;
                --height: 370px;
            }  
        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            :root {
                --width: 500px;
                --height: 370px;
            }  
        }
        

        @media (max-width: 575px)
        {
            :root {
                --width: 300px;
                --height: 370px;
            }  
        }   

        .slider {
        width: var(--width);
        height: var(--height);
        }

        .wrapper {
        overflow: hidden;
        position: relative;
        width:  var(--width);
        height:  var(--height);
        z-index: 1;
        }

        .slides {
        display: flex;
        position: relative;
        top: 0;
        left: - var(-width);
        width: 10000px;
        }

        .slides.shifting {
        transition: left .2s ease-out;
        }

        .slide {
        padding:10px;
        width: var(--width);
        height: var(--height);
        cursor: pointer;
        display: flex;
        flex-direction: column;
        align-items:center;
        gap:10px;
        transition: all 1s;
        position: relative;
        background: #FFF5D2;
        border-radius: 5px;
        border:1px solid #FAC444;
        }


        .slider.loaded .slide:nth-child(2),
        .slider.loaded .slide:nth-child(7) { background: #FFF5D2 }
        .slider.loaded .slide:nth-child(1),
        .slider.loaded .slide:nth-child(6) { background: #FFF5D2 }
        .slider.loaded .slide:nth-child(3) { background: #FFF5D2 }
        .slider.loaded .slide:nth-child(4) { background: #FFF5D2 }
        .slider.loaded .slide:nth-child(5) { background: #FFF5D2 }


        .control {
        position: absolute;
        top: 50%;
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 50px;
        margin-top: -20px;
        box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3);
        z-index: 2;
        }

        .prev,
        .next {
        background-size: 22px;
        background-position: center;
        background-repeat: no-repeat;
        cursor: pointer;
        }

        .prev {
        background-image: url(https://cdn0.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/ChevronLeft-512.png);
        left: -20px;
        }

        .next {
        background-image: url(https://cdn0.iconfinder.com/data/icons/navigation-set-arrows-part-one/32/ChevronRight-512.png);
        right: -20px;
        }

        .prev:active,
        .next:active {
        transform: scale(.8);
        }
    </style>
@endpush


@push('scripts')
    <script>
    /*
        document.documentElement.style.setProperty('--width', document.querySelector('#content-checkout-one-page').offsetWidth-10+'px');
        window.addEventListener('resize', ()=>{
            document.documentElement.style.setProperty('--width', document.querySelector('#content-checkout-one-page').offsetWidth-10+'px');
        })*/


        var slider = document.getElementById('slider'),
            sliderItems = document.getElementById('slides'),
            prev = document.getElementById('prev'),
            next = document.getElementById('next');

        function slide(wrapper, items, prev, next) {
        var posX1 = 0,
            posX2 = 0,
            posInitial,
            posFinal,
            threshold = 100,
            slides = items.getElementsByClassName('slide'),
            slidesLength = slides.length,
            slideSize = items.getElementsByClassName('slide')[0].offsetWidth,
            firstSlide = slides[0],
            lastSlide = slides[slidesLength - 1],
            cloneFirst = firstSlide.cloneNode(true),
            cloneLast = lastSlide.cloneNode(true),
            index = 0,
            allowShift = true;
        
        // Clone first and last slide
        items.appendChild(cloneFirst);
        items.insertBefore(cloneLast, firstSlide);
        wrapper.classList.add('loaded');
        
        // Mouse events
        items.onmousedown = dragStart;
        
        // Touch events
        items.addEventListener('touchstart', dragStart);
        items.addEventListener('touchend', dragEnd);
        items.addEventListener('touchmove', dragAction);
        
        // Click events
        prev.addEventListener('click', function () { shiftSlide(-1) });
        next.addEventListener('click', function () { shiftSlide(1) });
        
        // Transition events
        items.addEventListener('transitionend', checkIndex);
        
        function dragStart (e) {
            e = e || window.event;
            e.preventDefault();
            posInitial = items.offsetLeft;
            
            if (e.type == 'touchstart') {
            posX1 = e.touches[0].clientX;
            } else {
            posX1 = e.clientX;
            document.onmouseup = dragEnd;
            document.onmousemove = dragAction;
            }
        }

        function dragAction (e) {
            e = e || window.event;
            
            if (e.type == 'touchmove') {
            posX2 = posX1 - e.touches[0].clientX;
            posX1 = e.touches[0].clientX;
            } else {
            posX2 = posX1 - e.clientX;
            posX1 = e.clientX;
            }
            items.style.left = (items.offsetLeft - posX2) + "px";
        }
        
        document.querySelector('#map').children[index].style.backgroundColor = 'red'
        console.log(index)
        
        function dragEnd (e) {
            posFinal = items.offsetLeft;
            if (posFinal - posInitial < -threshold) {
            shiftSlide(1, 'drag');
            } else if (posFinal - posInitial > threshold) {
            shiftSlide(-1, 'drag');
            } else {
            items.style.left = (posInitial) + "px";
            }

            document.onmouseup = null;
            document.onmousemove = null;
            
            Array.from(document.querySelector('#map').children).forEach((item, i)=>{
                    if(index==i){
                item.style.backgroundColor = 'red'
            }
            else{
                if(index==slidesLength){
                document.querySelector('#map').children[0].style.backgroundColor = 'red'
                document.querySelector('#map').children[slidesLength-1].style.backgroundColor = 'blue'
                }else{
                    if(index==-1){
                    document.querySelector('#map').children[slidesLength-1].style.backgroundColor = 'red'
                    document.querySelector('#map').children[0].style.backgroundColor = 'blue'
                }else{
                    item.style.backgroundColor = 'blue'
                }
                }
                
            }
            })
            
        }
        
        function shiftSlide(dir, action) {
            items.classList.add('shifting');
            
            if (allowShift) {
            if (!action) { posInitial = items.offsetLeft; }

            if (dir == 1) {
                items.style.left = (posInitial - slideSize) + "px";
                index++;      
            } else if (dir == -1) {
                items.style.left = (posInitial + slideSize) + "px";
                index--;      
            }
            };
            
            allowShift = false;
        }
            
        function checkIndex (){
            items.classList.remove('shifting');

            if (index == -1) {
            items.style.left = -(slidesLength * slideSize) + "px";
            index = slidesLength - 1;
            }

            if (index == slidesLength) {
            items.style.left = -(1 * slideSize) + "px";
            index = 0;
            }
            
            allowShift = true;
        }
        }

        slide(slider, sliderItems, prev, next);
    </script>
@endpush


