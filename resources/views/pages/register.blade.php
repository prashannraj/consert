@extends('layouts.app')
@section('content')
    <main class="max-w-screen-xl px-4 py-12 mx-auto text-center">
        <a href="/" class="inline-block px-3 py-2 rounded bg-danger-600 font-medium text-gray-50 mb-4 transition-all duration-200 text-sm hover:bg-danger-500">Go Back</a>
        <h1 class="text-2xl font-medium mb-5">Application Form For {{$classData->name}}</h1>
        <div class="prose max-w-full text-left mb-10">
            {!! $classData->admission_fee !!}
        </div>
        <livewire:student-register :class_data="$classData" :formId=0 :disabled=0 />
    </main>
@stop