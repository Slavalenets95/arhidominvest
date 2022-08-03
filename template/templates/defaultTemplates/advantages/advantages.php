<?php
    $advantages = get_sub_field('advantages_repeater');
    $advantagesHeaderContent = get_sub_field('header');
?>
    <section class="advantages-section">
        <div class="advantages-section__header">
            <div class="container">
                <?= $advantagesHeaderContent ?>
            </div>
        </div>
        <div class="container">
            <div class="advantages-section__cards">
                <?php foreach($advantages as $advantage) : ?>
                    <div class="advantages-section__card">
                        <div class="advantages-section__card-img">
                            <img src="<?= $advantage['icon'] ?>">
                        </div>
                        <div class="advantages-section__card-content">
                            <h3 class="advantages-section__card-title"><?= $advantage['title'] ?></h3>
                            <p class="advantages-section__card-txt"><?= $advantage['upper_title'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>