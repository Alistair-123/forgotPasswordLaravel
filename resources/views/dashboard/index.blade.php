@extends('layout.layout')

@section('content')
    <div class="w-full bg-gray-800 text-white py-10">
        <h1 class="text-3xl uppercase font-extralight mx-10">Welcome, {{ auth()->user()->name }}</h1>
        <form action="{{ route('logout') }}" method="post" class="mt-4 mx-10">
            @csrf
            <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">
                Logout
            </button>
        </form>
    </div>

    <div class="w-full h-screen flex items-center justify-center gap-10 px-10 py-10">
        <div class="w-1/2 h-[400px] bg-gray-300 flex justify-center items-center rounded-lg shadow-lg">
            <h1 class="text-3xl uppercase font-extralight">Dashboard</h1>
        </div>
        <div class="w-1/2 h-[400px] bg-gray-300 flex justify-center items-center rounded-lg shadow-lg">
            <h1 class="text-3xl uppercase font-extralight">Dashboard</h1>
        </div>
    </div>
@endsection
