<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ $label }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Início</a>
            </li>
            <li class="breadcrumb-item active">
                <strong><a href="{{ route('planos.index') }}">{{ $label }}</a></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4">
        <div class="btn-group pull-right" style="margin-top: 30px;">
            <a class="btn btn-default" href="{{ route('planos.index') }}">
                <i class="fa fa-list-ul"></i>
                Listar
            </a>
            @if(Auth::user()->can('create', \App\Models\Plano::class))
                <a class="btn btn-primary" id="ln_adicionar" href="{{ route('planos.create') }}">
                    <i class="fa fa-plus-circle"></i> Novo
                </a>
            @endif
        </div>
    </div>
</div>
