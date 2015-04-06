<div class="page-title">
	<div class="container clearfix">
		<div class="sixteen columns"> 
			<h1><?php echo $page_title; ?></h1>
		</div>
	</div><!-- end .container.clearfix -->
</div><!-- end .page-title -->
<div class="container main-content clearfix">
	<div class="sixteen columns top-4 bottom-4">
		<div id="horizontal-tabs" class="two style2">
			<ul class="tabs">
				<?php foreach ($content_list as $key => $value) { ?>
				<li id="tab_two<?php echo ($key + 1); ?>"><?php echo $value['content_header']; ?></li>
				<?php } ?>
			</ul>
			<div class="contents">
				<?php foreach ($content_list as $key => $value) { ?>
				<div id="content_two<?php echo ($key + 1); ?>" class="tabscontent"><?php echo $value['content_body']; ?></div>
				<?php } ?>
			</div><!-- end .contents -->
		</div><!-- end #horizontal-tabs .two.style2 -->
	</div>
</div>