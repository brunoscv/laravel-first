<?php $__env->startSection('content'); ?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/car1.jpg')); ?>">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">Vistoria Veicular</h1>
                            <h2 class="text-white mb-md-3 font-weight-medium">A vistoria veicular que se da por meio de um laudo de transferência é exigido pelo detran para fazer alteração 
                            de proprietário do veiculo, município e alterações de características .Os dados de chassi , motor e renavam são 
                            confrontados com a base estadual e nacional para saber se o veiculo passou por alguma adulteração. </h2>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2"><?= strtoupper('Agendar Vistoria');?></a>
                            <a href="https://api.whatsapp.com/send?phone=5531999999999&text=Oi" target="_blank" class="btn btn-primary py-md-3 px-md-5 mt-2"><?= strtoupper('Agendar por Whatsapp');?></a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/car2.jpg')); ?>">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h1 class="text-white text-uppercase mb-md-3">Vistoria Veicular</h1>
                            <h2 class="text-white mb-md-3 font-weight-medium">É uma forma que as autoridades de transito visualizam a diminuição de furtos , roubos e adulterações de carros.</h2>
                            <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2"><?= strtoupper('Agendar Vistoria');?></a>
                            <a href="https://api.whatsapp.com/send?phone=5531999999999&text=Oi" target="_blank" class="btn btn-primary py-md-3 px-md-5 mt-2"><?= strtoupper('Agendar por Whatsapp');?></a>
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
        <div class="container pb-3">
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
        <div class="container pb-3">
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
                    <div class="contact-form bg-light mb-4" style="padding: 30px;">
                        <form method="POST" action="<?php echo e(route('front.surveyCreate')); ?>" id="frm_save">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-6 form-group">
                                    <select class="custom-select px-4 mb-3  <?php $__errorArgs = ['service'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="service" required="required">
                                        <option selected>Serviço*</option>
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
                                <div class="col-6 form-group">
                                    <select class="custom-select px-4 mb-3  <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="city" required="required">
                                        <option selected>Cidade*</option>
                                        <option value="ALTOS" <?php if(old('city') == 'ALTOS'): ?> selected="selected" <?php endif; ?>>ALTOS</option>
                                        <option value="CAMPO MAIOR" <?php if(old('city') == 'CAMPO MAIOR'): ?> selected="selected" <?php endif; ?>>CAMPO MAIOR</option>
                                        <option value="JOSÉ DE FREITAS"  <?php if(old('city') == 'JOSÉ DE FREITAS'): ?> selected="selected" <?php endif; ?>>JOSÉ DE FREITAS</option>
                                        <option value="PEDRO II" <?php if(old('city') == 'PEDRO II'): ?> selected="selected" <?php endif; ?>>PEDRO II</option>
                                        <option value="TERESINA"  <?php if(old('city') == 'TERESINA'): ?> selected="selected" <?php endif; ?>>TERESINA</option>
                                        <option value="UNIÃO"  <?php if(old('city') == 'UNIÃO'): ?> selected="selected" <?php endif; ?>>UNIÃO</option>
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
                            </div>
                            <div class="row">
                                <div class="col-4 form-group">
                                    <input type="date" name="date" class="form-control p-4  <?php $__errorArgs = ['date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('date')); ?>" placeholder="Data*" required="required">
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
                                <div class="col-4 form-group">
                                    <select class="custom-select px-4 mb-3 <?php $__errorArgs = ['hour'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="hour" required="required">
                                        <option selected>Hora*</option>
                                        <option value="08:00" <?php if(old('hour') == '08:00'): ?> selected="selected" <?php endif; ?> >08:00</option>
                                        <option value="09:00" <?php if(old('hour') == '09:00'): ?> selected="selected" <?php endif; ?> >09:00</option>
                                        <option value="10:00" <?php if(old('hour') == '10:00'): ?> selected="selected" <?php endif; ?> >10:00</option>
                                        <option value="11:00" <?php if(old('hour') == '11:00'): ?> selected="selected" <?php endif; ?> >11:00</option>
                                        <option value="12:00" <?php if(old('hour') == '12:00'): ?> selected="selected" <?php endif; ?> >12:00</option>
                                        <option value="14:00" <?php if(old('hour') == '14:00'): ?> selected="selected" <?php endif; ?> >14:00</option>
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
                                <div class="col-4 form-group">
                                    <select class="custom-select px-4 mb-3  <?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" style="height: 50px;" name="payment" required="required">
                                        <option selected>Pagamento*</option>
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
                                <div class="col-6 form-group">
                                    <input type="text" name="name" class="form-control p-4  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" placeholder="Nome*">
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
                                <div class="col-3 form-group">
                                    <input type="text" name="cpf" class="form-control mask_cpf p-4 <?php $__errorArgs = ['cpf'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('cpf')); ?>" placeholder="CPF">
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
                                <div class="col-3 form-group">
                                    <input type="text" name="cnpj" class="form-control mask_cnpj p-4  <?php $__errorArgs = ['cnpj'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('cnpj')); ?>" placeholder="CNPJ">
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
                            </div>
                            <div class="row">
                                <div class="col-3 form-group">
                                    <input type="text" name="phone" class="form-control mask_phone_with_ddd p-4  <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('phone')); ?>" placeholder="Telefone*" required="required">
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
                                <div class="col-9 form-group">
                                    <input type="email" name="email" class="form-control p-4  <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Email*" value="<?php echo e(old('email')); ?>" required="required">
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
                <div class="row mx-n1">
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/gallery-1.jpg')); ?>"></a>
                        
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/gallery-2.jpg')); ?>"></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/gallery-3.jpg')); ?>"></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/gallery-4.jpg')); ?>"></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/gallery-5.jpg')); ?>"></a>
                    </div>
                    <div class="col-4 px-1 mb-2">
                        <a href=""><img class="w-100" alt="Brand" src="<?php echo e(asset('assets/img/gallery-6.jpg')); ?>"></a>
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top" style="display: inline; margin: 1rem;"><i class="fa fa-angle-double-up" style="font-size: 2rem;font-weight: 700;line-height: 2rem;}"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>
<script>
    $(function () {
        //$('[data-toggle="tooltip"]').tooltip();
        //$('[data-tooltip=tooltip"]').tooltip();
    });

    <?php if(Session::has('message')): ?>
        showMessage('<?php echo e(session('messageType')); ?>', '<?php echo e(session('message')); ?>');
    <?php endif; ?>
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('public._layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/georgemacedo/Sites/dirceu-vistorias/resources/views/public/index.blade.php ENDPATH**/ ?>