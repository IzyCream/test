<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-md-2 hidden-xs hidden-sm logo">
				<a href="<?php echo site_url() ?>">
            		<img src="<?php echo base_url('assets/imgs/logo.svg'); ?>" class="img-responsive" alt="" />
            	</a>
			</div>
			<div class="col-xs-12 col-md-8">
				<!-- Navigation -->
			    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			        <div class="navbar-header">
			        	<div class="navbar-brand hidden-md hidden-lg">
			        		<a href="<?php echo site_url() ?>">
			            		<img src="<?php echo base_url('assets/imgs/logo.svg'); ?>" class="img-responsive" alt="" />
			            	</a>
			            	<div class="clear"></div>
			            </div>
			            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			                <span class="sr-only">Toggle navigation</span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			                <span class="icon-bar"></span>
			            </button>
			        </div>

			        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			            <ul class="nav navbar-nav nav-small">
			                <!--li  class="dropdown <?php  echo ($page == 'project') ? 'active' : ''; ?>">
			                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">โครงการ<span class="caret hidden-xs hidden-sm"></span></a>
			                    <ul class="dropdown-menu">
			                    	<ul>
			                    		<?php foreach ($this->DefaultModel->getProject() as $key => $project): ?>
			                    		<li>
			                    			<a href="<?php echo site_url('type/'.$project['project_id']); ?>" 
			                    			class="<?php  echo ($menu == $project['project_id']) ? 'active-sub' : ''; ?>">
			                    			<?php echo $project['title'] ?></a>
			                    		</li>
			                    		<?php endforeach ?>
			                    	</ul>
			                   </ul>
			                   <div class="clear"></div>
			                </li-->
			                <li  class="<?php  echo ($page == 'project') ? 'active' : ''; ?>">
			                	<a href="<?php echo site_url('type/1'); ?>" >โครงการ</a>
			                </li>
			                <li  class="<?php  echo ($page == 'about') ? 'active' : ''; ?>">
			                	<a href="#" >องค์กร ENRICH</a>
			                </li>
			                <li  class="<?php  echo ($page == 'news') ? 'active' : ''; ?>">
			                	<a href="<?php echo site_url('news'); ?>" >ข่าวสาร</a>
			                </li>
			                <li  class="<?php  echo ($page == 'service') ? 'active' : ''; ?>">
			                	<a href="<?php echo site_url('service'); ?>" >ดูแลลูกค้า</a>
			                </li>
			                <li  class="<?php  echo ($page == 'contact') ? 'active' : ''; ?>">
			                	<a href="<?php echo site_url('contact'); ?>" >ติดต่อเรา</a>
			                </li>
			                <li class="line hidden-md hidden-lg">
			                	<a href="tel:024031000" ><img src="<?php echo base_url('assets/imgs/tel.svg'); ?>" alt="" /></a>
			                </li>
			            </ul>
			            <div class="clear"></div>
			        </div>
			        <div class="clear"></div>
			    </nav>
			    <!-- End Navigation -->
			</div>
			<div class="col-md-2 hidden-xs hidden-sm tel">
				<img src="<?php echo base_url('assets/imgs/tel.svg'); ?>" alt="" />
			</div>
		</div>
	</div>
</div>
<div class="bg-menu-sub hidden-xs hidden-sm"></div>


<script>
	$(document).ready(function () {
		$( "#header .dropdown" ).mouseenter(function() {
		    $('.bg-menu-sub').show()
		}).mouseleave(function() {
		    $('.bg-menu-sub').hide()
		});
	});
</script>
