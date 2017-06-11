<div id="news">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
                <h1>ข่าวสาร</h1>
            </div>

			<div class="clear"></div>
            <div class="col-md-12">
    			<div id="newsajax">
    				<div id="messages-list"></div>
    				<div class="clear"></div>
    				<?php if ($total_pages > 1): ?>
    					<div class="col-xs-12">
    	                    <div class="loading"> 
    	                        <img src="<?php echo base_url('assets/imgs/loadmore.svg') ?>" clase="img-responsive" alt="">
    	                    </div>
    	                </div>
                    <?php endif ?>
                    <div class="clear"></div>
    			</div>
            </div>
		</div>
	</div>
</div>

<script>
//variable initialization 
var current_page    =   1;
var loading         =   false;
var oldscroll       =   0;
$(document).ready(function(){

    $.ajax({
        'url':'<?php echo site_url() ?>/news/ajax',
        'type':'post',
        'data': {"p" : current_page},
        success:function(data){
            $(data).hide().appendTo('#messages-list').fadeIn(1000);
            current_page++;
        }
    }); 

   $(window).scroll(function() {
        if( $(window).scrollTop() > oldscroll ){ //if we are scrolling down
            if( ($(window).scrollTop() + $(window).height() >= $("#newsajax").height()  ) && (current_page <= total_pages) ) {
                   if( ! loading ){
                        loading = true;
                        $('.loading').css('display','block');
                        $.ajax({
                            'url':'<?php echo site_url() ?>/news/ajax',
                            'type':'post',
                            'data': {"p" : current_page},
                            success:function(data){
                                $(data).hide().appendTo('#messages-list').fadeIn(1000);
                                current_page++;
                                $('.loading').css('display','none');
                                loading = false;
                            }
                        }); 
                   }
            }
        }
    });
    
});

</script>
<script type="text/javascript">
    var total_pages =   <?php echo $total_pages; ?>;
</script>


