<section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php 
            $index = 0;
            $num = count($staff);
            while ($index < $num): ?>
                <li class="promo__item promo__item--boards">
                    <a class="promo__link" href="#"><?= $staff[$index]; ?></a>
                </li>
                <?php $index++; ?>
            <?php endwhile; ?>        

        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
        <?php foreach ($lots as $key => $value): ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src="<?= htmlspecialchars($value['image']); ?>" width="350" height="260" alt="<?= htmlspecialchars($value['name']); ?>">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= htmlspecialchars($value['categories']); ?></span>
                    <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= $value['name']; ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= formatSum($value['price']); ?></span>
                        </div>
                            <?php $date =  restOfTime($value['timeOff']); ?>
                        <div class="lot__timer timer <?php if ($date[0] == 0) echo 'timer--finishing'; ?>">
                            <?php
                               echo "$date[0] : $date[1]";
                            ?>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; ?>    
        </ul>
    </section>