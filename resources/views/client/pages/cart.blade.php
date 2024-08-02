@extends('client.layouts.master')

@section('title')
    Giỏ hàng - Cóincidence
@endsection
@section('content')
    @livewire('client.cart')
    @include('client/includes/quickview_modal')
@endsection

