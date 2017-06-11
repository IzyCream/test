<div id="career">
    <div class="title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1>CAREER</h1>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- pc -->
    <div class="hidden-xs hidden-sm">
        <div class="bg-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-2 col-md-10">
                        <table class="table">
                            <tr>
                                <th width="20%">CAREER TITLE</th>
                                <th width="15%" style="text-align: center">POSITION</th>
                                <th width="50%">DETAIL</th>
                                <th></th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-offset-2 col-md-10">
                    <table class="table">
                        <?php foreach ($careers->result_array() as $key => $career): ?>
                        <tr>
                            <td width="20%"><?php echo $career['title'] ?></td>
                            <td width="15%" align="center"><?php echo $career['position'] ?></td>
                            <td width="40%">
                                <?php echo $career['short_detail'] ?>
                                <div class="detailbig" id="detail-big<?php echo $key ?>">
                                    <?php echo $career['detail'] ?>
                                </div>
                            </td>
                            <td>
                                <div class="detail-btn">
                                    <a href="javascript:void(0)" onclick="showDetail('<?php echo $key ?>','big')" id="btn-big<?php echo $key ?>" class="btnbig">
                                        <img src="<?php echo base_url('assets/imgs/detail.svg') ?>" class="img-responsive" 
                                        onMouseOver="this.src='<?php echo base_url('assets/imgs/detail-hover.svg') ?>'" 
                                        onMouseOut="this.src='<?php echo base_url('assets/imgs/detail.svg') ?>'" alt="">
                                        <img src="<?php echo base_url('assets/imgs/detail-hover.svg') ?>" style="display:none">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end pc -->

    <!-- mobile -->
    <div class="hidden-md hidden-lg bg-career">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 no-padding">
                    <table class="table">
                        <?php foreach ($careers->result_array() as $key => $career): ?>
                        <tr>
                            <td width="35%">CAREER TITLE</td>
                            <td width="65%"><?php echo $career['title'] ?></td>
                        </tr>
                        <tr>
                            <td><div class="position">POSITION</div></td>
                            <td><?php echo $career['position'] ?></td>
                        </tr>
                        <tr>
                            <td><div class="details">DETAIL</div></td>
                            <td>
                                <?php echo $career['short_detail'] ?>
                                <div class="detailsmall" id="detail-small<?php echo $key ?>">
                                    <?php echo $career['detail'] ?>
                                </div>
                                <div class="clear"></div>
                                <div class="detail-btn">
                                    <a href="javascript:void(0)" onclick="showDetail('<?php echo $key ?>','small')" id="btn-small<?php echo $key ?>" class="btnsmall">
                                        <img src="<?php echo base_url('assets/imgs/detail.svg') ?>" class="img-responsive" 
                                        onMouseOver="this.src='<?php echo base_url('assets/imgs/detail-hover.svg') ?>'" 
                                        onMouseOut="this.src='<?php echo base_url('assets/imgs/detail.svg') ?>'" alt="">
                                        <img src="<?php echo base_url('assets/imgs/detail-hover.svg') ?>" style="display:none">
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- end mobile -->
</div>

<div id="closes" style="display:none;">
    <img src="<?php echo base_url('assets/imgs/closes.svg') ?>" class="img-responsive" onMouseOver="this.src='<?php echo base_url('assets/imgs/closes-hover.svg') ?>'" onMouseOut="this.src='<?php echo base_url('assets/imgs/closes.svg') ?>'" alt="">
    <img src="<?php echo base_url('assets/imgs/closes-hover.svg') ?>" style="display:none">
</div>
<div id="open" style="display:none;">
    <img src="<?php echo base_url('assets/imgs/detail.svg') ?>" class="img-responsive" onMouseOver="this.src='<?php echo base_url('assets/imgs/detail-hover.svg') ?>'" onMouseOut="this.src='<?php echo base_url('assets/imgs/detail.svg') ?>'" alt="">
    <img src="<?php echo base_url('assets/imgs/detail-hover.svg') ?>" style="display:none">
</div>

<script type="text/javascript">
    $(document).ready(function () {

    });

    function showDetail(id,type){
        $('.detail'+type).slideUp()
        $('.btn'+type).html($('#open').html())
        if ($('#detail-'+type+id).is(":visible")) {
            $('#btn-'+type+id).html($('#open').html())
            $('#detail-'+type+id).slideUp()
        }else{
            $('#btn-'+type+id).html($('#closes').html())
            $('#detail-'+type+id).slideDown()
        }  
    }


</script>
