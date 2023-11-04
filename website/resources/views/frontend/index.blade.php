@extends('frontend.master')

@section('main')
<!-- home section -->
  @include('frontend.pages.home')
  <!-- akhir home section -->

  <!-- portfolio -->
  @include('frontend.pages.portfolio')
  <!-- akhir portfolio -->

  <!-- workflow -->
  @include('frontend.pages.workflow')
  <!-- akhir workflow -->

  <!-- about -->
  @include('frontend.pages.about')
  <!-- akhir about -->

  <!-- hero section -->
  @include('frontend.inc.hero')
  <!-- akhir hero section -->

  <!-- contact -->
  @include('frontend.pages.contact')
  <!-- akhir contact -->    
@endsection
