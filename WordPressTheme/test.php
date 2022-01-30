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

<?php
    $cat = get_query_var( 'works_category' ); //指定したいタクソノミーを指定
    $the_query = new WP_Query(
      array( 
        'post_type' => array('works'), 
        'tax_query' => array(
            'relation' => 'OR',
            array(
                'taxonomy' => 'works_category',
                'field' => 'slug',
                'terms' => $cat, /* 上記で指定した変数を指定 */
            ),
        ),
        'paged' => get_query_var('paged'),
        'posts_per_page' => '3' /* 1ページに表示させたい件数 */
        )
      );
    ?>