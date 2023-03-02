@extends('layouts.template')

@section('title', 'BMI result')

@section('content')
    <div>
        <h1 class="text-success">BMI Result</h1>
        <p class="fs-4">Your Body Mass Index is {{ $index }}. This is considered
            <span style="color: {{ $colour }}">{{ $bmi_value }}</span>.</p>
    </div>

@endsection
