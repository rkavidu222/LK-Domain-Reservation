@extends('layouts.plain')

@section('title', 'Reservation Confirmed - SriLanka Hosting')

@section('head')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
<style>
  body {
    background-color: #f8fafc;
    font-family: 'Inter', sans-serif;
  }

  .confirmation-section {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    padding: 2rem;
  }

  .confirmation-card {
    background-color: #ffffff;
    border-radius: 1rem;
    padding: 2rem;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    width: 100%;
    max-width: 500px;
    animation: fadeInUp 0.4s ease-in-out;
  }

  @keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }

  .confirmation-icon {
    font-size: 2.75rem;
    color: #22c55e;
    margin-bottom: 0.75rem;
  }

  .confirmation-title {
    font-size: 1.75rem;
    font-weight: 700;
    color: #1e293b;
  }

  .confirmation-message {
    font-size: 1rem;
    color: #475569;
    margin-top: 1rem;
    line-height: 1.6;
  }

  .support-info {
    font-size: 0.95rem;
    color: #334155;
    border-top: 1px solid #e2e8f0;
    margin-top: 1.5rem;
    padding-top: 1.5rem;
  }

  .support-info a {
    color: #2563eb;
    text-decoration: underline;
  }

  .btn-home {
    margin-top: 1.75rem;
  }
</style>
@endsection

@section('content')
<div class="confirmation-section">
  <div class="confirmation-card text-center">
    <div class="confirmation-icon">✅</div>
    <h2 class="confirmation-title">Reservation Confirmed!</h2>

    <p class="confirmation-message">
      Thank you for reserving your <strong>.lk domain</strong> with <strong>SriLanka Hosting</strong>.
    </p>

    <p class="confirmation-message text-muted">
      You've chosen to <strong>skip payment</strong> for now.<br>
      You’ll receive an <strong>SMS</strong> shortly, and our support team will contact you within <strong>24 hours</strong> to help you complete the payment and activate your domain.
    </p>

    <div class="support-info text-start">
      <p class="fw-semibold">Need help sooner?</p>
      <p>📞 Call: <strong>0117109693</strong> (9AM - 5PM)</p>
      <p>💬 WhatsApp:
        <a href="https://wa.me/947117109693" target="_blank">Click to Chat</a>
      </p>
      <p>✉️ Email:
        <a href="mailto:service@serverclub.lk">service@serverclub.lk</a>
      </p>
    </div>

    <a href="/" class="btn btn-primary btn-sm btn-home">
      <i class="fas fa-arrow-left me-1"></i> Back to Home
    </a>
  </div>
</div>
@endsection
