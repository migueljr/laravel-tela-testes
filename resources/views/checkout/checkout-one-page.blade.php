@extends('checkout.layouts.layout')

@section('head')
    @component('checkout.components.head')
        {{'Você ganhou frete grátis para essa compra e 12 sem juros para finalizar sua compra agora.'}}
    @endcomponent
@endsection

@section('content')
    @component('checkout.components.personal-data')
        
    @endcomponent
@endsection