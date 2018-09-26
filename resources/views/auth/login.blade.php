@extends('layouts.clean-page-auth')

@section('content')

<div class="box-auth">
    <div class="box-auth-head">
        <div class="box-auth-head-caption-title">
            <h3 class="box-auth-head-caption-title-h3">Login</h3>
        </div>
    </div>
    <div class="box-auth-body">
        <form method="POST" action="{{ route('login') }}" class="">
            @csrf
            <div class="form-group row">
                <label for="email" class="col-md-12 col-form-label">{{ __('E-Mail') }}</label>

                <div class="col-md-12">
                    <input id="email" type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }} w-100" name="email" value="{{ old('email') }}" required autofocus>

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
                    <input id="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }} w-100" " name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12 text-md-right">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Lembrar de mim') }}
                        </label>
                    </div>
                    <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Esqueceu sua senha?') }}
                    </a>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary w-100 p-2 mb-2 mt-2">
                        {{ __('Login') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
    
@endsection
