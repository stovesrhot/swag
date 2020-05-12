<?php $post_data = get_query_var('post_data'); ?>
<div class="drawer row" id="drawer-<?= $post_data['category_id'] ?>">
    <div class="col-6">
      <h3><?= $post_data['title'] ?></h3>
      <span data-field='synopsis'></span>
      <p class="button"><a href="<?= $post_data['permalink'] ?>">Learn More</a></p>
    </div>
    <div class="col-6 details">
      <h4>Keywords</h4>
      <span data-field='keywords'></span>
      <h4>Includes</h4>
      <ul class="included">
      <span data-field='Included'></span>
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
      <span data-field='group_size'></span>
      <h4>Time</h4>
      <p data-field='time'></p>
    </div>
  </div>
