<div class="show">
    <div class="show_dance"><img src="img/dance.gif" alt="gif"></div>
    <div class="show_about">
        <h1 class="show_title">Бананчики</h1>
        <p class="show_text">На любой вкус и цвет!</p>
    </div>
    <div class="show_dance"><img src="img/dance.gif" alt="gif"></div>
</div>
<div class="shop">
    <? foreach ($bananas as $banana) { ?>
    <div class="shop_cart">
        <img src="<?=$banana['preview']?>" alt="" class="shop_img">
        <div class="shop_product">
            <p class="shop_name"><?=$banana['name']?></p>
            <p class="shop_price"><?=$banana['price']?></p>
            <button data-product-id="<?=$banana['id']?>" class="shop_button">Buy</button>
        </div>
    </div>
    <? } ?>
</div>
</div>
<div id="myForm" class="form">
    <div class="form_topic-text"><h1>Оставьте нам контакты для обратной связи</h1></div>
    <form action="/feedback/store" method="post" class="form_flex">
        <div class="form_input-box">
            <input type="text" name="name" placeholder="Введите ФИО"/>
            <span style="color: red"><?=!empty($errors) && isset($errors['name']) ? $errors['name'] : '' ?></span>
        </div>
        <div class="form_input-box">
            <input type="text" name="address"  placeholder="Введите адресс"/>
            <span style="color: red"><?=!empty($errors) && isset($errors['address']) ? $errors['address'] : '' ?></span>
        </div>
        <div class="form_input-box">
            <input type="number" name="number" placeholder="Введите телефон"/>
            <span style="color: red"><?=!empty($errors) && isset($errors['number']) ? $errors['number'] : '' ?></span>
        </div>
        <div class="form_input-box">
            <input type="text" name="email" placeholder="Введите email"/>
            <input type="hidden" name="product_id" id="product_id"/>
            <span style="color: red"><?=!empty($errors) && isset($errors['email']) ? $errors['email'] : '' ?></span>
        </div>
        <button class="form_button" id="closeFormButton" type="submit">Отправить</button>
    </form>
</div>