<div id="home">
	<div class="container-fluid">
		<div class="row-fluid">
            <!-- banner -->
			<div class="col-xs-12 no-padding">
				<?php if ($banners->num_rows() > 0): ?>
                    <div class="banner">
        				<div id="banner-slide" class="flexslider">
                            <ul class="slides">
                            <?php foreach ($banners->result_array() as $key => $banner): ?>
                                <li>
                                    <?php if ($banner['link'] != ""): ?>
                                        <a href="<?php echo $banner['link'] ?>" target="_blank">
                                    <?php endif; ?>
                                    <img src="<?php echo $banner['image_mobile'] ?>" class="img-responsive hidden-md hidden-lg" alt="">
                                    <img src="<?php echo $banner['image'] ?>" class="img-responsive hidden-xs hidden-sm" alt="">
                                    <?php if ($banner['link'] != ""): ?>
                                        </a>
                                    <?php endif; ?>
                                    <div class="clear"></div>
                                    <div class="shadow"><img src="<?php echo base_url('assets/imgs/shadow.png') ?>" class="img-responsive" alt=""></div>

                                    <div class="detail-slide" rel="<?php echo $key?>">
                                        <h1>
                                            <span class="hidden-md hidden-lg">
                                                <?php echo iconv_substr($banner['title'],0,60, "UTF-8") ?>
                                            </span>
                                            <span class="hidden-xs hidden-sm"><?php echo $banner['title'] ?></span>
                                        </h1>
                                        <p>
                                            <span class="hidden-md hidden-lg">
                                                <?php echo iconv_substr($banner['detail'],0,140, "UTF-8") ?>...
                                            </span>
                                            <span class="hidden-xs hidden-sm"><?php echo $banner['detail'] ?></span>
                                        </p>
                                        <?php if ($banner['link'] != ""): ?>
                                        <div class="register">
                                            <a href="<?php echo $banner['link'] ?>" target="_blank">REGISTER NOW</a> 
                                        </div>
                                        <?php endif ?>
                                    </div>
                                    <div class="clear"></div>
        
                                </li>
                            <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endif ?>
				<div class="clear"></div>
			</div>
            <!-- end banner -->
            <div class="clear"></div>
            <!-- project -->
            <div class="project">
                <div id="project" class="owl-carousel">
                    <?php foreach ($projects->result_array() as $key => $project): ?>
                        <div class="item">
                            <a href="<?php echo $project['link'] ?>" target="_blank">
                                <div class="hidden-md hidden-lg">
                                    <img src="<?php echo $project['image'] ?>" class="img-responsive" alt="">
                                </div>
                                
                                <div class="view third-effect hidden-xs hidden-sm">
                                    <img src="<?php echo $project['image'] ?>" class="img-responsive" alt="">
                                    <div class="mask">
                                        <div class="small">
                                            <img src="<?php echo $project['image_small'] ?>" class="img-responsive" alt="">
                                        </div>
                                        <div  class="info">Read More</div>
                                    </div>
                                </div>
                                
                                <div class="text">
                                    <h2>
                                        <span class="hidden-md hidden-lg">
                                            <?php echo iconv_substr($project['title'],0,60, "UTF-8") ?>
                                        </span>
                                        <span class="hidden-xs hidden-sm"><?php echo $project['title'] ?></span>
                                    </h2> 
                                    <p>
                                        <span class="hidden-md hidden-lg">
                                            <?php echo iconv_substr($project['short_detail'],0,130, "UTF-8") ?>
                                        </span>
                                        <span class="hidden-xs hidden-sm"><?php echo $project['short_detail'] ?></span>
                                    </p>
                                </div>
                            </a>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="clear"></div>
            </div>
            <!-- end project -->
            <div class="clear"></div>
            <!-- youtube -->
            <?php /*if ($home): ?>
            <div class="youtube">
                <div class="col-xs-12">
                    <h4 class="hidden-xs hidden-sm">
                        <a href="<?php echo $home->youtube_chanel ?>" target="_blank">watch more</a> <img src="<?php echo base_url('assets/imgs/youtube.svg') ?>" alt="">
                    </h4>
                    <h3><img src="<?php echo base_url('assets/imgs/youtube-btn.svg') ?>" alt=""> YOUTUBE CHANNEL</h3>
                    <div class="detail">
                        <?php echo $home->youtube_detail ?>
                    </div>
                    <h4 class="hidden-md hidden-lg">
                        <a href="<?php echo $home->youtube_chanel ?>" target="_blank">watch more</a> <img src="<?php echo base_url('assets/imgs/youtube.svg') ?>" alt="">
                    </h4>
                </div>
                <div class="clear"></div>
                <div class="content">
                    <div class="col-xs-12 col-md-8 no-padding-mobile">
                        <div class="videoWrapper">
                            <iframe width="560" height="349" src="<?php echo $home->youtube; ?>" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4 no-padding-mobile-youtube">
                        <div id="content">
                            <div class="logo"><img src="<?php echo $home->icon ?>" class="img-responsive" alt=""></div>
                            <div class="title"><?php echo $home->youtube_title ?></div>
                            <div class="detail">
                               <?php echo iconv_substr($home->youtube_detail, 0,120, "UTF-8"); ?>... 
                            </div>
                            <div class="view"><a href="#">VIEW DETAIL</a></div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <?php endif*/ ?>
            <!-- end youtube -->
            <div class="shadow"><img src="<?php echo base_url('assets/imgs/shadow.png') ?>" class="img-responsive" alt=""></div>
            <div class="clear"></div>
            <!-- recommend -->
            <div class="recommend">
                <h3><img src="<?php echo base_url('assets/imgs/recommend-btn.svg') ?>" alt=""> RECOMMEND</h3>
                <div class="clear"></div>
                <div id="recommend" class="owl-carousel">
                    <?php foreach ($recommends->result_array() as $key => $recommend): ?>
                        <div class="item">
                            <?php if ($recommend['link'] != ""): 
                                $value = "";
                                $link_array = explode("?", $recommend['link']);
                                $value_array = explode("=", $recommend['link']);
                                if (count($link_array) > 0) {
                                    $link = $link_array[0];
                                }else{
                                    $link = $recommend['link'];
                                }
                                if (count($value_array) > 1) {
                                    $value = $value_array[1];
                                }
                            ?>
                                <a href="javascript:void(0)" onclick="gotoPage('<?php echo $link ?>','<?php echo $value ?>')">
                            <?php endif ?>
                            <img src="<?php echo $recommend['image'] ?>" class="img-responsive" alt="">
                            <?php if ($recommend['link'] != ""): ?>
                                </a>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="clear"></div>
            </div>
            <!-- end recommend -->
		</div>
	</div>
</div>

<?php if ($popup->num_rows() > 0): ?>
    <?php if ($popup->row()->image != ""): ?>
        <a  href="<?php echo $popup->row()->image ?>" class="fancybox"></a>
    <?php endif; ?>
<?php endif; ?>
<!-- FlexSlider -->
<link href="<?php echo base_url('assets/css/flexslider.css'); ?>"  rel="stylesheet"/>
<script defer src="<?php echo base_url('assets/js/jquery.flexslider.js'); ?>"></script>
<style>
    @media (max-width: 991px) {
        #detail-slide .flex-direction-nav a{
            top: 90%;
        }
    }
</style>
<!-- carousel -->
<link href="<?php echo base_url('assets/css/owl.carousel.css'); ?>"  rel="stylesheet"/>
<script defer src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>

<!-- hovereffect -->
<link href="<?php echo base_url('assets/css/hovereffect.css'); ?>"  rel="stylesheet"/>


<script src="<?php echo base_url('assets/js/jquery.fancybox.pack.js'); ?>"></script>
<link href="<?php echo base_url('assets/css/fancybox.css'); ?>" rel="stylesheet">

<script type="text/javascript">
	$(document).ready(function () {

        <?php if ($popup->num_rows() > 0): ?>
            <?php if ($popup->row()->link != ""): ?>
            $(".fancybox").fancybox({
                padding : 10,
                fitToView: true,
                loop : false,
                afterShow: function () {
                    $(".fancybox-image").wrap($("<a />", {
                        href: '<?php echo $popup->row()->link ?>', //or your target link
                        target: "_blank"
                    }));
                }
            }).trigger('click');
            <?php else: ?>
            $(".fancybox").fancybox({
                padding : 10,
                fitToView: true,
                loop : false,
            }).trigger('click');
            <?php endif; ?>
        <?php endif; ?>

        $('#banner-slide').flexslider({
            animation: "slide",
            controlNav: true,
            directionNav: true, 
            animationLoop: true, 
            slideshow: true, 
            smoothHeight: true,
            slideshowSpeed: 5000,
            prevText:'<img src="<?php echo base_url('assets/imgs/previos.png') ?>"  />',
            nextText:'<img src="<?php echo base_url('assets/imgs/next.png') ?>"  />',
            start: function(slider){
                
            },
            after: function(slider){
                $('#detail-slide').data('flexslider').flexAnimate(slider.currentSlide, true);
            }
        });

    });

    $(window).on('load resize', function () {
        $("#project").owlCarousel({
            itemsCustom : [
              [0, 1],
              [768, 2],
              [992, 3]
            ],
            navigation : true
        });

        $("#recommend").owlCarousel({
            itemsCustom : [
              [0, 1],
              [768, 2],
              [992, 3]
            ],
            navigation : true
        });
    });

    function gotoPage(link,value){
        $.redirect('<?php echo site_url();?>'+link, {'subject': value});
    }
</script>
