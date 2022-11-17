@extends('public._layouts.master')

@section('content')
    <div class="row" style="margin-top: 200px;">
        <div class="col-md-3"></div>
        @if(!isset($step))
            <div class="col-md-6">
                <form action="{{route('front.resultadoStore')}}" method="post" role="form">
                    @csrf
                    <div class="form-group"><label>Data de Nascimento</label>
                        <input name="nascimento" type="date" class="form-control datepicker">
                    </div>
                    <div>
                        <button class="btn btn-sm btn-success float-right m-t-n-xs" type="submit"><strong>Avançar</strong></button>
                        <a href="{{route('front.renda')}}" class="btn btn-sm btn-warning float-left m-t-n-xs" type="button"><strong>Voltar</strong></a>
                    </div>
                </form>
            </div>
        @endif
    </div>
@endsection

@section('styles')
@endsection

@section('scripts')


@endsection
