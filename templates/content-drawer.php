<?php $post_data = get_query_var('post_data'); ?>
<div class="drawer row" id="drawer-<?= $post_data['category_id'] ?>">
    <div class="col-6">
      <h3><?= $post_data['title'] ?></h3>
      <span data-field='synopsis'></span>
      <p class="button"><a href="<?= $post_data['permalink'] ?>">Learn More</a></p>
    </div>
    <div class="col-6 details">
      <h4>Keywords</h4>
      <?php echo $keywords ?>
      <h4>Includes</h4>
      <ul class="included">
      <?php while( have_rows('Included') ): the_row();
        // vars
        $icon = get_sub_field('icon');
        ?>

        <li class="<?php switch ($icon){
            case "PDF":
            echo "icon-pdf";
            break;
            case "Slides":
            echo "icon-slides";
            break;
          }; ?>">
            <?php switch ($icon){
              case "PDF":
              echo "Lesson Plan";
              break;
              case "Slides":
              echo "Slides";
              break;
            }; ?>
        </li>
      <?php endwhile; ?>
      </ul>
      <h4>Group Size</h4>
      <?php echo $group_size; ?>
      <h4>Time</h4>
      <p><?php echo $time; ?></p>
    </div>
  </div>
