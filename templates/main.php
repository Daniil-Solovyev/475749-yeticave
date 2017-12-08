<main class="container">
    <section class="promo">
        <h2 class="promo__title">Нужен стафф для катки?</h2>
        <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
        <ul class="promo__list">
            <?php foreach ($category as $value): ?>
                <li class="promo__item promo__item--<?=$value['cssClass']?>">
                  <a class='promo__link' href='all-lots.html'><?= $value['cat_name'] ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </section>
    <section class="lots">
        <div class="lots__header">
            <h2>Открытые лоты</h2>
        </div>
        <ul class="lots__list">
           <?php foreach ($openBets as $bet): ?>
             <li class="lots__item lot">
                 <div class="lot__image">
                     <img src="<?=$bet['img']?>" width="350" height="260" alt="Сноуборд">
                 </div>
                 <div class="lot__info">
                     <span class="lot__category"><?=getCategoryById($bet['category_id'], $category)['cat_name']?></span>
                     <h3 class="lot__title"><a class="text-link" href="lot.php?lot_id=<?=$bet['id']?>"><?=$bet['lot_name']?></a></h3>
                     <div class="lot__state">
                         <div class="lot__rate">
                             <span class="lot__amount">Стартовая цена</span>
                             <span class="lot__cost"><?=$bet['lot_rate']?><b class="rub">р</b></span>
                         </div>
                         <div class="lot__timer timer">
                             <?=lot_time_remaining(strtotime($bet['lot_date']));?>
                         </div>
                     </div>
                 </div>
             </li>
            <?php endforeach ?>
        </ul>
    </section>
</main>
