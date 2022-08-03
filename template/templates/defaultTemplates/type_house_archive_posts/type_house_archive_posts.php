<?php
    $posts = get_sub_field('type_house_archive_posts_repeater');
    $headerContent = get_sub_field('header');
?>
<?php if($headerContent) : ?>
    <div class="type-posts__header">
        <div class="container">
            <?= $headerContent ?>
        </div>
    </div>
<?php endif; ?>
<section class="type-posts">
    <div class="container">
        <?php foreach($posts as $post) : 
                $isHuge = $post['huge'];
                $bottomTxt = $post['bottom_txt'];
                $post = $post['post']; 
                setup_postdata($post); 
                $thumbnail = get_the_post_thumbnail_url();
                $secondThumbnail = get_field('second_post_thumbnail');
        ?>
            <?php if(!$isHuge) : ?>
                <div class="type-posts__post <?= $isHuge ? 'huge' : '' ?>">
                    <a href="<?= get_the_permalink() ?>" class="type-posts__post-thumbnails">
                        <img src="<?= $thumbnail ?>">
                        <img src="<?= $secondThumbnail['url'] ?>">
                        <?php if(get_field('house_square')) : ?>
                            <span class="type-posts__post-square"><?= get_field('house_square') ?></span>
                        <?php endif; ?>
                    </a>
                    <div class="type-posts__post-body">
                        <h3 class="type-posts__post-title"><?= get_the_title() ?></h3>
                        <div class="type-posts__post-info">
                            <?php if(get_field('house_char_repeater')) : ?>
                                <?php   $counter = 0;
                                        foreach(get_field('house_char_repeater') as $char) : if($counter > 3) break; ?>
                                            <div class="type-posts__post-info-item">
                                                <img src="<?= $char['icon'] ?>">
                                                <p><?= $char['txt'] ?></p>
                                            </div>
                                <?php $counter++; endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="type-posts__post-footer">
                            <span class="type-posts__post-price"><?= get_field('house_price') ?></span>
                            <a href="<?= get_the_permalink() ?>" class="type-posts__post-permalink">Подробнее</a>
                        </div>
                    </div>
                </div>
            <?php else : ?>
                <div class="type-posts__huge">
                    <div class="type-posts__huge-bg" style="background-image: url('<?= $thumbnail ?>')"></div>
                    <div class="type-posts__huge-content">
                        <h3 class="type-posts__huge-title"><?= get_the_title() ?></h3>
                        <span class="type-posts__huge-square"><?= get_field('house_square') ?></span>
                        <span class="type-posts__huge-price">От <?= get_field('house_price') ?></span>
                        <a href="<?= get_the_permalink() ?>" class="type-posts__huge-permalink">Подробнее</a>
                        <p class="type-posts__huge-info"><?= $bottomTxt ?></p>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</section>