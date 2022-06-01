@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="">
                

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @if(session()->has('error'))
				        <div class="alert alert-danger"> {{session()->get('error')}} </div>
                        @endif
                        <h3>{{ __('Login') }}</h3>
                        <div class="row mb-3">
                            <label for="username" class="">{{ __('Username') }}</label>

                            <div class="">
                                <input id="username" type="text" class="@error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="">{{ __('Password') }}</label>

                            <div class="">
                                <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                       

                        <div class="">
                            <div class="">
                                <button type="submit" class="">
                                    {{ __('Login') }}
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
