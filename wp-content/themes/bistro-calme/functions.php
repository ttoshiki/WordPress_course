<?php
/**
 * <title>タグを出力する
*/
add_theme_support('title-tag');

add_filter('document_title_separator', 'my_document_title_separator');
function my_document_title_separator($separator)
{
    $separator = '|';
    return $separator;
}

add_filter('document_title_parts', 'my_document_title_parts');
function my_document_title_parts($title)
{
    if (is_home()) {
        unset($title['tagline']);
        $title['title'] = 'BISTRO CALMEは、カジュアルなワインバーよりなビストロです。';
    }
    return $title;
}

add_theme_support('post-thumbnails');

add_theme_support('menus');

add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query)
{
    if (is_admin() || ! $query->is_main_query()) {
        return;
    }
    if ($query->is_home()) {
        $query->set('posts_per_page', 3);
        // $query->set('category_name', 'news');
        return;
    }
    if ($query->is_category()) {
        $query->set('nopaging', true);
        return;
    }
}
