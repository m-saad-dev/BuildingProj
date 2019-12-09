@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row ">
        <div class="col-md-12" >
            <div class="card">
                <div class="card-header " style="margin-bottom: 20px; font-size: 30px"><h2>{{ __('تسجيــل الدخــول')
                }}</h2><hr></div>

                <div class="card-body" style="margin: 20px" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">

                            <div class="col-lg-6" style="float: right">
                                <input id="email" type="email"  placeholder="البريــد الإلكترونــى" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-lg-6">
                                <input id="password" type="password" placeholder="كلمة المــرور" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-2">
                                <div class="form-check">
                                    <input class="form-check-input"  type="checkbox" name="remember" id="remember" {{ old
                                    ('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" style="margin:10px" for="remember">
                                        {{ __('تذكرنى') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('الدخول') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمة المرور ؟') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
