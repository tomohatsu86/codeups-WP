<?php
        //カスタム投稿タイプを取得 
        $post_type = get_post_type( $post );
        //タクソノミースラッグ取得(単数)
        $taxonomy_slug = array_keys(get_the_taxonomies());
        // ターム情報を取得
        $term = get_the_terms($post->ID, $taxonomy_slug);
        $term_slug = $term[0] -> slug;

        var_dump($post_type);
        var_dump($taxonomy_slug);
        var_dump($term);
        var_dump($term_slug);
        ?>
        
      <?php
        $my_query = new WP_Query(
          array(
            'post_type' => $post_type, //カスタム投稿タイプ名
            'taxonomy' => $taxonomy_slug, //タクソノミー名
            // 'term' => $term_slug, //ターム名
            'posts_per_page' => '4', //表示件数
            'orderby' => 'rand', //ランダム表示
            'post__not_in' =>array( $post->ID ), //表示中の記事を除外
            )
          );
          ?>

      <?php var_dump($my_query); ?>