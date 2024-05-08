@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="text-center mt-4 fs-2 text-info-emphasis">Sign Up</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <label for="firstName"></label>
                                <input id="firstName" type="text" placeholder="First Name" class="form-control-plaintext @error('firstName') is-invalid @enderror" name="firstName" value="{{ old('firstName') }}" autofocus>
                                <hr class="border border-black opacity-80">
                                @error('firstName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="lastName"></label>
                                <input id="lastName" type="text" placeholder="Last Name" class="form-control-plaintext @error('lastName') is-invalid @enderror" name="lastName" value="{{ old('lastName') }}" autocomplete="lastName">
                                <hr class="border border-black opacity-80">
                                @error('lastName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <label for="email"></label>
                                <input id="email" type="email" placeholder="Email" class="form-control-plaintext @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
                                <hr class="border border-black opacity-80">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>




                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-6 pt-4 mt-2">
                                        <label for="birthdate" class="text-body-tertiary">Birth Date</label>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <input id="birthdate" type="date" class="form-control-plaintext @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" autocomplete="birthdate">
                                    </div>
                                </div>

                                <hr class="border border-black opacity-80">
                                <style>
                                    #birthdate-error {
                                        font-size: 0.875rem;
                                        margin-top: 0.25rem;
                                    }
                                </style>
                                <b><p id="birthdate-error" class="text-danger"></p></b>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        @error('birthdate')
                                            document.getElementById('birthdate-error').innerText = '{{ $message }}';
                                        @enderror
                                    });
                                </script>
                            </div>
                        </div>


                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <label for="gender"></label>
                                <select id="gender" class="form-control-plaintext text-body-tertiary mt-1 @error('gender') is-invalid @enderror" name="gender">
                                    <option value="Gender">Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <hr class="border border-black opacity-80">
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="phone"></label>
                                <input id="phone" type="text" placeholder="Phone Number" class="form-control-plaintext @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" autocomplete="phone">
                                <hr class="border border-black opacity-80">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-5 justify-content-center">
                            <div class="col-md-4">
                                <label for="password"></label>
                                <input id="password" type="password" placeholder="Password" class="form-control-plaintext @error('password') is-invalid @enderror" name="password" autocomplete="new-password">
                                <hr class="border border-black opacity-80">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="password-confirm"></label>
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control-plaintext" name="password_confirmation" autocomplete="new-password">
                                <hr class="border border-black opacity-80">
                            </div>
                        </div>

                        <div class="d-grid col-6 mx-auto">
                            <button type="submit" class="btn btn-block btn-light btn-outline-info">Register</button>
                        </div>
                    </form>


                    <div class="mt-4 text-body-tertiary text-center">
                        Already Have An Account?
                    </div>
                    <a href="{{route("login")}}" class="nav-link fs-4 text-info-emphasis text-center">Log In</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
