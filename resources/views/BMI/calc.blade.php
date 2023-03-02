@extends('layouts.template')

@section('title', 'BMI Calculator')

@section('content')
    <div>
        <h1 class="text-primary fs-1">Calculate your Body Mass Index</h1>
        <form action="{{ route('result') }}" method="post" class="row g-0">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <label for="_weight" class="form-label">Weight</label>

                    <div class="input-group mb-3">

                        <input type="text" name="weight" class="form-control"
                               aria-describedby="inputGroupAppend" id="_weight" required>

                        <span class="input-group-text" id="inputGroupAppend">kg</span><br>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="_height" class="form-label">Height</label>

                    <div class="input-group mb-3">

                        <input type="text" name="height" class="form-control"
                               aria-describedby="inputGroupAppend" id="_height" required>

                        <span class="input-group-text" id="inputGroupAppend">cm</span>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input type="submit" value="Calculate BMI" class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>



@endsection
