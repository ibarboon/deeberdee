<div class="page-title">
	<div class="container clearfix">
		<div class="sixteen columns"> 
			<h1><?php echo $page_title; ?></h1>
		</div>
	</div><!-- end .container.clearfix -->
</div><!-- end .page-title -->
<div class="container main-content clearfix">
	<div class="five columns sidebar bottom-2">
		<div class="widget categories">
			<h3 class="title bottom-1">หมวดหมู่</h3>
			<ul class="arrow-list">
				<?php foreach ($sidebar_list as $key => $value) { ?>
				<li><a href="<?php echo site_url($current_page.'/'.$key); ?>"><?php echo $value; ?></a></li>
				<?php } ?>
			</ul><!-- end .arrow-list -->
		</div><!-- end .widget.categories -->
		<div class="widget">
			<h3 class="title bottom-1">Text Widget</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
		</div><!-- end .widget -->
	</div><!-- end .five.columns.sidebar.bottom-2 -->
	<div class="eleven columns bottom-2">
		<?php foreach($content_list as $content) { ?>
		<div class="post style-1 bottom-2">
			<h3 class="title bottom-1">
				<a href="#"><?php echo $content['content_header']; ?></a>
			</h3>
			<div class="image-post"> 
				<a href="javascript: void(0);"><img src="<?php echo base_url('assets/images/'.$content['content_media'])?>"></a>
			</div><!-- end .image-post -->
			<div class="post-meta bottom-1">
				<div class="meta"><i class="icon-time"></i> <?php echo $content['created']; ?> </div>
				<div class="meta"><i class="icon-user"></i> <?php echo $content['created_by']; ?> </div>
				<div class="meta"><i class="icon-eye-open"></i> จำนวนที่เปิดอ่าน <?php echo $content['views']; ?> ครั้ง </div>
			</div><!-- end .post-meta -->
			<div class="post-content">
				<?php echo $content['content_body']; ?>
				<a class="button small color" href="javascript: void(0);">Read More</a>
 			</div><!-- end .post-content -->
 		</div>
 		<?php } ?>
	</div><!-- end .eleven.columns.bottom-2 -->
	<div class="clearfix"></div>
</div>