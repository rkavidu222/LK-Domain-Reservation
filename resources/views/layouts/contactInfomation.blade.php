@extends('layouts.app')

@section('title', 'Domain Contact Information | SriLanka Hosting')

@section('head')
<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@endsection

@section('content')
<div class="card shadow-sm p-4 mx-auto" style="max-width: 500px;">
    <h3 class="text-xl font-semibold text-center mb-4 text-blue-700">
        Enter Your Contact Information
    </h3>

    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="first_name" class="block text-sm font-medium text-gray-700">First Name</label>
            <input type="text" id="first_name" name="first_name" required
                class="form-control mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="last_name" class="block text-sm font-medium text-gray-700">Last Name</label>
            <input type="text" id="last_name" name="last_name" required
                class="form-control mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
            <input type="email" id="email" name="email" required
                class="form-control mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile Number</label>
            <input type="tel" id="mobile" name="mobile" required
                class="form-control mt-1 w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="text-center mt-6">
            <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 flex items-center justify-center mx-auto">
                <i class="bi bi-check-circle mr-2"></i> Continue
            </button>
        </div>
    </form>
</div>
@endsection
