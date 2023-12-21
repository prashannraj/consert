@extends('layouts.app')
@section('content')
    <main>
        <div class="max-w-screen-md mx-auto px-4 py-12">
            <livewire:resetpassword-component :token="$token" />
        </div>
    </main>
@stop
