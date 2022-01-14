<div id="timer" class="rounded" style="background-color:#ffffff80;padding:20px;width:85%;justify-content:center;flex-direction:column; align-items:center; gap:10px;color:#666666;font-size:13px;margin-top:20px;">
    <span style="color:#F30168;font-weight:700;font-size:13px;">PRODUTO COM PROCURA ALTA</span>
    <div class="flex items-center" style="color:#666666;font-weight:400;font-size:13px;gap:5px;">
        <span>Você tem</span>
        <span id="timer-box" class="rounded" style="padding:5px;font-weight:700;font-size:13px;color:white;background-color:#F30168;">20:00</span>
        <span>para finalizar seu pedido</span>
    </div>
</div>


@push('styles')

    <style>
        #timer{
            display:none;
        }

        @media (min-width: 768px) and (max-width: 1023px)
        {
            #timer{
                display:flex;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            #timer{
                display:flex;
            }
        }
        

        @media (max-width: 575px)
        {
            #timer{
                display:flex;
            }
        }
    </style>
@endpush

@push('scripts')

    <script>
        function startTimer(duration, display) {
            var timer = duration, minutes, seconds;
            setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + ":" + seconds;

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function () {
            var fiveMinutes = 60 * 20,
                display = document.querySelector('#timer-box');
            startTimer(fiveMinutes, display);
        };
    </script>
@endpush



