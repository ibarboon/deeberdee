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
				<?php foreach ($product_category_list as $product_category) { ?>
				<li><a href="<?php echo site_url($current_page.'/'.$product_category['row_id']); ?>"><?php echo $product_category['product_category_name']; ?></a></li>
				<?php } ?>
			</ul><!-- end .arrow-list -->
		</div><!-- end .widget.categories -->
		<div class="widget">
			<h3 class="title bottom-1">Text Widget</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
		</div><!-- end .widget -->
	</div><!-- end .five.columns.sidebar.bottom-2 -->
	<div class="eleven columns bottom-2">
		<table class="style color">
			<tbody>
				<tr>
					<th>เบอร์</th>
					<th>เครือข่าย</th>
					<th>ราคา</th>
					<th>อื่น ๆ</th>
				</tr>
				<tr>
					<td>xx-xxxx-xxxx</td>
					<td>AIS</td>
					<td>xxx</td>
					<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
				</tr>
				<tr>
					<td>xx-xxxx-xxxx</td>
					<td>DTAC</td>
					<td>xxx</td>
					<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
				</tr>
				<tr>
					<td>xx-xxxx-xxxx</td>
					<td>TRUE MOVE H</td>
					<td>xxx</td>
					<td>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </td>
				</tr>
			</tbody>
		</table>
	</div><!-- end .eleven.columns.bottom-2 -->
	<div class="clearfix"></div>
</div>