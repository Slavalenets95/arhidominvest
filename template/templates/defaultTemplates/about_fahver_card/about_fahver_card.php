<?php
    $cards = get_sub_field('cards');
    $headerContent = get_sub_field('content');
    $table = get_sub_field('table');
?>
<section class="efficiency">
    <div class="container">
        <div class="efficiency-header">
            <h3 class="efficiency-header__title">ПРИ СТРОИТЕЛЬСТВЕ НАШИХ ДОМОВ МЫ ИСПОЛЬЗУЕМ:</h3>
            <div class="efficiency-header__content">
                <?= $headerContent ?>
            </div>
        </div>
        <div class="efficiency-cards">
            <?php foreach($cards as $card) : ?>
                <div class="efficiency-card">
                    <img class="efficiency-card__img" src="<?= $card['img'] ?>" alt="">
                    <div class="efficiency-card__header">
                        <img src="<?= $card['icon'] ?>" alt="" class="efficiency-card__icon">
                        <p class="efficiency-card__title"><?= $card['title'] ?></p>
                    </div>
                    <div class="efficiency-card__body">
                        <?= $card['content'] ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="effiency__footer">
            <div class="container">
                <p>ПОКАЗАТЕЛЬ СОПРОТИВЛЕНИЯ ТЕПЛОПЕРЕДАЧИ ОГРАЖДАЮЩИХ КОНСТРУКЦИЙ</br>
                   В НАШИХ ДОМАХ В 1,5 - 2 РАЗА ПРЕВЫШАЕТ ТРЕБУЕМЫЕ ЗНАЧЕНИЯ (ПО НОРМАМ РФ)</p>
            </div>
    </div>
    <div class="effiency-table">
        <div class="container">
            <button class="effiency-table__show-btn">Показать сравнительную таблицу технологий строительства</button>
        </div>
        <div class="container">
            <h3 class="effiency-table__title">СРАВНИТЕЛЬНАЯ ТАБЛИЦА ТЕХНОЛОГИЙ СТРОИТЕЛЬСТВА</h3>
            <div class="effiency-table__wrapper">
                <?= $table ?>
            </div>
        </div>
        </div>
    </div>
</section>