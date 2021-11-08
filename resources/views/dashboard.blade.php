@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="w-8/12 bg-gray-300 p-6 rounded-lg">
            <div class="">Dashboard</div>
            @if (auth()->user()->user_type == "administrator")
                ADMIN DASHBOARD
            @endif
            @if (auth()->user()->user_type == "office-staff")
                OFFICE-STAFF DASHBOARD VIEWS HERE
            @endif
        </div>
    </div>
@endsection