@extends('panel._layouts.panel')

@section('_titulo_pagina_', (isset($item) ? 'Edição' : 'Cadastro') . ' de '.$label)

@section('content')

    @include('panel.administrators.nav')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>@yield('_titulo_pagina_')</h5>
                    </div>
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

                        <form method="post" class="form-horizontal" id="frm_save" autocomplete="off"
                              enctype="multipart/form-data"
                              action="{{ isset($item) ? route('administrators.update', $item->id) : route('administrators.store') }}">
                        {{ method_field(isset($item) ? 'PUT' : 'POST') }}
                        {{ csrf_field() }}

                        <!-- inicio dos campos -->

                            <div class="form-row">
                                <div class="form-group col-md-12 @if ($errors->has('name')) has-error @endif">
                                    <label for="name">Nome *</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           value="{{ old('name', (isset($item) ? $item->name : '')) }}">
                                    {!! $errors->first('name','<span class="help-block m-b-none">:message</span>') !!}
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6 @if ($errors->has('document_number')) has-error @endif">
                                    <label for="document_number">CPF</label>
                                    <input type="text" name="document_number" id="document_number"
                                           class="form-control mask_cpf"
                                           value="{{ old('document_number', (isset($item) ? $item->document_number : '')) }}">
                                    {!! $errors->first('document_number','<span class="help-block m-b-none">:message</span>') !!}
                                </div>
                                @if(!isset($item))
                                    <div class="form-group col-md-6  @if ($errors->has('type')) has-error @endif">
                                        <label for="search">Tipo de usuário *</label>
                                        <select id="type" name="type" class="form-control">
                                            @foreach (\App\Models\Type::typesBasics() as $type)
                                                <option value="{{ $type->id }}"
                                                        @if ($type->id == old('type', (isset($item) ? $item->type : '')))
                                                        selected="selected"
                                                    @endif
                                                >{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('type','<span class="help-block m-b-none">:message</span>') !!}
                                    </div>
                                @endif

                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 @if ($errors->has('image')) has-error @endif">
                                    <label for="image">Imagem</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                    {!! $errors->first('image','<span class="help-block m-b-none">:message</span>') !!}
                                    @if(isset($item) && $item->image)
                                        <br/>
                                        <label> <input type="checkbox" value="1" name="delete_image">
                                            Remover image?
                                        </label>
                                    @endif
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12 @if ($errors->has('email')) has-error @endif">
                                    <label for="email">E-mail *</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                           value="{{ old('email', (isset($item) ? $item->email : '')) }}">
                                    {!! $errors->first('email','<span class="help-block m-b-none">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6 @if ($errors->has('password')) has-error @endif">
                                    <label for="password">Senha *</label>
                                    <input type="password" name="password" id="password" class="form-control"
                                           value="">
                                    {!! $errors->first('password','<span class="help-block m-b-none">:message</span>') !!}
                                </div>
                                <div
                                    class="form-group col-md-6 @if ($errors->has('password_confirmation')) has-error @endif">
                                    <label for="password_confirmation">Confirmar Senha *</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation"
                                           class="form-control"
                                           value="">
                                    {!! $errors->first('password_confirmation','<span class="help-block m-b-none">:message</span>') !!}
                                </div>
                            </div>


                            <!-- fim dos campos -->

                            <input id="routeTo" name="routeTo" type="hidden" value="{{ old('routeTo', 'index') }}">
                            <button class="btn btn-primary" id="bt_salvar" type="submit">
                                <i class="fa fa-save"></i>
                                {{ isset($item) ? 'Salvar Alterações' : 'Salvar' }}
                            </button>

                            @if(!isset($item))
                                <button class="btn btn-default" id="bt_salvar_adicionar" type="submit">
                                    <i class="fa fa-save"></i>
                                    Salvar e adicionar novo
                                </button>
                            @else
                                <a class="btn btn-default" id="ln_listar_form"
                                   href="{{ route('administrators.index') }}">
                                    <i class="fa fa-list-ul"></i>
                                    Listar
                                </a>
                        @endif
                        <!-- FIM -->
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
