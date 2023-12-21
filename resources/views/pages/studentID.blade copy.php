@extends('layouts.idcard')
@section('content')
    @php
        $theme = \App\Models\Configuration::findorfail(1);
        $class = \App\Models\ClassData::findorfail($data->class_data_id);
    @endphp
    <main class="max-w-screen-md  mx-auto p-8 print:p-0">
        <div class="print:hidden mb-4">
            <a href="/dashboard" class="px-3 py-2 text-sm text-gray-50 rounded transition-all duration-200 font-medium bg-danger-600 hover:bg-danger-500">Go Back</a>
            <button onclick="printFunction()" class="px-3 py-2 text-sm text-gray-50 rounded transition-all duration-200 font-medium bg-primary-600 hover:bg-primary-500">Print</button>
        </div>
        <div class="relative max-w-lg bg-white rounded border-4 border-dotted border-spacing-4 p-6 border-gray-800">
            <div class="font-medium text-sm absolute top-2 right-3">
                ID: {{ $data->student_id }}
            </div>
            <div>
                <img class="w-full h-auto" src="{{ asset('uploads/'.$theme->config['logo']) }}" alt="icon" />
                <div class="max-w-screen-xl mx-auto px-4 text-center"><strong>Exam Card</strong> </div>
            </div>
            <div class="flex gap-x-3">
                <img class="w-[120px] h-[120px] object-cover rounded" src="{{ asset('uploads/'.$data->student_photo) }}" alt="image" />
                <div>
                    <div class="flex items-center gap-x-[59px]"><strong>Name</strong> <span>: {{ $data->student_name }}</span></div>
                    <div class="flex items-center gap-x-[57px]"><strong>Father</strong> <span>: {{ $data->father_name }}</span></div>
                    <div class="flex items-center gap-x-[67px]"><strong>Post</strong> <span>: {{ $class->name }}</span></div>
                    <div class="flex items-center gap-x-[67px]"><strong>Year</strong> <span>: {{ $class->year }}</span></div>
                    <div class="flex items-center gap-x-[49px]"><strong>Roll No</strong> <span>: {{ $data->class_data_id }}</span></div>
                    <div class="flex items-center gap-x-[20px]"><strong>Contact No</strong> <span>: {{ $data->parents_phone_number }}</span></div>
                </div>
            </div>
            <div class="flex justify-between">
                <div>
                    <img class="aspect-[4/1] w-[120px] object-cover" src="{{ asset('uploads/'.$data->students_sign_photo) }}" alt="student signature" />
                    <div class="text-xs font-medium ml-3">Candidate Signature</div>
                </div>
                <div>
                    <img class="aspect-[4/1] w-[120px] object-cover" src="{{ asset('uploads/'.$theme->config['principal_signature']) }}" alt="principal signature" />
                    <div class="text-xs font-medium">Officer Signature</div>
                </div>
            </div>
        </div>
    </main>


    <script>
        window.print();
        function printFunction() {
            window.print();
        }
    </script>
@stop
