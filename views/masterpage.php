<!DOCTYPE html>
<html lang="en">
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="<?php echo $this->ConfigModel->getMetaDescription(); ?>">
    <meta name="keyword" content="<?php echo $this->ConfigModel->getMetaKeyword(); ?>">
    <meta name="author" content="">
    
    <title><?php echo $this->ConfigModel->getWebsiteName(); ?></title>
    <link rel="icon" href="<?php echo $this->ConfigModel->getFavicon(); ?>">
    
    <link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/validationEngine.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/component.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/easydropdown.css'); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url('assets/js/ie10-viewport-bug-workaround.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/ie-emulation-modes-warning.js'); ?>"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('assets/js/html5shiv.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/css3-mediaqueries.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/respond.min.js'); ?>"></script>
    <![endif]-->

    <?php echo $this->ConfigModel->getGoogleAnalytic(); ?>

    
    <!-- Google CDN jQuery with fallback to local -->
    <script>window.jQuery || document.write('<script src="<?php echo base_url('assets/js/jquery-1.11.1.min.js'); ?>"><\/script>')</script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/modernizr.custom.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.form-validator.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.easydropdown.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.nicescroll.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.fancybox.pack.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/redirect.js'); ?>"></script>
    <link href="<?php echo base_url('assets/css/fancybox.css'); ?>" rel="stylesheet">
    
</head>
<body>
    <?php echo $this->ConfigModel->getGoogleRemarketing(); ?>   
    <div id="main">
        <?php echo $this->load->view('layout/header', array(), TRUE); ?>
        <?php echo $content; ?>
        <?php echo $this->load->view('layout/footer', array(), TRUE); ?>
        <div class="clear"></div>
    </div>

    
    <script src="<?php echo base_url('assets/js/jquery.imagesloaded.min.js'); ?>"></script>
    <script>
        $( window ).load(function() {

            $('input, textarea').focusout(function() {
                if ($(this).val().length > 0) {
                    $(this).addClass('input');
                }else {
                    $(this).removeClass('input');
                }
            });

            $('input, textarea').each(function(){ 
                if ($(this).val().length > 0) {
                    $(this).addClass('input');
                }else {
                    $(this).removeClass('input');
                }
            });

            $('input, textarea').focusout(function() {
                if ($(this).val().length > 0) {
                    $(this).next('label').hide();
                }else {
                    $(this).next('label').show();
                }
            });

            $('input, textarea').each(function(){ 
                if ($(this).val().length > 0) {
                    $(this).next('label').hide();
                }else {
                    $(this).next('label').show();
                }
            });

            $.validate({
                validateOnEvent: false,
                borderColorOnError : '#ac0d0d',
            });

            $( "#frm_register" ).submit(function( event ) {
                if ($( "#frm_register" ).find(".error").hasClass( "error" ) == false) {
                    $('input[type="submit"]').attr('disabled',true).css('opacity','0.5')
                    $('input[type="image"]').attr('disabled',true).css('opacity','0.2')
                }                
            });
            
        });

    </script>
</body>
</html>