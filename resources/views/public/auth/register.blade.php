@extends('public._layouts.master')
@section('page_class', 'account register')
@section('content')
    <section class="form">
        <div class="form-wrap container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2 class="title">Crie sua conta</h2>
                    @include('public._partials._messages')
                    <form method="post" action="{{ route('front.register') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="name">Nome</label>
                                <input class="form-control form-control-lg @error('name') is-invalid @enderror"
                                       name="name" 
                                       value="{{ old('name') }}"
                                       required
                                       autocomplete="name"
                                       placeholder="Nome"
                                       type="text">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="email">E-mail</label>
                                <input class="form-control form-control-lg @error('email') is-invalid @enderror"
                                       name="email" 
                                       value="{{ old('email') }}"
                                       required
                                       autocomplete="email"
                                       placeholder="E-mail"
                                       type="email">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="phone1">Celular</label>
                                <input class="form-control form-control-lg mask_phone_with_ddd @error('phone1') is-invalid @enderror"
                                       name="phone1" 
                                       value="{{ old('phone1') }}"
                                       required
                                       autocomplete="phone1"
                                       placeholder="Celular"
                                       type="text">
                                @error('phone1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="password">Senha</label>
                                <div class="input-group">
                                    <input class="form-control form-control-lg @error('password') is-invalid @enderror"
                                       name="password" 
                                       value="{{ old('password') }}"
                                       required
                                       autocomplete="password"
                                       placeholder="Senha"
                                       type="password">
                                    <div class="input-group-append toggle-password">
                                        <i class="input-group-text fa fa-eye-slash"></i>
                                    </div>
                                </div>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="password_confirmation">Confirmar senha</label>
                                <div class="input-group">
                                    <input class="form-control form-control-lg @error('password_confirmation') is-invalid @enderror"
                                       name="password_confirmation"
                                       required
                                       autocomplete="password"
                                       placeholder="Confirmar senha"
                                       type="password">
                                    <div class="input-group-append toggle-password">
                                        <i class="input-group-text fa fa-eye-slash"></i>
                                    </div>
                                </div>
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-block btn-dark mt-4 px-4 py-3" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    @parent
    <script src="{{ asset('/js/custom-masks.js?v=1') }}" type="text/javascript"></script>
    <script type='text/javascript'>
        $('.toggle-password').click(function(){
            $(this).children().toggleClass('fa-eye-slash fa-eye');
            let input = $(this).prev();
            input.attr('type', input.attr('type') === 'password' ? 'text' : 'password');
        });
    </script>
@endsection