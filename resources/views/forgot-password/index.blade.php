@extends('layout.layout')

@section('content')
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">Forgot Password</h2>

            @if (session('status'))
                <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-3 mb-4 rounded">
                    {{ session('status') }}
                </div>
            @endif

            <p class="text-gray-600 text-sm text-center mb-4">
                Enter your email, and we'll send you a link to reset your password.
            </p>

            <form method="POST" action="{{ route('password.request') }}" class="space-y-4">
                @csrf

                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email Address</label>
                    <input id="email" type="email" name="email" required
                        class="w-full px-4 py-2 border rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500">
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                    Send Reset Link
                </button>
            </form>

            <div class="text-center mt-4">
                <a href="{{ route('login') }}" class="text-blue-500 text-sm hover:underline">
                    Back to Login
                </a>
            </div>
        </div>
    </div>
@endsection
