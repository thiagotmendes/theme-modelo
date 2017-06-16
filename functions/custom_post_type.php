<?php
/* ----------------------------------------------------- */
/* Post Types */
/* ----------------------------------------------------- */

/* Criando um Post Type Personalizado */
add_action('init', 'modelo_register');
function modelo_register() {
	 $labels = array(
			'name' => 'Portfólio',
			'singular_name' => 'Post',
			'all_items' => 'Todos Portfólio',
			'add_new' => 'Adicionar Portfólio',
			'add_new_item' => 'Adicionar novo Portfólio',
			'edit_item' => 'Editar post',
			'new_item' => 'Novo post',
			'view_item' => 'Ver post',
			'search_items' => 'Procurar Portfólio',
			'not_found' =>  'Nada encontrado',
			'not_found_in_trash' => 'Nada encontrado no lixo',
			'parent_item_colon' => ''
	);
	$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'has_archive' => true,
			'taxonomy' => array('portfolio'),
			'menu_position' => 6,
			'supports' => array('title','editor','excerpt','comments','thumbnail','category'),
			'rewrite' => array('slug' => 'portfolio')
	  );
	register_post_type('portfolio',$args);
}

/* ----------------------------------------------------- */
/* Taxonomias */
/* ----------------------------------------------------- */

/* Criando uma Taxonomia Personalizada */
register_taxonomy("portfolio", array("portfolio"), array("hierarchical" => true,
	"label" => "Categorias", "singular_label" => "Categoria",'rewrite' => array( 'slug' => 'categoria-portfolio' )));
