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
$id = 'blockcontent-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockcontent';
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
$image = get_field('image');
$direction= get_field('direction') ;
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>" 
style=" background-image: url('<?php echo $image?>'); background-position:<?php echo $direction?> center;">
 
    <div class="container">
      <div class="direction-flex <?php echo $direction.'-flex-direction'?>" >
      <div class="colum-2 mobile-display">
            <img src="<?php echo $image?>" alt="image">
      </div> 
      <div class="colum-1 <?php echo $direction.'-back-float'?>">
            <h3 class="blockcontent_title" style="color:<?php echo $title_text_color;  ?>"><?php echo esc_html( $title); ?></h3>
            <div class="blockcontent_description"style="color:<?php echo $description_text_color;  ?>"><?php echo $description; ?></div>
        </div>
       
      </div>
    </div>  
</section>
   
</div>