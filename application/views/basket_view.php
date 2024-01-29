<div class="basket"> 
    <div class="basket_head">
        <div class="basket_appellation">Name</div>
        <div class="basket_appellation">Address</div>
        <div class="basket_appellation">Number</div>
        <div class="basket_appellation">Email</div>
        <div class="basket_appellation">Product_id</div>
    </div>
    <?php
    if (isset($feedback)) {
        foreach ($feedback as $info) {
            ?>
            <div class="basket_records">
                <div class="basket_data"><?= $info[1] ?></div>
                <div class="basket_data"><?= $info[2] ?></div>
                <div class="basket_data"><?= $info[3] ?></div>
                <div class="basket_data"><?= $info[4] ?></div>
                <div class="basket_data"><?= $info[5] ?></div>
            </div>
            <?php
        }
    }
    ?>
</div>








