@extends('public._layouts.master')
@section('page_class', ' account login ')

@section('content')

    <section class="form">
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-md-6">  @include('public._partials._messages')</div>

            </div>

            <div class="row justify-content-center">


                <div class="col-md-6">


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <h2 class="title">Esqueceu a sua senha?</h2>

                    <p>
                        Não se preocupe, nós enviaremos um email e sms com o token para uma nova senha.
                    </p>

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enviar link de resgate
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

{{--    @include('public._partials.app-mobile')--}}

@endsection
