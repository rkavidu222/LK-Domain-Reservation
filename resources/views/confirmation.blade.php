@extends('layouts.plain')

@section('title', 'Reservation Confirmed - SriLanka Hosting')

@section('head')
<style>
  .responsive-margin-top {
    margin-top: 2rem;
  }

  @media (min-width: 992px) {
    .responsive-margin-top {
      margin-top: 6rem;
    }
  }
</style>
@endsection

@section('content')
<div class="d-flex flex-column min-vh-100">
  <div class="flex-fill d-flex align-items-start justify-content-center responsive-margin-top">
    <div class="card shadow-sm p-4 text-center" style="max-width: 500px; width: 100%;">
      <h3 class="text-success mb-3">✅ Reservation Confirmed!</h3>

      <p class="fs-6">
        Thank you for reserving your <strong>.lk domain</strong> with SriLanka <br>
        Hosting.
      </p>

      <p class="text-muted mb-4">
        You have chosen to skip payment for now.<br>
        You will receive an <strong>SMS</strong> shortly, and our customer support team will contact you within <strong>24 hours </strong>to assist you with completing the payment and activating your domain.
      </p>

      <hr>

      <p class="mb-1 fw-bold">Need help sooner?</p>
      <p>
        📞 Call: 0117109693 (9AM - 5PM)<br>
        💬 WhatsApp:
        <a href="https://wa.me/947117109693" target="_blank" rel="noopener noreferrer" class="text-decoration-underline">Click to Chat</a><br>
        ✉️ Email:
        <a href="mailto:service@serverclub.lk" class="text-decoration-underline">service@serverclub.lk</a>
      </p>
    </div>
  </div>
</div>
@endsection
