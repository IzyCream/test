<div id="footer">
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="col-xs-12">
				<div class="top">
					<a href="javascript:void(0)" id="scroll">
						<img src="<?php echo base_url('assets/imgs/top.svg'); ?>" class="img-responsive" alt="" />
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="bg-subscribe">
		<div class="subscribe">
			<div class="row">
				<div class="col-xs-12 col-md-4">
					<h1><img src="<?php echo base_url('assets/imgs/subscribe.svg'); ?>" class="img-responsive" alt="" /> สมัครรับข่าวสาร</h1>
				</div>
				<div class="col-xs-12 col-md-5 input-position">
					<?php echo form_open('subscribe', array('id' => 'frm_subscribe', 'class' => 'form', 'role' => 'form')); ?>
						<input type="text" id="EmailSubscribe" name="EmailSubscribe" class="input" data-validation="email" data-validation-error-msg="กรุณากรอกอีเมล์ให้ถูกต้อง"/>
						<label for="EmailSubscribe">กรุณากรอกอีเมลของท่าน</label>
						<input type="image" src="<?php echo base_url('assets/imgs/subscribe-btn.svg'); ?>" class="img-responsive">
						<div class="clear"></div>
					<?php echo form_close(); ?>
					<div class="clear"></div>
				</div>
				<div class="col-xs-12 col-md-3">
					<div class="link">
						<a href="#">ไม่ได้รับข่าวสาร?</a>
						<div class="clear hidden-xs hidden-sm"></div>
						<a href="javascript:void(0)" onclick="Unsubscribe()">ยกเลิกการรับข่าวสาร</a>
					</div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-9 right">
					<nav class="navbar navbar-inverse" role="navigation">
						<div class="navbar-header">
				        	<div class="navbar-brand hidden-md hidden-lg">
				        		SITE MAP
				            </div>
				            <img src="<?php echo base_url('assets/imgs/footer/caret.svg') ?>" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" alt="">
				        </div>
				        <div class="clear"></div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
							<ul class="nav navbar-nav nav-small">
				                <li  class="dropdown <?php  echo ($page == 'project') ? 'active' : ''; ?>">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">โครงการ</a>
				                    <ul class="dropdown-menu">
				                    	<ul>
				                    		<?php foreach ($this->DefaultModel->getProject() as $key => $project): ?>
				                    		<li>
				                    			<a href="<?php echo site_url('type/'.$project['project_id']); ?>" 
				                    			class="<?php  echo ($menu == 'MASTER PLAN') ? 'active-sub' : ''; ?>">
				                    			<?php echo $project['title'] ?></a>
				                    		</li>
				                    		<?php endforeach ?>
				                    	</ul>
				                   </ul>
				                   <div class="clear"></div>
				                </li>
				                <li  class="<?php  echo ($page == 'about') ? 'active' : ''; ?>">
				                	<a href="<?php echo site_url(''); ?>" >องค์กร ENRICH</a>
				                </li>
				                <li  class="<?php  echo ($page == 'news') ? 'active' : ''; ?>">
				                	<a href="<?php echo site_url('news'); ?>" >ข่าวสาร</a>
				                </li>
				                <li  class="<?php  echo ($page == 'service') ? 'active' : ''; ?>">
				                	<a href="<?php echo site_url('service'); ?>" >ดูแลลูกค้า</a>
				                </li>
				                <li  class="dropdown <?php  echo ($page == 'contact') ? 'active' : ''; ?>">
				                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">ติดต่อเรา</a>
				                    <ul class="dropdown-menu">
				                    	<ul>
				                    		<li>
				                    			<a href="<?php echo site_url('contact'); ?>" 
				                    			class="<?php  echo ($menu == 'Contact') ? 'active-sub' : ''; ?>">
				                    			แบบฟอร์มติดต่อเรา</a>
				                    		</li>
				                    	</ul>
				                   </ul>
				                   <div class="clear"></div>
				                </li>
					        </ul>
					    </div>
				    </nav>
				</div>
				<div class="col-xs-12 col-md-3 border-right left">
					<div class="footer-position">
						<div class="logo">
							<a href="<?php echo site_url(); ?>"><img src="<?php echo base_url('assets/imgs/footer/logo.svg'); ?>" class="img-responsive" alt="" /></a>
						</div>
						<div class="tel hidden-md hidden-lg"><img src="<?php echo base_url('assets/imgs/footer/tel.svg'); ?>" /> <a href="tel:024031000">02-403-1000</a></div>
						
						<div class="social">
							<div class="copy hidden-xs hidden-sm">2016 &copy; ENRICH All Right Reserved</div>
							<a href="#"><img src="<?php echo base_url('assets/imgs/footer/facebook.svg'); ?>" /></a>
							<a href="#"><img src="<?php echo base_url('assets/imgs/footer/youtube.svg'); ?>" /></a>
							<a href="#"><img src="<?php echo base_url('assets/imgs/footer/ig.svg'); ?>" /></a>
							<a href="<?php echo site_url('home/policy') ?>" class="policy hidden-xs hidden-sm">Privacy Policy</a>
							<div class="clear"></div>
						</div>
						<div class="copy hidden-md hidden-lg">
							2016 &copy; ENRICH All Right Reserved <a href="<?php echo site_url('home/policy') ?>" class="policy">Privacy Policy</a>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="unsubscribeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">กรุณากรอกอีเมล์ที่ต้องการยกเลิก <img src="<?php echo base_url('assets/imgs/close.svg') ?>" data-dismiss="modal" alt=""></div>
	      <div class="subscribe unsubscribe">
	      		<div class="col-xs-12">
				<?php echo form_open('subscribe', array('id' => 'frm_unsubscribe', 'class' => 'form', 'role' => 'form')); ?>
					<input type="text" id="EmailUnSubscribe" name="EmailUnSubscribe" class="input" data-validation="email" data-validation-error-msg="กรุณากรอกอีเมล์ให้ถูกต้อง"/>
					<label for="EmailUnSubscribe">Please enter your email</label>
					<input type="image" src="<?php echo base_url('assets/imgs/unsubscribe-btn.svg'); ?>" class="img-responsive">
					<div class="clear"></div>
				<?php echo form_close(); ?>	
				</div>
				<div class="clear"></div>
	      </div>
	      <div class="clear"></div>
	    </div>
	  </div>
	</div>
	<!-- Modal -->
	<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">ข้อความแจ้งเตือน  <img src="<?php echo base_url('assets/imgs/close.svg') ?>" data-dismiss="modal" alt=""></div>
	      <div class="modal-body unsubscribe">
	        ...
	      </div>
	    </div>
	  </div>
	</div>
<div class="clear"></div>

</div>



<script>

$(document).ready(function(){

   	$(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
        	$('.top').fadeIn("slow")
        }else{
        	$('.top').fadeOut("slow")
        }
    });
    
});

$('#scroll').click(function() {
    $('html,body').animate({
        scrollTop: 0
    }, 800, function() {

    });
});

$('#frm_subscribe').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    if(form.hasClass('has-error') != true && $('#EmailSubscribe').val() != ""){
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('home/subscribe'); ?>",
	        data: form.serialize(), 
	        dataType: "html",
	        success: function(data){
	        	$('.modal-body').html(data)
	            $('#alertModal').modal('toggle');
	        },
	        error: function() { alert("Error posting feed."); }
	   });
   }
});

$('#frm_unsubscribe').submit(function(e) {
    var form = $(this);
    e.preventDefault();
    if(form.hasClass('has-error') != true && $('#EmailUnSubscribe').val() != ""){
	    $.ajax({
	        type: "POST",
	        url: "<?php echo site_url('home/unsubscribe'); ?>",
	        data: form.serialize(), 
	        dataType: "html",
	        success: function(data){
	        	$("#unsubscribeModal").modal('hide');
	        	$('.modal-body').html(data)
	            $('#alertModal').modal('toggle');
	        },
	        error: function() { alert("Error posting feed."); }
	   });
   }
});

function Unsubscribe(){
	$('#unsubscribeModal').modal('toggle');
}
</script>