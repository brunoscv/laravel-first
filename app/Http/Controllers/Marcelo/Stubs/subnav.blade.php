<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-8">
        <h2>{{ $label }}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="{{ route('dashboard') }}">Início</a>
            </li>
            <li class="breadcrumb-item active">
                <strong><a href="{{ route('{{table}}.index', ${{parent_class_var}}->id) }}">{{ $label }}</a></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-4">
        <div class="btn-group pull-right" style="margin-top: 30px;">
            <a class="btn btn-default" href="{{ route('{{table}}.index', ${{parent_class_var}}->id) }}">
                <i class="fa fa-list-ul"></i>
                Listar
            </a>
            @if(Auth::user()->can('update', ${{parent_class_var}}))
                <a class="btn btn-primary" id="ln_adicionar" href="{{ route('{{table}}.create', ${{parent_class_var}}->id) }}">
                    <i class="fa fa-plus-circle"></i> Novo
                </a>
            @endif
        </div>
    </div>
</div>
