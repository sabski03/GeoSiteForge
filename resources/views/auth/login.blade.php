@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="text-center m-4 fs-2 text-info-emphasis">Log In</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-4">
                            <label for="email"></label>
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="col-md-5">
                                    <input id="email" type="email" placeholder="Email" class="form-control-plaintext @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                    <hr class="border border-black opacity-80">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="password"></label>
                            <div class="col-md-12 d-flex justify-content-center align-items-center">
                                <div class="col-md-5">
                                    <input id="password" type="password" placeholder="Password" class="form-control-plaintext @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                                    <hr class="border border-black opacity-80"
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                            <div class="offset-md-5 p-5">
                                <div class="text-md-right mb-3">
                                    @if (Route::has('password.request'))
                                        <a class="btn" href="{{ route('password.request') }}">
                                            Forgot Password?
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <div class="d-grid col-8 mx-auto">
                                <button type="submit" class="btn btn-block btn-light btn-outline-info">Log In</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
