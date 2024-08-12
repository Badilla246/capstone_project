@extends('layout.base')

@section('title')
    {{ 'Dashboard' }}
@endsection

@section('content')
    <div class="text-xl font-semibold text-[#7366ff]">
        Good morning {{ Auth::user()->name }}
    </div>

    <div class="flex gap-4">
        <div class="bg-white shadow rounded w-[50%] md:w-[25%] mt-3 p-2 h-[20vh]">
            <div class="text-lg font-bold">
                Total Patient
            </div>
        </div>

        <div class="bg-white shadow rounded w-[50%] md:w-[25%] mt-3 p-2 h-[20vh]">
            <div class="text-lg font-bold">
                New Patient
            </div>
        </div>

        {{-- <div class="bg-white shadow rounded w-[25%] mt-3 p-2 h-[20vh]">
            <div class="text-lg font-bold">
                Total Patient
            </div>
        </div> --}}
    </div>

    <div class="mt-7">
        @include('page.barChart.chart')
    </div>
@endsection
