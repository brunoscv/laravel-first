<?php $__env->startSection('content'); ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/car1.jpg')); ?>">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <p class="text-white text-uppercase mb-md-3 font-weight-medium font-3">Dirceu vistorias</p>
                            <p class="text-white mb-md-3 font-weight-medium font-1">Somos uma empresa de inspeção veicular credenciada pelo DETRAN a fins de vistoriar veículos que rodam pelo Brasil .Temos profissionais com responsabilidade e garantimos nossos serviços. </p>
                            <p class="text-white mb-md-3 font-weight-medium font-1">Agende sua vistoria pelo nosso WhatsApp <span class="font-3"><a class="link-telefone" href="https://wa.me/5586999925618?text=Oi!"> (86) 99992-5618<a></span></p>
                            <a href="#schedulings" class="btn btn-primary py-md-3 px-md-5 mt-2"><i class="fa fa-calendar btn-icon font-06"></i><span class="font-06"><?= strtoupper('Agendar Vistoria');?></span></a>
                            <a href="https://wa.me/5586999925618?text=Oi!" target="_blank" class="btn btn-whatsapp py-md-3 px-md-5 mt-2"><i class="fa fa-whatsapp btn-icon font-06"></i><span class="font-06"><?= strtoupper('Agendar por Whatsapp');?></span></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/car2.jpg')); ?>">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <p class="text-white text-uppercase mb-md-3 font-weight-medium font-3">Dirceu vistorias</p>
                            <p class="text-white mb-md-3 font-weight-medium font-1">Você sabe o que é vistoria veicular? Nada mais é do que uma avaliação realizada nos veículos a fim de liberar 
                                sua circulação pelo país.</p>
                            <p class="text-white mb-md-3 font-weight-medium font-1">Agende sua vistoria pelo nosso WhatsApp <span class="font-3"><a class="link-telefone" href="https://wa.me/5586999925618?text=Oi!" >(86) 99992-5618</a></span></p>
                            <a href="#schedulings" class="btn btn-primary py-md-3 px-md-5 mt-2"><i class="fa fa-calendar btn-icon font-06"></i><span class="font-06"><?= strtoupper('Agendar Vistoria');?></span></a>
                            <a href="https://wa.me/5586999925618?text=Oi!" target="_blank" class="btn btn-whatsapp py-md-3 px-md-5 mt-2"><i class="fa fa-whatsapp btn-icon font-06"></i><span class="font-06"><?= strtoupper('Agendar por Whatsapp');?></span></a>
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
                    <?php if(session()->has('message')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-12 mb-2">
                <p style="color:red !important"> O documento que será apresentado para a vistoria não precisa ser necessariamente o documento vigente do proprietário do veículo.</p>
                </div>
                <div class="col-lg-12 mb-2">
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form method="POST" action="<?php echo e(route('front.surveyCreate')); ?>" id="frm_save">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-xs-12 form-group">
                                    <label for="service">Serviço</label>
                                    <select class="custom-select px-4 mb-3  <?php $__errorArgs = ['service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="service" required="required">
                                        <option value="VISTORIA VEICULAR - R$ 131,40" <?php if(old('service') == 'VISTORIA VEICULAR - R$ 131,40'): ?> selected="selected" <?php endif; ?> >VISTORIA VEICULAR - R$ 131,40</option>
                                    </select>
                                    <?php $__errorArgs = ['service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                </div>
                            </div>
                            <div class="row"> 
                                <div class="col-lg-5 col-sm-12 col-xs-12 col-md-5 form-group">
                                    <label for="service">Nome(*)</label>
                                    <input type="text" name="name" class="form-control p-4  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" placeholder="" required="required">
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                </div>

                                <div class="col-lg-4 col-sm-12 col-xs-12 col-md-4 form-group">
                                <label for="service">Cidade(*)</label>
                                    <select class="custom-select px-4 mb-3  <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="city" required="required">
                                        <option value="TERESINA"  <?php if(old('city') == 'TERESINA'): ?> selected="selected" <?php endif; ?>>TERESINA</option>
                                        <option value="ALTOS"  <?php if(old('city') == 'ALTOS'): ?> selected="selected" <?php endif; ?>>ALTOS</option>
                                        <option value="CAMPO MAIOR"  <?php if(old('city') == 'CAMPO MAIOR'): ?> selected="selected" <?php endif; ?>>CAMPO MAIOR</option>
                                        <option value="UNIÃO"  <?php if(old('city') == 'UNIÃO'): ?> selected="selected" <?php endif; ?>>UNIÃO</option>
                                        <option value="AMARANTE"  <?php if(old('city') == 'AMARANTE'): ?> selected="selected" <?php endif; ?>>AMARANTE</option>
                                        <option value="JOSÉ DE FREITAS"  <?php if(old('city') == 'JOSÉ DE FREITAS'): ?> selected="selected" <?php endif; ?>>JOSÉ DE FREITAS</option>
                                        <option value="PEDRO II"  <?php if(old('city') == 'PEDRO II'): ?> selected="selected" <?php endif; ?>>PEDRO II</option>
                                        <option value="PARNAIBA"  <?php if(old('city') == 'PARNAIBA'): ?> selected="selected" <?php endif; ?>>PARNAIBA</option>
                                        <option value="PIRACURUCA"  <?php if(old('city') == 'PIRACURUCA'): ?> selected="selected" <?php endif; ?>>PIRACURUCA</option>
                                        <option value="COCAL"  <?php if(old('city') == 'COCAL'): ?> selected="selected" <?php endif; ?>>COCAL</option>
                                        <option value="PIRIPIRI"  <?php if(old('city') == 'PIRIPIRI'): ?> selected="selected" <?php endif; ?>>PIRIPIRI</option>
                                        <option value="LUZILANDIA"  <?php if(old('city') == 'LUZILANDIA'): ?> selected="selected" <?php endif; ?>>LUZILANDIA</option>
                                        <option value="BARRAS"  <?php if(old('city') == 'BARRAS'): ?> selected="selected" <?php endif; ?>>BARRAS</option>
                                        <option value="BARRO DURO"  <?php if(old('city') == 'BARRO DURO'): ?> selected="selected" <?php endif; ?>>BARRO DURO</option>
                                        <option value="ESPERANTINA"  <?php if(old('city') == 'ESPERANTINA'): ?> selected="selected" <?php endif; ?>>ESPERANTINA</option>
                                        <option value="AGUA BRANCA"  <?php if(old('city') == 'AGUA BRANCA'): ?> selected="selected" <?php endif; ?>>AGUA BRANCA</option>
                                        <option value="CASTELO DO PIAUI"  <?php if(old('city') == 'CASTELO DO PIAUI'): ?> selected="selected" <?php endif; ?>>CASTELO DO PIAUI</option>
                                        <option value="REGENERAÇÃO"  <?php if(old('city') == 'REGENERAÇÃO'): ?> selected="selected" <?php endif; ?>>REGENERAÇÃO</option>
                                        <option value="VALENÇA DO PIAUI"  <?php if(old('city') == 'VALENÇA DO PIAUI'): ?> selected="selected" <?php endif; ?>>VALENÇA DO PIAUI</option>
                                        <option value="INHUMA"  <?php if(old('city') == 'INHUMA'): ?> selected="selected" <?php endif; ?>>INHUMA</option>
                                        <option value="ELESBAO VELOSO"  <?php if(old('city') == 'ELESBAO VELOSO'): ?> selected="selected" <?php endif; ?>>ELESBAO VELOSO</option>
                                        <option value="OEIRAS"  <?php if(old('city') == 'OEIRAS'): ?> selected="selected" <?php endif; ?>>OEIRAS</option>
                                        <option value="PICOS"  <?php if(old('city') == 'PICOS'): ?> selected="selected" <?php endif; ?>>PICOS</option>
                                        <option value="ITAINÓPOLINS"  <?php if(old('city') == 'ITAINÓPOLINS'): ?> selected="selected" <?php endif; ?>>ITAINÓPOLINS</option>
                                        <option value="MARCOLANDIA"  <?php if(old('city') == 'MARCOLANDIA'): ?> selected="selected" <?php endif; ?>>MARCOLANDIA</option>
                                        <option value="JAICÓS"  <?php if(old('city') == 'JAICÓS'): ?> selected="selected" <?php endif; ?>>JAICÓS</option>
                                        <option value="SIMOES"  <?php if(old('city') == 'SIMOES'): ?> selected="selected" <?php endif; ?>>SIMOES</option>
                                        <option value="SIMPLICIO MENDES"  <?php if(old('city') == 'SIMPLICIO MENDES'): ?> selected="selected" <?php endif; ?>>SIMPLICIO MENDES</option>
                                        <option value="PADRE MARCOS"  <?php if(old('city') == 'PADRE MARCOS'): ?> selected="selected" <?php endif; ?>>PADRE MARCOS</option>
                                        <option value="FRONTEIRAS"  <?php if(old('city') == 'FRONTEIRAS'): ?> selected="selected" <?php endif; ?>>FRONTEIRAS</option>
                                        <option value="PAULISTANA"  <?php if(old('city') == 'PAULISTANA'): ?> selected="selected" <?php endif; ?>>PAULISTANA</option>
                                        <option value="BOM JESUS"  <?php if(old('city') == 'BOM JESUS'): ?> selected="selected" <?php endif; ?>>BOM JESUS</option>
                                        <option value="CANTO DO BURITI"  <?php if(old('city') == 'CANTO DO BURITI'): ?> selected="selected" <?php endif; ?>>CANTO DO BURITI</option>\
                                        <option value="CURIMATAR"  <?php if(old('city') == 'CURIMATAR'): ?> selected="selected" <?php endif; ?>>CURIMATAR</option>
                                        <option value="CORRENTE"  <?php if(old('city') == 'CORRENTE'): ?> selected="selected" <?php endif; ?>>CORRENTE</option>
                                        <option value="ITAUEIRA"  <?php if(old('city') == 'ITAUEIRA'): ?> selected="selected" <?php endif; ?>>ITAUEIRA</option>
                                        <option value="URUCUÍ"  <?php if(old('city') == 'URUCUÍ'): ?> selected="selected" <?php endif; ?>>URUCUÍ</option>
                                        <option value="SÃO JOÃO DO PIAUÍ"  <?php if(old('city') == 'SÃO JOÃO DO PIAUÍ'): ?> selected="selected" <?php endif; ?>>SÃO JOÃO DO PIAUÍ</option>
                                        <option value="GUADALUPE"  <?php if(old('city') == 'GUADALUPE'): ?> selected="selected" <?php endif; ?>>GUADALUPE</option>
                                        <option value="S R NONATO"  <?php if(old('city') == 'S R NONATO'): ?> selected="selected" <?php endif; ?>>S R NONATO</option>
                                        <option value="FLORIANO"  <?php if(old('city') == 'FLORIANO'): ?> selected="selected" <?php endif; ?>>FLORIANO</option>
                                    </select>
                                    <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="col-lg-3 col-sm-12 col-xs-12 col-md-5 form-group">
                                    <label for="service">Placa do Veículo(*)</label>
                                    <input type="text" name="license" class="form-control p-4  <?php $__errorArgs = ['license'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('license')); ?>" placeholder="" maxlength="10">
                                    <?php $__errorArgs = ['license'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-sm-12 col-xs-12 form-group">
                                    <label for="service">Data para Vistoria(*)</label>
                                    <input type="text" name="date" class="form-control p-4  <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> datepicker" value="<?php echo e(old('date')); ?>" placeholder="" required="required">
                                    <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                </div>
                                <div class="col-lg-4  col-sm-12 col-xs-12 form-group">
                                    <label for="service">Horário para Vistoria(*)</label>
                                    <select class="custom-select px-4 mb-3 <?php $__errorArgs = ['hour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="hour" required="required">
                                        <option value="08:00" <?php if(old('hour') == '08:00'): ?> selected="selected" <?php endif; ?> >08:00</option>
                                        <option value="08:10" <?php if(old('hour') == '08:10'): ?> selected="selected" <?php endif; ?> >08:10</option>
                                        <option value="08:20" <?php if(old('hour') == '08:20'): ?> selected="selected" <?php endif; ?> >08:20</option>
                                        <option value="08:30" <?php if(old('hour') == '08:30'): ?> selected="selected" <?php endif; ?> >08:30</option>
                                        <option value="08:40" <?php if(old('hour') == '08:40'): ?> selected="selected" <?php endif; ?> >08:40</option>
                                        <option value="08:50" <?php if(old('hour') == '08:50'): ?> selected="selected" <?php endif; ?> >08:50</option>
                                        <option value="09:00" <?php if(old('hour') == '09:00'): ?> selected="selected" <?php endif; ?> >09:00</option>
                                        <option value="09:10" <?php if(old('hour') == '09:10'): ?> selected="selected" <?php endif; ?> >09:10</option>
                                        <option value="09:20" <?php if(old('hour') == '09:20'): ?> selected="selected" <?php endif; ?> >09:20</option>
                                        <option value="09:30" <?php if(old('hour') == '09:30'): ?> selected="selected" <?php endif; ?> >09:30</option>
                                        <option value="09:40" <?php if(old('hour') == '09:40'): ?> selected="selected" <?php endif; ?> >09:40</option>
                                        <option value="09:50" <?php if(old('hour') == '09:50'): ?> selected="selected" <?php endif; ?> >09:50</option>
                                        <option value="10:00" <?php if(old('hour') == '10:00'): ?> selected="selected" <?php endif; ?> >10:00</option>
                                        <option value="10:10" <?php if(old('hour') == '10:10'): ?> selected="selected" <?php endif; ?> >10:10</option>
                                        <option value="10:20" <?php if(old('hour') == '10:20'): ?> selected="selected" <?php endif; ?> >10:20</option>
                                        <option value="10:30" <?php if(old('hour') == '10:30'): ?> selected="selected" <?php endif; ?> >10:30</option>
                                        <option value="10:40" <?php if(old('hour') == '10:40'): ?> selected="selected" <?php endif; ?> >10:40</option>
                                        <option value="10:50" <?php if(old('hour') == '10:50'): ?> selected="selected" <?php endif; ?> >10:50</option>
                                        <option value="11:00" <?php if(old('hour') == '11:00'): ?> selected="selected" <?php endif; ?> >11:00</option>
                                        <option value="11:10" <?php if(old('hour') == '11:10'): ?> selected="selected" <?php endif; ?> >11:10</option>
                                        <option value="11:20" <?php if(old('hour') == '11:20'): ?> selected="selected" <?php endif; ?> >11:20</option>
                                        <option value="11:30" <?php if(old('hour') == '11:30'): ?> selected="selected" <?php endif; ?> >11:30</option>
                                        <option value="11:40" <?php if(old('hour') == '11:40'): ?> selected="selected" <?php endif; ?> >11:40</option>
                                        <option value="11:50" <?php if(old('hour') == '11:50'): ?> selected="selected" <?php endif; ?> >11:50</option>
                                        <option value="12:00" <?php if(old('hour') == '12:00'): ?> selected="selected" <?php endif; ?> >12:00</option>
                                        <option value="12:10" <?php if(old('hour') == '12:10'): ?> selected="selected" <?php endif; ?> >12:10</option>
                                        <option value="12:20" <?php if(old('hour') == '12:20'): ?> selected="selected" <?php endif; ?> >12:20</option>
                                        <option value="12:30" <?php if(old('hour') == '12:30'): ?> selected="selected" <?php endif; ?> >12:30</option>
                                        <option value="12:40" <?php if(old('hour') == '12:40'): ?> selected="selected" <?php endif; ?> >12:40</option>
                                        <option value="12:50" <?php if(old('hour') == '12:50'): ?> selected="selected" <?php endif; ?> >12:50</option>
                                        <option value="13:00" <?php if(old('hour') == '13:00'): ?> selected="selected" <?php endif; ?> >13:00</option>
                                        <option value="13:10" <?php if(old('hour') == '13:10'): ?> selected="selected" <?php endif; ?> >13:10</option>
                                        <option value="13:20" <?php if(old('hour') == '13:20'): ?> selected="selected" <?php endif; ?> >13:20</option>
                                        <option value="13:30" <?php if(old('hour') == '13:30'): ?> selected="selected" <?php endif; ?> >13:30</option>
                                        <option value="13:40" <?php if(old('hour') == '13:40'): ?> selected="selected" <?php endif; ?> >13:40</option>
                                        <option value="13:50" <?php if(old('hour') == '13:50'): ?> selected="selected" <?php endif; ?> >13:50</option>
                                        <option value="14:00" <?php if(old('hour') == '14:00'): ?> selected="selected" <?php endif; ?> >14:00</option>
                                        <option value="14:10" <?php if(old('hour') == '14:10'): ?> selected="selected" <?php endif; ?> >14:10</option>
                                        <option value="14:20" <?php if(old('hour') == '14:20'): ?> selected="selected" <?php endif; ?> >14:20</option>
                                        <option value="14:30" <?php if(old('hour') == '14:30'): ?> selected="selected" <?php endif; ?> >14:30</option>
                                        <option value="14:40" <?php if(old('hour') == '14:40'): ?> selected="selected" <?php endif; ?> >14:40</option>
                                        <option value="14:50" <?php if(old('hour') == '14:50'): ?> selected="selected" <?php endif; ?> >14:50</option>
                                        <option value="15:00" <?php if(old('hour') == '15:00'): ?> selected="selected" <?php endif; ?> >15:00</option>
                                        <option value="15:10" <?php if(old('hour') == '15:10'): ?> selected="selected" <?php endif; ?> >15:10</option>
                                        <option value="15:20" <?php if(old('hour') == '15:20'): ?> selected="selected" <?php endif; ?> >15:20</option>
                                        <option value="15:30" <?php if(old('hour') == '15:30'): ?> selected="selected" <?php endif; ?> >15:30</option>
                                        <option value="15:40" <?php if(old('hour') == '15:40'): ?> selected="selected" <?php endif; ?> >15:40</option>
                                        <option value="15:50" <?php if(old('hour') == '15:50'): ?> selected="selected" <?php endif; ?> >15:50</option>
                                        <option value="16:00" <?php if(old('hour') == '16:00'): ?> selected="selected" <?php endif; ?> >16:00</option>
                                        <option value="16:10" <?php if(old('hour') == '16:10'): ?> selected="selected" <?php endif; ?> >16:10</option>
                                        <option value="16:20" <?php if(old('hour') == '16:20'): ?> selected="selected" <?php endif; ?> >16:20</option>
                                        <option value="16:30" <?php if(old('hour') == '16:30'): ?> selected="selected" <?php endif; ?> >16:30</option>
                                        <option value="16:40" <?php if(old('hour') == '16:40'): ?> selected="selected" <?php endif; ?> >16:40</option>
                                        <option value="16:50" <?php if(old('hour') == '16:50'): ?> selected="selected" <?php endif; ?> >16:50</option>
                                        <option value="17:00" <?php if(old('hour') == '17:00'): ?> selected="selected" <?php endif; ?> >17:00</option>
                                        <option value="17:10" <?php if(old('hour') == '17:10'): ?> selected="selected" <?php endif; ?> >17:10</option>
                                        <option value="17:20" <?php if(old('hour') == '17:20'): ?> selected="selected" <?php endif; ?> >17:20</option>
                                        <option value="17:30" <?php if(old('hour') == '17:30'): ?> selected="selected" <?php endif; ?> >17:30</option>
                                        <option value="17:40" <?php if(old('hour') == '17:40'): ?> selected="selected" <?php endif; ?> >17:40</option>
                                        <option value="17:50" <?php if(old('hour') == '17:50'): ?> selected="selected" <?php endif; ?> >17:50</option>
                                    </select>
                                    <?php $__errorArgs = ['hour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                </div>
                                <div class="col-lg-4 col-sm-12 col-xs-12 form-group">
                                    <label for="service">Forma de Pagamento(*)</label>
                                    <select class="custom-select px-4 mb-3  <?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="payment" required="required">
                                        <option value="BOLETO" <?php if(old('payment') == 'BOLETO'): ?> selected="selected" <?php endif; ?> >BOLETO</option>
                                        <option value="PAGAMENTO BALC&Atilde;O" <?php if(old('payment') == 'PAGAMENTO BALCÃO'): ?> selected="selected" <?php endif; ?> >PAGAMENTO BALC&Atilde;O</option>
                                    </select>
                                    <?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-2 col-sm-12 col-xs-12 form-group">
                                    <label for="service">CPF(*)</label>
                                    <input type="text" name="cpf" class="form-control p-4 <?php $__errorArgs = ['cpf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('cpf')); ?>" placeholder="" maxlength="11">
                                    <span class="" style="width: 100%; margin-top: .25rem; font-size: 80%; color: #e3342f;" role="alert">
                                        <strong>**Apenas números**</strong>
                                    </span>
                                    <?php $__errorArgs = ['cpf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                </div>
                                <div class="col-lg-3 col-sm-12 col-xs-12 form-group">
                                    <label for="service">CNPJ</label>
                                    <input type="text" name="cnpj" class="form-control mask_cnpj p-4  <?php $__errorArgs = ['cnpj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('cnpj')); ?>" placeholder="">
                                    <?php $__errorArgs = ['cnpj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                </div>
                                <div class="col-lg-3 col-sm-12 col-xs-12 form-group">
                                    <label for="service">Telefone(*)</label>
                                    <input type="text" name="phone" class="form-control mask_phone_with_ddd p-4  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('phone')); ?>" placeholder="" required="required">
                                    <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
                                </div>
                                <div class="col-lg-4 col-sm-12 col-xs-12 form-group">
                                    <label for="service">Email(*)</label>
                                    <input type="email" name="email" class="form-control p-4  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="" value="<?php echo e(old('email')); ?>" required="required">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                   
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
                        <a href=""><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/logodois.png')); ?>"></a>
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
                            <a href="<?php echo e(asset('assets/img/foto1.jpeg')); ?>" class="image-link"><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/foto1.jpeg')); ?>"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="<?php echo e(asset('assets/img/foto2.jpeg')); ?>" class="image-link"><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/foto2.jpeg')); ?>"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="<?php echo e(asset('assets/img/foto3.jpeg')); ?>" class="image-link"><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/foto3.jpeg')); ?>"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="<?php echo e(asset('assets/img/foto4.jpeg')); ?>" class="image-link"><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/foto4.jpeg')); ?>"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="<?php echo e(asset('assets/img/foto5.jpeg')); ?>" class="image-link"><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/foto5.jpeg')); ?>"></a>
                        </div>
                        <div class="col-4 px-1 mb-2">
                            <a href="<?php echo e(asset('assets/img/foto6.jpeg')); ?>" class="image-link"><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/foto6.jpeg')); ?>"></a>
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
    <!--<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="display: inline; margin: 0;"><i class="fa fa-angle-double-up" style="font-size: 2rem;font-weight: 700;line-height: 2rem;}"></i></a> -->
    <a href="https://wa.me/5586999925618?text=Oi!" class="link-whatsapp" target="_blank"><i style="margin-top:16px" class="fa fa-whatsapp"></i></a>

    <!-- Whatsapp plugin -->
    <!--<script>window.rwbp={email:'suportetop01@hotmail.com',phone:'+5586999925618',message:'Olá, vamos agendar sua vistoria?',lang:'pt-BR'}</script><script defer async src='https://duz4dqsaqembt.cloudfront.net/client/whats.js'></script> -->
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('/js/moment.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>
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

    <?php if(Session::has('message')): ?>
        showMessage('<?php echo e(session('messageType')); ?>', '<?php echo e(session('message')); ?>');
    <?php endif; ?>

    
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public._layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/georgemacedo/Sites/dirceu-vistorias/resources/views/public/index.blade.php ENDPATH**/ ?>