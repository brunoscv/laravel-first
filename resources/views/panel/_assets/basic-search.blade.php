<div class="row align-items-center">
    <div class="col-md-10">
        <input type="text" id="search" name="search" class="form-control" value="{{ request('search') }}"
           placeholder="{{ isset($_placeholder_) ? $_placeholder_ : 'Digite algo para realizar sua busca' }}" required>
    </div>
    <div class="col-md-2">
        <button type="submit" class="btn btn-block form-control" id="btn_search">
            <i class="fa fa-search"></i> Pesquisar
        </button>
    </div>
</div>