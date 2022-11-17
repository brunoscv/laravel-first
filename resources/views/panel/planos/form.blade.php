@extends('panel._layouts.panel')

@section('_titulo_pagina_', (isset($item) ? 'Edição' : 'Cadastro') . ' de '.$label)

@section('content')

    @include('panel.planos.nav')

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
                              action="{{ isset($item) ? route('planos.update', $item->id) : route('planos.store') }}">
                        {{ method_field(isset($item) ? 'PUT' : 'POST') }}
                        {{ csrf_field() }}

                        <!-- inicio dos campos -->

                            <div class="form-row">
                                <div class="form-group col-md-12 @if ($errors->has('name')) has-error @endif">
                                    <label for="name">Nome</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                           value="{{ old('name', (isset($item) ? $item->name : '')) }}">
                                    {!! $errors->first('name','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('taxa')) has-error @endif">
                                    <label for="taxa">Taxa Anual %</label>
                                    <input type="text" name="taxa" id="taxa" class="form-control"
                                           value="{{ old('taxa', (isset($item) ? $item->taxa : '')) }}">
                                    {!! $errors->first('taxa','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('prazo')) has-error @endif">
                                    <label for="prazo">Prazo Máximo (meses)</label>
                                    <input type="number" step="1" name="prazo" id="prazo" class="form-control"
                                           value="{{ old('prazo', (isset($item) ? $item->prazo : '')) }}">
                                    {!! $errors->first('prazo','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('renda')) has-error @endif">
                                    <label for="renda">Comprometimento da Renda %</label>
                                    <input type="text" name="renda" id="renda" class="form-control"
                                           value="{{ old('renda', (isset($item) ? $item->renda : '')) }}">
                                    {!! $errors->first('renda','<span class="help-block m-b-none">:message</span>') !!}
                                </div>

                                <div class="form-group col-md-3 @if ($errors->has('calculo')) has-error @endif">
                                    <label for="calculo">Cálculo</label>
                                    <select name="calculo" id="calculo" class="form-control">
                                        @foreach(config('enums.calculos') as $key => $calculo)
                                            <option
                                                value="{{$key}}" {{ old('calculo', (isset($item) ? $item->calculo : '')) == $key ? 'selected' : '' }}>{{$calculo}}</option>
                                        @endforeach
                                    </select>
                                    {!! $errors->first('calculo','<span class="help-block m-b-none">:message</span>') !!}
                                </div>


                            </div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

                            <div class="form-row"></div>

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
                                <a class="btn btn-default" id="ln_listar_form" href="{{ route('planos.index') }}">
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
