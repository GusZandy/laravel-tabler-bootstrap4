@extends('tabler::auth.content-wrapper')

@section('content')
    <div class="page">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col col-login mx-auto">
                        <div class="text-center mb-6">
                            <img src="{{ url('images/tabler.svg') }}" class="h-6" alt="">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="card-body p-6">
                                <div class="card-title">Create new account</div>
                                <div class="form-group">
                                    <label for="name" class="form-label">{{ __('Name') }}</label>
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="check" class="custom-control custom-checkbox">
                                        <input id="check" type="checkbox" class="custom-control-input"/>
                                        <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                                    </label>
                                </div>
                                <div class="form-footer">
                                    <button type="submit"
                                            class="btn btn-primary btn-block">{{ __('Register') }}</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-muted">
                            Already have account? <a href="{{ route('login') }}">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
