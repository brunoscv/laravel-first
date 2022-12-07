@extends('public._layouts.print')

@section('content')


    <!-- Services Start -->
    <div class="container-fluid">
         <div class="container pb-3">
            <p style="color: green">Agendamento de Vistoria realizado com sucesso!</p>
        </div>
        <div class="container pb-3" id="services" style="position: relative; border: 1px #ddd solid">
            <h2 class="text-uppercase text-center mb-5">Comprovante de Agendamento de Vistoria</h2>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2" >
                    <div class="d-flex flex-column justify-content-center px-4 mb-4">
                        <p class="m-0">Nome: {{$data->name}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2" >
                    <div class="d-flex flex-column justify-content-center px-4 mb-4">
                        <p class="m-0">Cidade: {{$data->city}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2" >
                    <div class="d-flex flex-column justify-content-center px-4 mb-4">
                        <p class="m-0">Placa do Veículo: {{$data->license}}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2" >
                    <div class="d-flex flex-column justify-content-center px-4 mb-4">
                        <p class="m-0">Forma de Pagamento: PAGAMENTO BALCÃO</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-2" >
                    <div class="d-flex flex-column justify-content-center px-4 mb-4">
                        <p class="m-0">Data do Agendamento: {{ date('d/m/Y', strtotime($data->created_at))}}</p>
                    </div>
                </div>
            </div>

           
        </div>
        <div class="container pb-3 pt-3" style="justify-content: center; display: flex;" id="noprint">
            <form>
                <input type="button" class="btn btn-primary" value="Imprimir Comprovante" onClick="window.print()"/>
            </form>
        </div>
    </div>
    <!-- Services End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/moment.js') }}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

@section('scripts')
@show
<script>
    $(function () {
        //$('[data-toggle="tooltip"]').tooltip();
        //$('[data-tooltip=tooltip"]').tooltip();
        //$('.image-link').viewbox();
        $('.image-link').viewbox({
            setTitle: true,
            margin: 20,
            resizeDuration: 300,
            openDuration: 200,
            closeDuration: 200,
            closeButton: true,
            navButtons: true,
            closeOnSideClick: true,
            nextOnContentClick: true
        });
    });

    @if (Session::has('message'))
        showMessage('{{ session('messageType') }}', '{{ session('message') }}');
    @endif

    
</script>

@endsection