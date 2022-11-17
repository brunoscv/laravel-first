@extends('public._layouts.master')

@section('content')
<form action="{{route('front.resultadoStore')}}" method="post" role="form" name="myForm" id="myForm">
    @csrf
    <div class="row mg-top" id="dados_usuarios">   
        <div class="col-md-6">
            <p class="page-title">O fim da complexidade</p>
        </div>
        <div class="col-md-6 pd-right">
            <div class="form-group"><label>Nome Completo</label>
                <input name="nome" class="form-control" required>
            </div>
            <div class="form-group"><label>Telefone</label>
                <input name="telefone" class="form-control mask_phone_with_ddd" required>
            </div>
            <div class="form-group"><label>Email</label>
                <input name="email" class="form-control" required>
            </div>
            <div>
                <button class="btn btn-sm btn-success float-right m-t-n-xs" type="button" id="ir_renda"><strong>Avançar</strong></button>
            </div>
        </div>
    </div>

    <div class="row mg-top display" id="dados_renda">
        <div class="col-md-6">
            <p class="page-title">Simplifique sua vida.</p>
        </div>
        <div class="col-md-6 pd-right">
            <div class="form-group div-center"><label>Renda Bruta familiar</label>
                <input name="renda" class="form-control mask_money">
            </div>
            <div>
                <button class="btn btn-sm btn-success float-right m-t-n-xs" type="button" id="ir_nascimento"><strong>Avançar</strong></button>
                <button class="btn btn-sm btn-warning float-left m-t-n-xs" type="button" id="voltar_dados"><strong>Voltar</strong></button>
            </div>
        </div>
    </div>

    <div class="row mg-top display" id="dados_nascimento">
        <div class="col-md-6">
            <p class="page-title">Tudo tem um começo.</p>
        </div>
        <div class="col-md-6 pd-right">
            <div class="form-group div-center"><label>Data de Nascimento</label>
                <input name="nascimento" type="input" class="form-control dt-nasc" maxlength="8">
            </div>
            <div>
                <button class="btn btn-sm btn-success float-right m-t-n-xs" type="button" id="ir_resultado"><strong>Avançar</strong></button>
                <button class="btn btn-sm btn-warning float-left m-t-n-xs" type="button" id="voltar_renda"><strong>Voltar</strong></button>
            </div>
        </div>
    </div>
@endsection

@section('styles')
@endsection

@section('scripts')

<script>
    $("body").on('click','#ir_renda',function(){
        if($('input[name=nome]').val() != "" && $('input[name=telefone]').val() != "" && $('input[name=email]').val() != "") {
            $("#dados_usuarios").addClass('display');
            $("#dados_renda").removeClass('display');
        }
    });   
    $("body").on('click','#voltar_dados',function(){
        $("#dados_renda").addClass('display');
        $("#dados_usuarios").removeClass('display');
    });

    $("body").on('click','#ir_nascimento',function(){
        if($('input[name=renda]').val() != "") {
            $("#dados_renda").addClass('display');
            $("#dados_nascimento").removeClass('display');
        }
    });
    $("body").on('click','#voltar_renda',function(){
        $("#dados_nascimento").addClass('display');
        $("#dados_renda").removeClass('display');
    });

    $("body").on('click','#ir_resultado',function(){
        if($('input[name=nascimento]').val() != "") {
            $('#myForm').submit();
        }
    });

    $('.dt-nasc').mask('00/00/0000');
</script>

@endsection
