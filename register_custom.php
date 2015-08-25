<?php 

function register_project_post() {
    $args = array(
      'public' => true,
      'label'  => 'Projects',
      'taxonomies' => array('post_tag'),
      'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),

    );
    register_post_type( 'project', $args );

}
add_action( 'init', 'register_project_post' );

 ?>