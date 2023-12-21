@extends('layouts.app')
@section('content')
    <main class="max-w-screen-xl px-4 py-12 mx-auto text-center">
        <div>
            <a href="/" class="inline-block px-3 py-2 rounded bg-danger-600 font-medium text-gray-50 mb-4 transition-all duration-200 text-sm hover:bg-danger-500">Go Back</a>
            <a href="/id-card" class="inline-block px-3 py-2 rounded bg-blue-600 font-medium text-gray-50 mb-4 transition-all duration-200 text-sm hover:bg-blue-500">Generate Id Card</a>
            <a href="/reset-password/{{ Auth::guard('student')->user()->token }}" class="inline-block px-3 py-2 rounded bg-danger-600 font-medium text-gray-50 mb-4 transition-all duration-200 text-sm hover:bg-danger-500">Change Password</a>
            <a href="{{ $theme->config['result_url'] }}" class="inline-block px-3 py-2 rounded bg-danger-600 font-medium text-gray-50 mb-4 transition-all duration-200 text-sm hover:bg-danger-500">Check Result</a>
        </div>
        
        @php
            $formValue = \App\Models\RegisterForm::where('student_db_id', Auth::guard('student')->user()->id)->orderBy('id', 'DESC')->first();
        @endphp
        @if ($formValue != NULL)
            @php
                $classData = \App\Models\ClassData::where('id', $formValue->class_data_id)->first();
            @endphp
            <h1 class="text-2xl font-medium mb-5">Application Form For {{$classData->name}}</h1>
            @if ($formValue->status == 'rejected')
            <div class="text-left mb-10 border border-red-600 bg-red-50 p-3 rounded">
                <h1 class="font-bold text-xl">Application form Rejected:</h1>
                <div>{!! $formValue->extra['remark'] !!}</div>
            </div>
            @endif
            <livewire:student-register :formId="$formValue->id" :disabled=1 :class_data="$classData" />
        @else
        <div class="w-full h-56 rounded-lg border-2 border-gray-600 flex justify-center items-center">
            <span>No Application form submitted</span>
        </div> 
        @endif
    </main>
@stop