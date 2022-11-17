@extends('panel._layouts.panel')

@section('_titulo_pagina_', 'Lista de '.$label)

@section('content')

    @include('panel.administrators.nav')

    @php

        $_placeholder_ = "Localize por 'nome'"
    @endphp

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-lg-12">

                <div class="ibox">

                    <div class="ibox-title">

                        <h5>@yield('_titulo_pagina_') de {{ $user->name }}</h5>

                    </div>

                    <div class="ibox-content">

                        <div class="m-b-lg">
                            <form method="post" id="frm_search"
                                  action="{{ route('administrators.profile.add', [$user->id]) }}">
                                {{ csrf_field() }}
                                <div class="row">

                                    <div class="form-group col-md-4 @if ($errors->has('type_id')) has-error @endif">
                                        <label for="type_id">Tipo de usuário</label>
                                        <select id="type_id" name="type_id" class="form-control" required>
                                            <option value="">Selecione abaixo</option>
                                            @foreach (\App\Models\Type::all() as $type)
                                                <option value="{{ $type->id }}"
                                                        @if ($type->id == request('type_id', (isset($item) ? $item->type : '')))
                                                        selected="selected"
                                                    @endif
                                                >{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                        {!! $errors->first('type_id','<span class="help-block m-b-none">:message</span>') !!}

                                    </div>
                                    <div class="form-group col-md-6">

                                    </div>
                                    <div class="form-group col-md-2 text-right">
                                        <label>&nbsp;<br>&nbsp;</label>
                                        <button type="submit" class="btn btn-primary" id="btn_search">
                                            <i class="fa fa-plus"></i> Adicionar
                                        </button>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="table-responsive">

                            @if($data->count())

                                <table class="table table-striped table-bordered table-hover">

                                    <thead>
                                    <tr>
                                        <th style="width: 100px; text-align: center">Ações</th>
                                        <th>Perfil</th>
                                        <th style="width: 180px" class="text-center">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @if($data->count())
                                        @foreach($data as $item)
                                            <tr id="{{ 'tr-'.$item->id }}">
                                                <td>
{{--                                                    @if(!($item->type_id == \App\Models\Type::ALUNO))--}}
                                                        <a onclick="removeProfile({{$item->id}})"><span
                                                                class="fa fa-trash"></span></a>
{{--                                                    @endif--}}
                                                </td>
                                                <td>{{ $item->type->name }}</td>
                                                <td class="text-center">

                                                    <a id="status-{{$item->id}}"
                                                       data-value="{{ $item->id }}"
                                                       data-type="{{$item->active}}"
                                                       class="toggle-active btn badge  @if($item->active) badge-success @else badge-secondary @endif">
                                                        @if($item->active) Ativo @else Inativo @endif
                                                    </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>

                                @include('panel._assets.paginate')

                            @else
                                <div class="alert alert-danger">
                                    Este usuário não possui perfil
                                </div>
                            @endif
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
    <script>
        function removeProfile(id) {
            if (confirm('Confirma a remoção desse registro?')) {

                var user_id = '{{ $user->id }}';

                var router = '{{ route('administrators.profile.remove',[':user', ':profile']) }}';
                router = router.replace(":user", user_id);
                router = router.replace(":profile", id);

                $.ajax({
                    url: router,
                    type: 'DELETE',
                    success: function (result) {
                        $('#tr-' + id).remove();
                        showMessage('s', 'Removido com sucesso');
                    },
                    error: function (err) {
                        showMessage('w', 'Erro ao remover perfil');
                    }
                });
            }
        }

        function classType(type, reverse = false, text = false) {
            if (reverse && text)
                return type == 1 ? 'Inativo' : 'Ativo';
            else if (text)
                return type == 1 ? 'Ativo' : 'Inativo';
            if (reverse)
                return type == 1 ? 'badge-secondary' : 'badge-success';
            return type == 1 ? 'badge-success' : 'badge-secondary'
        }


        $(".toggle-active").click(function () {


            var id = $(this).attr('data-value');
            var type = $(this).attr('data-type');
            $(this).attr('data-type', type == 1 ? 0 : 1);

            var router = '{{ route('administrators.profile.toggleActive',':id') }}';
            router = router.replace(":id", id);
            $.ajax({
                url: router,
                type: 'POST',
                success: function (result) {
                    $('#status-' + id).removeClass(classType(type));
                    $('#status-' + id).addClass(classType(type, true));
                    $('#status-' + id).text(classType(type, true, true))
                },
                error: function (err) {
                    showMessage('w', 'Erro ao atualizar status');
                }
            });
        });


    </script>

@endsection
