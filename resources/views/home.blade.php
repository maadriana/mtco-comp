@extends('layouts.app')

@section('title', 'Home')

@section('content')

  @include('partials.hero')
  @include('partials.featured-services')
  @include('partials.about')
  @include('partials.skills')
  @include('partials.stats')
  @include('partials.clients')
  @include('partials.services')
  @include('partials.testimonials')
  @include('partials.portfolio')
  @include('partials.team')
  @include('partials.pricing')
  @include('partials.faq')
  @include('partials.contact')

@endsection
