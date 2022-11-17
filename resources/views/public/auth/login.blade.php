@extends('public._layouts.master')
@section('page_class', 'account login')
@section('content')
    <section class="form">
        <div class="form-wrap container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="title">Faça seu login</h2>
                    @include('public._partials._messages')
                    <form method="post" action="{{ route('front.login') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="email">E-mail ou CPF</label>
                                <input class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required
                                       placeholder="E-mail ou CPF"
                                       type="email">
                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="password">Senha</label>
                                <div class="input-group">
                                    <input class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       name="password"
                                       value="{{ old('password') }}"
                                       required
                                       placeholder="Senha"
                                       type="password">
                                    <div class="input-group-append toggle-password">
                                        <i class="input-group-text fa fa-eye-slash"></i>
                                    </div>
                                </div>
                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row no-gutters">
                            <div class="form-group col-7">
                                <div class="custom-control custom-checkbox mb-0">
                                    <input class="custom-control-input" id="checkbox1" type="checkbox">
                                    <label class="custom-control-label font-weight-normal" for="checkbox1">Manter-me conectado</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                                <div class="form-group col text-right">
                                    <a class="text-dark" href="{{ route('front.showLinkRequestForm') }}">Esqueceu sua senha?</a>
                                </div>
                            @endif
                        </div>
                        <button class="btn btn-block btn-dark mt-4 px-4 py-3" type="submit">Entrar</button>
                        <div class="text-center mt-4">
                            <a class="text-dark" href="{{ route('front.showRegistrationForm') }}">Desejo me cadastrar</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    @parent
    <script type='text/javascript'>
        $('.toggle-password').click(function(){
            $(this).children().toggleClass('fa-eye-slash fa-eye');
            let input = $(this).prev();
            input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
        });
    </script>
@endsection
