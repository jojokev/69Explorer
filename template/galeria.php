<?php $images = get_post_meta(get_the_ID(), 'vdw_gallery_id', true); ?>
<div class="content_new_gallery">
    <?php
    if (!empty($images) && is_array($images)) {
        $limitedImages = array_slice($images, 0, 5);

        foreach ($limitedImages as $index => $img) :
    ?>
            <div class="item_new_gallery">
                <a href="<?php echo wp_get_attachment_url($img); ?>" data-fslightbox="gallery">
                    <?php echo wp_get_attachment_image($img, 'full'); ?>
                    <?php if ($index === 0) : ?>
                        <span><i class="bi bi-eye me-1"></i> See Photos</span>
                    <?php endif; ?>
                </a>
            </div>
    <?php
        endforeach;

        for ($i = 5; $i < count($images); $i++) :
    ?>
            <a href="<?php echo wp_get_attachment_url($images[$i]); ?>" data-fslightbox="gallery"></a>
    <?php
        endfor;
    }
    ?>
</div>