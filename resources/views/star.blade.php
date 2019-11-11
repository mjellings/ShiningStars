@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card-body">
                            <h3>{{ $star->star_name }}</h3>
                            <h3>{{ $star->your_name }}</h3>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <img src="{{ asset('star1.jpg') }}" width="100%" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
