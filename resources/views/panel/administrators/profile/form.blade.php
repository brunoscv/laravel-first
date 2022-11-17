@extends('panel._layouts.panel')

@section('_titulo_pagina_', 'Edição do meu perfil')

@section('content')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        @if (Auth::user()->is_dev && count($errors) > 0)
                            <div class="alert alert-danger dev-mod">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <h2 class="title mb-4">Meus dados</h2>
                        <form class="form" id="frm_save" method="post" enctype="multipart/form-data"
                              action="{{ route('administrators.profileUpdate') }}">
                            {{ method_field('PUT') }}
                            {{ csrf_field() }}
                            <h5 class="mb-3">Cadastro</h5>
                            <div class="card mb-3">
                                <div class="card-body pb-2">
                                    <h6 class="mb-2">Dados pessoais</h6>
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="name">Nome</label>
                                            <input
                                                class="form-control form-control-lg @error('name') is-invalid @enderror"
                                                name="name"
                                                value="{{ old('name', (isset($item->name) ? $item->name : '')) }}"
                                                required
                                                placeholder="Nome"
                                                type="text">
                                            {!! $errors->first('name', '<span class="invalid-feedback" role="alert">:message</span>')!!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-12">
                                            <label for="email">E-mail</label>
                                            <input
                                                class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                name="email"
                                                value="{{ old('email', (isset($item->email) ? $item->email : '')) }}"
                                                required
                                                placeholder="E-mail"
                                                type="text">
                                            {!! $errors->first('email', '<span class="invalid-feedback" role="alert">:message</span>')!!}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="document_number">CPF</label>
                                            <input
                                                class="form-control form-control-lg mask_cpf @error('document_number') is-invalid @enderror"
                                                name="document_number"
                                                value="{{ old('document_number', (isset($item->document_number) ? $item->document_number : '')) }}"
                                                required
                                                placeholder="CPF"
                                                type="text">
                                            {!! $errors->first('document_number', '<span class="invalid-feedback" role="alert">:message</span>')!!}
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="phone1">Celular</label>
                                            <input
                                                class="form-control form-control-lg mask_phone_with_ddd @error('phone1') is-invalid @enderror"
                                                name="phone1"
                                                value="{{ old('phone1', (isset($item->phone1) ? $item->phone1 : '')) }}"
                                                required
                                                placeholder="Celular"
                                                type="text">
                                            {!! $errors->first('phone1', '<span class="invalid-feedback" role="alert">:message</span>')!!}
                                        </div>
                                        <div class="form-group col-md-6 @if ($errors->has('password')) has-error @endif">
                                            <label for="password">Senha</label>
                                            <input type="password" name="password" placeholder="Deixe em branco para manter a mesma senha" id="password" class="form-control"
                                                   value="{{ old('password') }}">
                                            {!! $errors->first('password','<span class="help-block m-b-none">:message</span>') !!}
                                        </div>

                                        <div
                                            class="form-group col-md-6 @if ($errors->has('password_confirmation')) has-error @endif">
                                            <label for="password_confirmation">Confirmar Senha</label>
                                            <input type="password"  name="password_confirmation" id="password_confirmation"
                                                   class="form-control"
                                                   value="">
                                            {!! $errors->first('password_confirmation','<span class="help-block m-b-none">:message</span>') !!}
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="mb-2">Imagem</h6>
                                    <div class="form-group mb-0">
                                        <input id="image"
                                               name="image"
                                               type="file">
                                        {!! $errors->first('image','<span class="invalid-feedback">:message</span>') !!}
                                    </div>
                                </div>
                                @if(isset($item) && $item->image)
                                    <div class="card-footer">
                                        <label class="mb-0">
                                            <input class="mr-2" name="delete_image" value="1" type="checkbox">Remover
                                            imagem?
                                        </label>
                                    </div>
                                @endif
                            </div>
                            <button class="btn btn-primary mt-3 px-4 py-3" type="submit"><i class="fa fa-save mr-2"></i>
                                Salvar alterações
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection


@section('styles')

@endsection


@section('scripts')
    @include('panel._assets.scripts-form')
    {!! $validator->selector('#frm_save') !!}
@endsection
