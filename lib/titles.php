<?php
/**
 * Page titles
 */
function roots_title() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'roots');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      return apply_filters('single_term_title', $term->name);
    } elseif (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    } elseif (is_day()) {
      return sprintf(__('%s', 'roots'), get_the_date());
    } elseif (is_month()) {
      return sprintf(__('%s', 'roots'), get_the_date('F Y'));
    } elseif (is_year()) {
      return sprintf(__('%s', 'roots'), get_the_date('Y'));
    } elseif (is_author()) {
      $author = get_queried_object();
      return sprintf(__('%s', 'roots'), apply_filters('the_author', is_object($author) ? $author->display_name : null));
    } else {
      return single_cat_title('', false);
    }
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'roots'), get_search_query());
  } elseif (is_404()) {
    return __('Hoppácska', 'roots');
  } else {
    return get_the_title();
  }
}


function roots_subtitle() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'roots');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      if (get_query_var('taxonomy')=='tasks') {
        return __('Munkák részfeladatra szűrve','roots');
      } else {
        return sprintf(__('Archívum: %s', 'roots'), get_query_var('taxonomy'));
      }
    
    } elseif (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    } elseif (is_day()) {
      return __('Napi archívum', 'roots');
    } elseif (is_month()) {
      return __('Napi archívum', 'roots');
    } elseif (is_year()) {
      return __('Éves archívum', 'roots');
    } elseif (is_author()) {
      return __('Szerzői archívum', 'roots');
    } else {
      return single_cat_title('', false);
    }
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'roots'), get_search_query());
  } elseif (is_404()) {
    return __('404: Az oldal nem található', 'roots');
  } else {
    return get_the_title();
  }
}





function roots_description() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'roots');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      return term_description( $term->ID, get_query_var( 'taxonomy' ));
    } elseif (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    } elseif (is_day()) {
      return __('Napi archívum', 'roots');
    } elseif (is_month()) {
      return __('Napi archívum', 'roots');
    } elseif (is_year()) {
      return __('Éves archívum', 'roots');
    } elseif (is_author()) {
      $author = get_queried_object();
      return get_usermeta($author->ID, 'description');
    } else {
      return single_cat_title('', false);
    }
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'roots'), get_search_query());
  } elseif (is_404()) {
    return __('A link elavult, esetleg félregépeltél valamit. ', 'roots');
  } else {
    return get_the_title();
  }
}


function roots_actiontext() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'roots');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      return __('Mutasd mindet…','roots');
    } elseif (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    } elseif (is_day()) {
      return __('Napi archívum', 'roots');
    } elseif (is_month()) {
      return __('Napi archívum', 'roots');
    } elseif (is_year()) {
      return __('Éves archívum', 'roots');
    } elseif (is_author()) {
      return __('Bővebben a szerzőről…','roots');
    } else {
      return single_cat_title('', false);
    }
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'roots'), get_search_query());
  } elseif (is_404()) {
    return __('Ugorj neki előlről…', 'roots');
  } else {
    return get_the_title();
  }
}


function roots_actionlink() {
  if (is_home()) {
    if (get_option('page_for_posts', true)) {
      return get_the_title(get_option('page_for_posts', true));
    } else {
      return __('Latest Posts', 'roots');
    }
  } elseif (is_archive()) {
    $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
    if ($term) {
      if (get_query_var('taxonomy')=='tasks') {
        return get_post_type_archive_link('reference');
      } else {
        return get_post_type_archive_link('post');
      }
    } elseif (is_post_type_archive()) {
      return apply_filters('the_title', get_queried_object()->labels->name);
    } elseif (is_day()) {
      return __('Napi archívum', 'roots');
    } elseif (is_month()) {
      return __('Napi archívum', 'roots');
    } elseif (is_year()) {
      return __('Éves archívum', 'roots');
    } elseif (is_author()) {
      return get_permalink(69).'#members';
    } else {
      return single_cat_title('', false);
    }
  } elseif (is_search()) {
    return sprintf(__('Search Results for %s', 'roots'), get_search_query());
  } elseif (is_404()) {
    return esc_url(home_url('/')); 
  } else {
    return get_the_title();
  }
}



