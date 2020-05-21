<?php $post_data = get_query_var('post_data'); ?>
<div class="drawer" id="drawer-<?= $post_data['category_id'] ?>">
<div class="row">
    <div class="col-6">
      <h3 class="drawer-title"></h3>
      <span data-field='synopsis'></span>
      <p class="button"><a href="" class="drawer-permalink">Learn More</a></p>
      <p class="button" data-field="favorite"></p>
    </div>
    <div class="col-6 details">
    	<div class="row">
    		<div class="col-sm-4">
      			<h4>Keywords</h4>
      			<div data-field='keywords'></div>
      		</div>
      		<div class="col-sm-4">
			  <h4>Includes</h4>
			  <ul class="included" data-field='Included'>
			  </ul>
			</div>
			<div class="col-sm-4">
			  <h4>Group Size</h4>
			  <div data-field='group_size_tile'></div>
			  <h4>Time</h4>
			  <p data-field='time'></p>
			</div>
		</div>
    </div>
</div>
</div>