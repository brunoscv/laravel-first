@extends('panel._layouts.panel')

@section('_titulo_pagina_', 'Remoção de '.$label)

@section('content')

    @include('panel.{{table}}.nav')

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>@yield('_titulo_pagina_')</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="m-b-md">
                                    <h2>Você confirma a exclusão desse item?</h2>
                                </div>

                                {{--<div class="float-e-margins p-md">
                                    <span>Por motivos de segurança essa remoção será associada ao seu login. Data, hora e IP do momento da remoção serão adicionados ao nosso LOG.</span>
                                </div>--}}

                                <form method="post" class="form-horizontal"
                                      action="{{ route('{{table}}.destroy', $id) }}">
                                    {{ method_field('delete') }}
                                    {{ csrf_field() }}
                                    <div class="form-group">

                                        {{camposList}}

                                        <div class="col-sm-6 col-sm-offset-2 btn-group">
                                            <button class="btn btn-primary" dusk="bt_apagar" type="submit">
                                                <i class="fa fa-trash-o"></i>
                                                Sim
                                            </button>


                                            <a class="btn btn-default" dusk="ln_nao"
                                               href="{{ route('{{table}}.index') }}">
                                                <i class="fa fa-list-ul"></i>
                                                Não
                                            </a>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection


@section('styles')

@endsection


@section('scripts')

@endsection
