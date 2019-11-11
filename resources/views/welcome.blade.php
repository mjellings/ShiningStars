@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Star') }}</div>

                <div class="card-body">
                    <form method="POST" action="/star">
                        @csrf

                        <div class="form-group row">
                            <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Secret Code') }}</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="star_name" class="col-md-4 col-form-label text-md-right">{{ __('Star Name') }}</label>

                            <div class="col-md-6">
                                <input id="star_name" type="text" class="form-control @error('star_name') is-invalid @enderror" name="star_name" required autocomplete="">

                                @error('star_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="your_name" class="col-md-4 col-form-label text-md-right">{{ __('Your Name') }}</label>

                            <div class="col-md-6">
                                <input id="your_name" type="text" class="form-control @error('your_name') is-invalid @enderror" name="your_name" required autocomplete="">

                                @error('your_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Go!!') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
