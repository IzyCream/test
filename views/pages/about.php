<div id="about">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="col-xs-12 no-padding img">
                <img src="<?php echo $abouts->image ?>" class="img-responsive hidden-xs hidden-sm" alt="">
                <img src="<?php echo $abouts->image_mobile ?>" class="img-responsive hidden-md hidden-lg" alt="">
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h1>ABOUT ENRICH</h1>
                <div class="detail">
                    <?php echo $abouts->about ?>
                </div>
            </div>
        </div>
    </div>
    <div class="line"></div>
    <div class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="pd">
                    <img src="<?php echo $abouts->image_vission ?>" class="img-responsive" alt="">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <h2>VISION</h2>
                    <div class="info">
                        <?php echo $abouts->vission ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="line"></div>
    <div class="bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2>MISSION</h2>
                    <div class="info">
                        <?php echo $abouts->mission ?>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="pd2">
                        <img src="<?php echo $abouts->image_mission ?>" class="img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>