<?php

/**
 * header Block Template.
 *
 * @param    array        $block      The block settings and attributes.
 * @param    string       $content    The block inner HTML (empty).
 * @param    bool         $is_preview True during AJAX preview.
 * @param    (int|string) $post_id    The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'blockheader-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockheader';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$title  = get_field('title');
$title_text_color  = get_field('title_text_color'); 
$description = get_field('description');
$description_text_color = get_field('description_text_color');
$background = get_field('background');
$link_text_color = get_field('link_text_color') ;
$link_background_color = get_field('link_background_color') ;
$link = get_field('link');  
if( $link ){
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
}
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="blockheader-background" style="background-image:url('<?php echo $background?>');">
    <div class="container">
        <div>
            <h2 class="blockheader_title" style="color:<?php echo $title_text_color;  ?>"><?php echo esc_html( $title); ?></h2>
        </div>
        <div>
            <p class="blockheader_description"style="color:<?php echo $description_text_color;  ?>"><?php echo esc_html( $description); ?></p>
        </div>
        <div class="button-container">
            <a class="button-link" style='color: <?php echo $link_text_color; ?>; background:<?php echo $link_background_color; ?>' href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
            <span class="blockheader_link"><?php echo  esc_html( $link_title )?: 'Read more' ; ?>
        </span></a>
        </div>
   </div>
</div>
</section>
  