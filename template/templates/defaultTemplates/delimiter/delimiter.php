<?php
    $content = get_sub_field('content');
    $class = get_sub_field('class');
?>
    <section class="delimiter-section <?= $class ?>">
        <div class="delimiter-section__linear-bg"></div>
        <div class="container">
            <?= $content ?>
        </div>
    </section>