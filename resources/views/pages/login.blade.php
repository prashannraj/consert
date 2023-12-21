@extends('layouts.app')
@section('content')
    <main>
        <div class="max-w-screen-md mx-auto px-4 py-12">
            <livewire:login-component />
            <div class="text-center mt-3">
                <a href="forgot-password" class="text-blue-500 hover:underline">Forgot password ?</a>
            </div>
        </div>
    </main>
@stop
