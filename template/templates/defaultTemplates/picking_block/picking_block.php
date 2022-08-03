<?php
    $picking = get_field('picking_repeater');
    $count = 0;
?>
<?php if($picking) : ?>
<section class="picking-section">
    <div class="container">
        <h2 class="picking-section__title">Комплектации</h2>
        <div class="picking-section__nav">
            <?php foreach($picking as $pick) : ?>
                <div class="picking-section__nav-item <?= $count === 0 ? 'active' : '' ?>" data-for="<?= 'picking_' . $count ?>">
                    <img src="<?= $pick['icon'] ?>">
                    <p class="picking-section__nav-txt"><?= $pick['txt'] ?></p>
                </div>
            <?php $count++; endforeach; $count = 0; ?>
        </div>
        <div class="picking-section__tabs">
            <?php foreach($picking as $pick) : ?>
                <div class="picking-section__tab <?= $count === 0 ? 'active' : '' ?>" data-for="<?= 'picking_' . $count ?>">
                    <ul class="picking-section__list">
                        <?php foreach($pick['list_repeater'] as $listItem) : ?>
                            <li class="picking-section__list-item">
                                <div class="picking-secton__list-item-header">
                                    <span class="picking-section__list-title"><?= $listItem['title'] ?></span>
                                    <button class="picking-section__list-btn">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="2px" fill="none" fill-rule="evenodd" stroke-linecap="square"> <g transform="translate(1.000000, 1.000000)" stroke="#1e1f24"> <path d="M0,11 L22,11"></path> <path d="M11,0 L11,22"></path> </g> </g> </svg>
                                    </button>
                                </div>
                                <div class="picking-section__list-item-content">
                                    <?= $listItem['content'] ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php $count++; endforeach; ?> 
        </div>
    </div>
</section>
<?php endif; ?>