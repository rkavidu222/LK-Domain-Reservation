@extends('layouts.app')

@section('title', '.LK Domain Reservation | SriLanka Hosting')

@section('content')

<div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
  <img src="https://www.srilankahosting.lk/logo.svg" />

<div class="mb-3 text-center">
  <div>Sri Lanka's Best Web Hosting Company</div>
  <div class="text-success d-inline-flex align-items-center justify-content-center gap-1 mt-1">
    <img src="https://img.icons8.com/ios-filled/24/lock-2.png" alt="Lock Icon" />
    <span>100% Secure SSL Protected Checkout</span>
  </div>
</div>


  <hr>

  @include('partials.price')

  @include('partials.trust')

  @include('partials.whyUs')

</div>
@endsection

@section('scripts')


<script src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>

@endsection
