
<div id="resume-cart" class="flex flex-col items-center">
    <div style="width:334px;height:30px;margin-top:15px; padding:5px 10px;" class="flex rounded bg-white items-center">
        <div style="width:100%;height:10px;background-color:black;" class="rounded">
    
        </div>
    </div>
    <div class="bg-white" style="padding:15px;width:310px;margin-top:-15px;border-radius:0px 0px 5px 5px;">
        @component('checkout.components.content-resume-cart')
        @endcomponent
    </div>

    <div style="width:310px;">
        @component('checkout.components.timer')
        @endcomponent
    </div>
    
</div>







@push('styles')
    <style>
        @media (min-width: 768px) and (max-width: 1023px)
        {
            #resume-cart{display:none;}
        }

        @media (min-width: 576px) and (max-width: 767.98px)
        {
            #resume-cart{display:none;}
        }
        

        @media (max-width: 575px)
        {
            #resume-cart{display:none;}
        }
    </style>
@endpush



