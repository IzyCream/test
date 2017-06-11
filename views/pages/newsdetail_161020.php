<div id="newsdetail">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>ข่าวสาร</h1>
            </div>  
        </div>
    </div>
    <div class="title">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 co-xs-offset-8 col-sm-2 co-sm-offset-10 col-md-1 co-md-offset-10">
                    <div class="back">
                    <a href="<?php echo site_url('news'); ?>"><img src="<?php echo base_url('assets/imgs/back.svg') ?>" class="img-responsive" alt=""></a></div>
                </div>
                <div class="col-xs-12 col-md-10">
                    <h1><?php echo $newsdetail->title ?></h1>
                </div>  
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="clear"></div>

    <div class="slide">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-offset-1 col-md-10">
                    <div class="col-md-9 no-padding">
                        <div id="slide" class="owl-carousel">
                            <?php foreach($newsimage->result_array() as $key=>$rnewsimage):?>
                                <div class="item"><img src="<?php echo $rnewsimage['image'] ?>" class="img-responsive" alt=""></div>
                            <?php endforeach  ?>
                        </div>
                    </div>
                    <div class="col-md-3 no-padding hidden-xs hidden-sm">
                        <div id="thumb" class="boxscroll">
                            <?php foreach($newsimage->result_array() as $key=>$rnewsimage):?>
                                <li class="<?php echo ($key == 0)? 'active': ''; ?>"><img src="<?php echo $rnewsimage['image'] ?>" class="img-responsive" alt=""></li>
                            <?php endforeach  ?>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
        <div class="clear"></div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-offset-1 col-md-10">
                <div class="detail"><?php echo $newsdetail->detail ?></div>
            </div>
            <div class="col-xs-6 col-md-offset-1 col-md-5">
                <div class="previous">
                    <?php if($previous != ""): ?>
                        <a href="<?php echo site_url('news/detail/'.$previous) ?>">
                            <img src="<?php echo base_url('assets/imgs/previous-news.svg') ?>" class="img-responsive" alt="">
                        </a>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-xs-6 col-md-5">
                <div class="next">
                    <?php if($next != ""):?>
                        <a href="<?php echo site_url('news/detail/'.$next) ?>">
                             <img src="<?php echo base_url('assets/imgs/next-news.svg') ?>" class="img-responsive" alt="">  
                        </a>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url('assets/js/jquery.nicescroll.min.js'); ?>"></script>
<!-- carousel -->
<link href="<?php echo base_url('assets/css/owl.carousel.css'); ?>"  rel="stylesheet"/>
<script defer src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        var sync1 = $("#slide");
        sync1.owlCarousel({
            singleItem : true,
            slideSpeed : 1000,
            navigation: false,
            pagination:false,
            responsiveRefreshRate : 200,
        });

        $("#thumb li").click(function(e) {
            e.preventDefault();
            var number = $('#thumb li').index(this);
            $("#thumb li").removeClass('active')
            $(this).addClass('active')
            sync1.trigger("owl.goTo",number);
        });

        $("#thumb").niceScroll({cursorcolor:"#b3b3b3",cursorborder: "2px solid #b3b3b3",horizrailenabled: false, autohidemode:false, cursorwidth:2});
    });
</script>