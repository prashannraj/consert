@extends('layouts.app')
@section('content')
    <main>
        <div class="max-w-screen-xl mx-auto px-4 py-12">
            <div class="prose max-w-full text-center">
                {!! $theme->config['landing_description'] !!}
            </div>
        </div>
        @if (count($classData) > 0)
            <div class="max-w-screen-xl mx-auto px-4 pt-4 pb-24">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="text-left border p-3 bg-gray-100">Class</th>
                            <th class="text-left border p-3 bg-gray-100">Year</th>
                            <th class="text-left border p-3 bg-gray-100">Admission link</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classData as $item)
                            <tr>
                                <td class="border p-3">{{ $item->name }}</td>
                                <td class="border p-3">{{ $item->year }}</td>
                                <td class="border p-3"><a href="{{route('home')}}/register/{{$item->id}}" class="font-medium underline text-primary-600 hover:text-primary-500">Click here</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </main>
@stop
