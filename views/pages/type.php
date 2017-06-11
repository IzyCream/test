<div id="type">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-2 border-bottom">
                <h1>โครงการ</h1>
                <div class="clear"></div>
            </div>
            <div class="col-xs-12 col-md-10 bg-white">
                <?php foreach ($projects->result_array() as $key => $project): ?>
                    <?php if ($key == 0): ?>
                        <div class="col-xs-12">
                            <h2><?php echo $project['title'] ?> <span>(ทั้งหมด <?php echo $projects->num_rows() ?> โครงการ)</span> </h2> 
                        </div>
                    <?php endif ?>
                    <div class="clear"></div>
                    <div class="info">
                        <div class="col-xs-12 col-md-5 no-padding-mobile">
                            <div class="img">
                                <img src="<?php echo $project['image']?>" class="img-responsive" alt="">
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-7 no-padding-mobile">
                            <div class="detail">
                                <table>
                                    <tr>
                                        <td>โครงการ  :</td>
                                        <td><?php echo $project['projecttitle'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>ราคาเริ่มต้น  :</td>
                                        <td><?php echo $project['price'] ?></td>
                                    </tr>
                                    <tr>
                                        <td>สถานที่  :</td>
                                        <td><?php echo $project['place'] ?></td>
                                    </tr>
                                </table>
                                <div class="visible-md visible-lg detail-info">
                                    <?php echo $project['detail']//mb_substr($project['detail'],0,245,'UTF-8'); ?>
                                </div>
                                <div class="visible-xs visible-sm">
                                    <?php echo $project['detail']; ?>
                                </div>
                                
                                <div class="goto">
                                    <a href="<?php echo $project['link'] ?>" target="_blank">ดูรายละเอียด</a>
                                </div>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<script>
    $(window).on('load resize', function () {

        $('.info').each(function () {
            var $this = $(this);
            var img = $this.find('.img');
            var detail = $this.find('.detail');
            var info = $this.find('.detail-info');

            var h = (img.height()-detail.height())/2-3;
            info.css("padding",h+"px 0px")
        });

    });
</script>

