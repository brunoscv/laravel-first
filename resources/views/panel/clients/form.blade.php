@extends('panel._layouts.panel')

@section('_titulo_pagina_', (isset($item) ? 'Edição' : 'Cadastro') . ' de '.$label)

@section('content')

    @include('panel.clients.nav')

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>@yield('_titulo_pagina_')</h5>
                    </div>
                    <div class="ibox-content">

                        @if (!app()->environment('production') && count($errors) > 0)
                            <div class="alert alert-danger">
                                <h4>Apenas para DEBUG no ambiente "{{ app()->environment() }}"</h4>
                                <ul>
                                    @foreach ($errors->getMessages() as $field => $error)
                                        <li>{{ $field . ' - '.$error[0] }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="post" class="form-horizontal" id="frm_save" autocomplete="off"
                              action="{{ isset($item) ? route('clients.update', $item->id) : route('clients.store') }}">
                        {{ method_field(isset($item) ? 'PUT' : 'POST') }}
                        {{ csrf_field() }}

                        <!-- inicio dos campos -->
                        
                            <div class="form-row">
                                <div class="form-group col-md-3 @if ($errors->has('name')) has-error @endif">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                    		value="{{ old('name', (isset($item) ? $item->name : '')) }}">
                                    {!! $errors->first('name','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('phone')) has-error @endif">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control"
                                    		value="{{ old('phone', (isset($item) ? $item->phone : '')) }}">
                                    {!! $errors->first('phone','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('email')) has-error @endif">
                                    <label for="email">E-mail</label>
                                    <input type="text" name="email" id="email" class="form-control"
                                    		value="{{ old('email', (isset($item) ? $item->email : '')) }}">
                                    {!! $errors->first('email','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('date_birth')) has-error @endif">
                                    <label for="date_birth">Date_birth</label>
                                    <div class="input-group date_calendar">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" class="form-control mask_date" name="date_birth"
                                                   id="date_birth"
                                                   value="{{ old('date_birth', (isset($item) ? $item->date_birth : '')) }}">
                                        </div>
                                    </div>
                                    {!! $errors->first('date_birth','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('renda')) has-error @endif">
                                    <label for="renda">Renda</label>
                                    <input type="text" name="renda" id="renda" class="form-control"
                                    		value="{{ old('renda', (isset($item) ? $item->renda : '')) }}">
                                    {!! $errors->first('renda','<span class="help-block m-b-none">:message</span>') !!}
                                </div>
                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">                            </div>

                            <div class="form-row">
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
                                <a class="btn btn-default" id="ln_listar_form" href="{{ route('clients.index') }}">
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
