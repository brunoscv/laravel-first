<script type="text/javascript" src="<?php echo e(asset('vendor/jsvalidation/js/jsvalidation.js')); ?>"></script>
<script>
    $().ready(function () {

        <?php if(count($errors) > 0): ?>
        showMessage(
            'e',
            '<?php echo e(count($errors)==1 ? 'Existe um erro de validação' : 'Existem '.count($errors).' erros de validação'); ?>',
            8
        );
        <?php endif; ?>

        $('#bt_salvar_adicionar').on('click', function () {
            $('#routeTo').val('create');
        });

        $('#bt_salvar').on('click', function () {
            $('#routeTo').val('index');
        });
    });
</script>
<?php /**PATH /Users/georgemacedo/Sites/dirceu-vistorias/resources/views/panel/_assets/scripts-form.blade.php ENDPATH**/ ?>