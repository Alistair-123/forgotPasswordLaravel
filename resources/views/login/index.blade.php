@extends('layout.layout')

@section('content')
    <div class="w-1/3 flex items-center justify-center min-h-screen bg-gray-100">
        <div class="w-full max-w-sm">
            <div class="bg-white p-6 rounded shadow">
                <h2 class="text-xl font-semibold mb-4 text-center">Login</h2>

                <!-- Error Messages -->
                @if ($errors->any())
                    <div class="bg-red-100 border-red-400 text-red-700 p-3 rounded mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Login Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-sm mb-1">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required
                            class="w-full px-3 py-2 border rounded @error('email') border-red-500 @enderror">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="block text-sm mb-1">Password</label>
                        <input id="password" type="password" name="password" required
                            class="w-full px-3 py-2 border rounded @error('password') border-red-500 @enderror">
                    </div>

                    <div class="flex justify-between text-sm mb-4">
                        <a href="/register" class="text-blue-500">Register</a>
                        <a href="{{ route('password.request') }}" class="text-blue-500">Forgot Password?</a>

                    </div>

                    <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">
                        Login
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection