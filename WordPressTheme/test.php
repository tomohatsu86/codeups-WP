<?php
      $term = get_queried_object();
      // var_dump($term);
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $the_query = new WP_Query(
        array( 
          'post_type' => 'works',
          'taxonomy' => 'works_category',
          'term' => $term->slug,
          'posts_per_page' => 6,
          'paged' => $paged, // ページ番号
        )
      );
    ?>