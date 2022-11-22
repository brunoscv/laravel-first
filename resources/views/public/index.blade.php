@extends('public._layouts.master')

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" alt="Brand" src="{{asset('assets/img/car1.jpg')}}">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">Vistoria Veicular</h1>
                            <h2 class="text-white mb-md-3 font-weight-medium">Você sabe o que é vistoria veicular? Nada mais é do que uma avaliação realizada nos veículos a fim de liberar 
                                sua circulação pelo país. Esse processo garante que o automóvel esteja em situação regular aos olhos dos órgãos fiscalizadores, 
                                fornecendo mais segurança no trânsito. </h2>
                            <h2 class="text-white mb-md-3 font-weight-medium">Faça agora a sua vistoria veicular pelo Whatsapp <span style="font-size: 3rem !important">(86) 99992-5618</span></h2>
                            <a href="#schedulings" class="btn btn-primary py-md-3 px-md-5 mt-2"><i class="fa fa-calendar btn-icon"></i><?= strtoupper('Agendar Vistoria');?></a>
                            <a href="https://api.whatsapp.com/send?phone=5586999925618&text=Oi" target="_blank" class="btn btn-whatsapp py-md-3 px-md-5 mt-2"><i class="fa fa-whatsapp btn-icon" style="font-size:1.3rem"></i><?= strtoupper('Agendar por Whatsapp');?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" alt="Brand" src="{{asset('assets/img/car2.jpg')}}">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">Vistoria Veicular</h1>
                            <h2 class="text-white mb-md-3 font-weight-medium">Outro ponto importante são os débitos, como IPVA, licenciamento e multas. Tudo tem de estar em dia. Se você encontrar alguma pendência, 
                                é bom pagar o quanto antes e regularizar a situação.</h2>
                                <h2 class="text-white mb-md-3 font-weight-medium">Faça agora a sua vistoria veicular pelo Whatsapp <span style="font-size: 3rem !important">(86) 99992-5618</span></h2>
                            <a href="#schedulings" class="btn btn-primary py-md-3 px-md-5 mt-2"><i class="fa fa-calendar btn-icon"></i><?= strtoupper('Agendar Vistoria');?></a>
                            <a href="https://api.whatsapp.com/send?phone=5586999925618&text=Oi" target="_blank" class="btn btn-whatsapp py-md-3 px-md-5 mt-2"><i class="fa fa-whatsapp btn-icon" style="font-size:1.3rem"></i><?= strtoupper('Agendar por Whatsapp');?></a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    

    <!-- Services Start -->
    <div class="container-fluid">
        <div class="container pb-3" id="services">
            <h1 class="display-4 text-uppercase text-center mb-5">Serviços</h1>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-body mt-n2 m-0">01</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Vistoria de Transferência de Pequeno Porte</h4>
                        <p class="m-0">R$ 131,40</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item active d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-white mt-n2 m-0">02</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Vistoria de Transferência de Médio Porte</h4>
                        <p class="m-0">R$ 131,40</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                <i class="fa fa-2x fa-car text-secondary"></i>
                            </div>
                            <h1 class="display-2 text-body mt-n2 m-0">03</h1>
                        </div>
                        <h4 class="text-uppercase mb-3">Vistoria de Transferência de Grande Porte</h4>
                        <p class="m-0 text-body">R$ 131,40</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    <!-- Scheduling Start -->
    <div class="container-fluid">
        <div class="container pb-3" id="schedulings">
            <h1 class="display-4 text-uppercase text-center mb-5">Agendar Vistoria</h1>
            <div class="row">
                <div class="col-lg-12 mb-2">
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form method="POST" action="{{ route('front.surveyCreate') }}" id="frm_save">
                            @csrf
                            <div class="row">
                                <div class="col-6 form-group">
                                    <select class="custom-select px-4 mb-3  @error('service') is-invalid @enderror" style="height: 50px;" name="service" required="required">
                                        <option selected>Serviço*</option>
                                        <option value="VISTORIA VEICULAR - R$ 131,40" @if (old('service') == 'VISTORIA VEICULAR - R$ 131,40') selected="selected" @endif >VISTORIA VEICULAR - R$ 131,40</option>
                                    </select>
                                    @error('service')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                                <div class="col-6 form-group">
                                    <select class="custom-select px-4 mb-3  @error('city') is-invalid @enderror" style="height: 50px;" name="city" required="required">
                                        <option selected>Cidade*</option>
                                        <option value="ALTOS" @if (old('city') == 'ALTOS') selected="selected" @endif>ALTOS</option>
                                        <option value="CAMPO MAIOR" @if (old('city') == 'CAMPO MAIOR') selected="selected" @endif>CAMPO MAIOR</option>
                                        <option value="JOSÉ DE FREITAS"  @if (old('city') == 'JOSÉ DE FREITAS') selected="selected" @endif>JOSÉ DE FREITAS</option>
                                        <option value="PEDRO II" @if (old('city') == 'PEDRO II') selected="selected" @endif>PEDRO II</option>
                                        <option value="TERESINA"  @if (old('city') == 'TERESINA') selected="selected" @endif>TERESINA</option>
                                        <option value="UNIÃO"  @if (old('city') == 'UNIÃO') selected="selected" @endif>UNIÃO</option>
                                    </select>
                                    @error('city')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4 form-group">
                                    <input type="text" name="date" class="form-control p-4  @error('date') is-invalid @enderror datepicker" value="{{ old('date') }}" placeholder="Data*" required="required">
                                    @error('date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                                <div class="col-4 form-group">
                                    <select class="custom-select px-4 mb-3 @error('hour') is-invalid @enderror" style="height: 50px;" name="hour" required="required">
                                        <option selected>Hora*</option>
                                        <option value="08:00" @if (old('hour') == '08:00') selected="selected" @endif >08:00</option>
                                        <option value="08:10" @if (old('hour') == '08:10') selected="selected" @endif >08:10</option>
                                        <option value="08:20" @if (old('hour') == '08:20') selected="selected" @endif >08:20</option>
                                        <option value="08:30" @if (old('hour') == '08:30') selected="selected" @endif >08:30</option>
                                        <option value="08:40" @if (old('hour') == '08:40') selected="selected" @endif >08:40</option>
                                        <option value="08:50" @if (old('hour') == '08:50') selected="selected" @endif >08:50</option>
                                        <option value="09:00" @if (old('hour') == '09:00') selected="selected" @endif >09:00</option>
                                        <option value="09:10" @if (old('hour') == '09:10') selected="selected" @endif >09:10</option>
                                        <option value="09:20" @if (old('hour') == '09:20') selected="selected" @endif >09:20</option>
                                        <option value="09:30" @if (old('hour') == '09:30') selected="selected" @endif >09:30</option>
                                        <option value="09:40" @if (old('hour') == '09:40') selected="selected" @endif >09:40</option>
                                        <option value="09:50" @if (old('hour') == '09:50') selected="selected" @endif >09:50</option>
                                        <option value="10:00" @if (old('hour') == '10:00') selected="selected" @endif >10:00</option>
                                        <option value="10:10" @if (old('hour') == '10:10') selected="selected" @endif >10:10</option>
                                        <option value="10:20" @if (old('hour') == '10:20') selected="selected" @endif >10:20</option>
                                        <option value="10:30" @if (old('hour') == '10:30') selected="selected" @endif >10:30</option>
                                        <option value="10:40" @if (old('hour') == '10:40') selected="selected" @endif >10:40</option>
                                        <option value="10:50" @if (old('hour') == '10:50') selected="selected" @endif >10:50</option>
                                        <option value="11:00" @if (old('hour') == '11:00') selected="selected" @endif >11:00</option>
                                        <option value="11:10" @if (old('hour') == '11:10') selected="selected" @endif >11:10</option>
                                        <option value="11:20" @if (old('hour') == '11:20') selected="selected" @endif >11:20</option>
                                        <option value="11:30" @if (old('hour') == '11:30') selected="selected" @endif >11:30</option>
                                        <option value="11:40" @if (old('hour') == '11:40') selected="selected" @endif >11:40</option>
                                        <option value="11:50" @if (old('hour') == '11:50') selected="selected" @endif >11:50</option>
                                        <option value="12:00" @if (old('hour') == '12:00') selected="selected" @endif >12:00</option>
                                        <option value="12:10" @if (old('hour') == '12:10') selected="selected" @endif >12:10</option>
                                        <option value="12:20" @if (old('hour') == '12:20') selected="selected" @endif >12:20</option>
                                        <option value="12:30" @if (old('hour') == '12:30') selected="selected" @endif >12:30</option>
                                        <option value="12:40" @if (old('hour') == '12:40') selected="selected" @endif >12:40</option>
                                        <option value="12:50" @if (old('hour') == '12:50') selected="selected" @endif >12:50</option>
                                        <option value="13:00" @if (old('hour') == '13:00') selected="selected" @endif >13:00</option>
                                        <option value="13:10" @if (old('hour') == '13:10') selected="selected" @endif >13:10</option>
                                        <option value="13:20" @if (old('hour') == '13:20') selected="selected" @endif >13:20</option>
                                        <option value="13:30" @if (old('hour') == '13:30') selected="selected" @endif >13:30</option>
                                        <option value="13:40" @if (old('hour') == '13:40') selected="selected" @endif >13:40</option>
                                        <option value="13:50" @if (old('hour') == '13:50') selected="selected" @endif >13:50</option>
                                        <option value="14:00" @if (old('hour') == '14:00') selected="selected" @endif >14:00</option>
                                        <option value="14:10" @if (old('hour') == '14:10') selected="selected" @endif >14:10</option>
                                        <option value="14:20" @if (old('hour') == '14:20') selected="selected" @endif >14:20</option>
                                        <option value="14:30" @if (old('hour') == '14:30') selected="selected" @endif >14:30</option>
                                        <option value="14:40" @if (old('hour') == '14:40') selected="selected" @endif >14:40</option>
                                        <option value="14:50" @if (old('hour') == '14:50') selected="selected" @endif >14:50</option>
                                        <option value="15:00" @if (old('hour') == '15:00') selected="selected" @endif >15:00</option>
                                        <option value="15:10" @if (old('hour') == '15:10') selected="selected" @endif >15:10</option>
                                        <option value="15:20" @if (old('hour') == '15:20') selected="selected" @endif >15:20</option>
                                        <option value="15:30" @if (old('hour') == '15:30') selected="selected" @endif >15:30</option>
                                        <option value="15:40" @if (old('hour') == '15:40') selected="selected" @endif >15:40</option>
                                        <option value="15:50" @if (old('hour') == '15:50') selected="selected" @endif >15:50</option>
                                        <option value="16:00" @if (old('hour') == '16:00') selected="selected" @endif >16:00</option>
                                        <option value="16:10" @if (old('hour') == '16:10') selected="selected" @endif >16:10</option>
                                        <option value="16:20" @if (old('hour') == '16:20') selected="selected" @endif >16:20</option>
                                        <option value="16:30" @if (old('hour') == '16:30') selected="selected" @endif >16:30</option>
                                        <option value="16:40" @if (old('hour') == '16:40') selected="selected" @endif >16:40</option>
                                        <option value="16:50" @if (old('hour') == '16:50') selected="selected" @endif >16:50</option>
                                        <option value="17:00" @if (old('hour') == '17:00') selected="selected" @endif >17:00</option>
                                        <option value="17:10" @if (old('hour') == '17:10') selected="selected" @endif >17:10</option>
                                        <option value="17:20" @if (old('hour') == '17:20') selected="selected" @endif >17:20</option>
                                        <option value="17:30" @if (old('hour') == '17:30') selected="selected" @endif >17:30</option>
                                        <option value="17:40" @if (old('hour') == '17:40') selected="selected" @endif >17:40</option>
                                        <option value="17:50" @if (old('hour') == '17:50') selected="selected" @endif >17:50</option>
                                    </select>
                                    @error('hour')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                                <div class="col-4 form-group">
                                    <select class="custom-select px-4 mb-3  @error('payment') is-invalid @enderror" style="height: 50px;" name="payment" required="required">
                                        <option selected>Pagamento*</option>
                                        <option value="PAGAMENTO BALC&Atilde;O" @if (old('payment') == 'PAGAMENTO BALCÃO') selected="selected" @endif >PAGAMENTO BALC&Atilde;O</option>
                                    </select>
                                    @error('payment')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" name="name" class="form-control p-4  @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Nome*">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                                <div class="col-3 form-group">
                                    <input type="text" name="cpf" class="form-control mask_cpf p-4 @error('cpf') is-invalid @enderror" value="{{ old('cpf') }}" placeholder="CPF">
                                    @error('cpf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                                <div class="col-3 form-group">
                                    <input type="text" name="cnpj" class="form-control mask_cnpj p-4  @error('cnpj') is-invalid @enderror" value="{{ old('cnpj') }}" placeholder="CNPJ">
                                    @error('cnpj')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3 form-group">
                                    <input type="text" name="phone" class="form-control mask_phone_with_ddd p-4  @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Telefone*" required="required">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                                <div class="col-9 form-group">
                                    <input type="email" name="email" class="form-control p-4  @error('email') is-invalid @enderror" placeholder="Email*" value="{{ old('email') }}" required="required">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit"><?= strtoupper('Agendar');?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary py-5 px-sm-3 px-md-5" style="margin-top: 90px;">
        <div class="row pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4"></h4>
                    <div class="col-12 px-1 mb-2">
                        <a href=""><img class="w-100" alt="Brand" src="{{asset('assets/img/logodois.png')}}"></a>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Endereço</h4>
                <p class="mb-2"><i class="fa fa-map-marker text-white mr-3"></i>R. Jacinto Rufino 2211 - Beira Rio</p>
                <p class="mb-2"><i class="fa fa-map text-white mr-3"></i>Grande Dirceu</p>
                <p class="mb-2"><i class="fa fa-exclamation text-white mr-3"></i>(Próximo ao Supermercado Assaí)</p>
                <p class="mb-2"><i class="fa fa-phone text-white mr-3"></i>(86) 99992-5618</p>
                <p><i class="fa fa-envelope text-white mr-3"></i>suportetop01@hotmail.com</p>
                <h6 class="text-uppercase text-white py-2">Sigam-nos!</h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-dark btn-lg-square" href="https://instagram.com/dirceu_vistoria"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Home</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Serviços</a>
                    <a class="text-body mb-2" href="#"><i class="fa fa-angle-right text-white mr-2"></i>Agendar</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <h4 class="text-uppercase text-light mb-4">Galeria</h4>
                <div id="lightgallery">
                    <div class="row mx-n1">
                        <div class="col-4 px-1 mb-2">
                            <a href="{{asset('assets/img/foto1.jpeg')}}" class="image-link"><img class="w-100" alt="Brand" src="{{asset('assets/img/foto1.jpeg')}}"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="{{asset('assets/img/foto2.jpeg')}}" class="image-link"><img class="w-100" alt="Brand" src="{{asset('assets/img/foto2.jpeg')}}"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="{{asset('assets/img/foto3.jpeg')}}" class="image-link"><img class="w-100" alt="Brand" src="{{asset('assets/img/foto3.jpeg')}}"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="{{asset('assets/img/foto4.jpeg')}}" class="image-link"><img class="w-100" alt="Brand" src="{{asset('assets/img/foto4.jpeg')}}"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="{{asset('assets/img/foto5.jpeg')}}" class="image-link"><img class="w-100" alt="Brand" src="{{asset('assets/img/foto5.jpeg')}}"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="{{asset('assets/img/foto6.jpeg')}}" class="image-link"><img class="w-100" alt="Brand" src="{{asset('assets/img/foto6.jpeg')}}"></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
        <p class="mb-2 text-center text-body link"><a href="#">Dirceu Vistorias <?= date('Y') ?></a>&copy; Todos os direitos reservados.</p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="display: inline; margin: 0;"><i class="fa fa-angle-double-up" style="font-size: 2rem;font-weight: 700;line-height: 2rem;}"></i></a>
    <!--<a href="https://wa.me/5586999925618?text=Oi!" class="link-whatsapp" target="_blank"><i style="margin-top:16px" class="fa fa-whatsapp"></i></a> -->

    <!-- Whatsapp plugin -->
    <script>window.rwbp={email:'suportetop01@hotmail.com',phone:'+5586999925618',message:'Olá, vamos agendar sua vistoria?',lang:'pt-BR'}</script><script defer async src='https://duz4dqsaqembt.cloudfront.net/client/whats.js'></script>
    
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
