@extends('layouts.clean-page-auth')

@section('content')

<div class="box-auth">
    <div class="box-auth-head">
        <div class="box-auth-head-caption-title">
            <h3 class="box-auth-head-caption-title-h3">Registro</h3>
        </div>
    </div>
    <div class="box-auth-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-12 col-form-label">{{ __('Nome') }}</label>

                <div class="col-md-12">
                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }} w-100" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail') }}</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }} w-100" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-12 col-form-label">{{ __('Password') }}</label>

                <div class="col-md-12">
                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} w-100" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-12 col-form-label">{{ __('Confirm Password') }}</label>

                <div class="col-md-12">
                    <input id="password-confirm" type="password" class="form-control w-100" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary w-100 p-2 mb-2 mt-2">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
