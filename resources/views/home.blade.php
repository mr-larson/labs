@extends('layouts.appFront')

@section('content')
    @include('partial.preloder')
    @include('partial.nav')
    @include('partial.homeHero')
    @include('partial.homeAbout')  
    @include('partial.homeTestimonial')
    @include('partial.homeService')
    @include('partial.homeTeam')
    @include('partial.homePromotion')
    @include('partial.contactContact')
    @include('partial.footer')
@endsection