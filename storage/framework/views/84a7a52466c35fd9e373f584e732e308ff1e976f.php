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
                                
                                <div class="col-lg-5 col-sm-12 col-xs-12 col-md-5 form-group">
                                    <input type="text" name="name" class="form-control p-4  <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" placeholder="Nome*" required="required">
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

                                <div class="col-lg-4 col-sm-12 col-xs-12 col-md-5 form-group">
                                    <input type="text" name="city" class="form-control p-4  <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> citypicker" value="<?php echo e(old('city')); ?>" placeholder="Cidade*" required="required">
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
                                    <input type="text" name="license" class="form-control p-4  <?php $__errorArgs = ['license'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('license')); ?>" placeholder="Placa do Veículo*">
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