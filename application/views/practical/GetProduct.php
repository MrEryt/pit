<div class="products">
    <?php foreach ($data as $product): ?>
    <form class="product" method="post">
        <div class="input__wrapper" style="display: none">
            <div class="input-group">
                <label class="input-group__label" for="myInput">id</label>
                <input type="text" id="myInput" class="input-group__input" name="product_id" value="<?= $product['id'] ?>"/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">id категории</label>
                <input type="text" id="myInput" class="input-group__input" name="product_category" value="<?= $product['category_id'] ?>"/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">Заголовок</label>
                <input type="text" id="myInput" class="input-group__input" name="product_title" value="<?= $product['title'] ?>"/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">Цена</label>
                <input type="text" id="myInput" class="input-group__input" name="product_price" value="<?= $product['price'] ?>"/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">Описание</label>
                <input type="text" id="myInput" class="input-group__input" name="product_description" value="<?= $product['description'] ?>"/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">Сортировка</label>
                <input type="text" id="myInput" class="input-group__input" name="product_sort" value="<?= $product['sort'] ?>"/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">Когда создан</label>
                <input type="text" id="myInput" class="input-group__input" name="product_created" value="<?= $product['created_at'] ?>" disabled/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">Когда обновлён</label>
                <input type="text" id="myInput" class="input-group__input" name="product_updated" value="<?= $product['updated_at'] ?>" disabled/>
            </div>
        </div>
        <div class="input__wrapper">
            <div class="input-group">
                <label class="input-group__label" for="myInput">Когда удалён</label>
                <input type="text" id="myInput" class="input-group__input" name="product_deleted" value="<?= $product['deleted_at'] ?> " disabled/>
            </div>
        </div>
        <button class="form-submit-button" type="submit" name="enter">Изменить</button>
        <button class="form-submit-button delete__product" type="button">Удалить</button>
        <?php if (empty($deleted)): ?>
        <button class="form-submit-button fake__delete__product" type="button">Удалить, но оставить</button>
        <?php endif; ?>
        <?php if (!empty($deleted) && $deleted === true): ?>
        <button class="form-submit-button restore__product" type="button">Востановить</button>
        <?php endif; ?>
    </form>
    <?php endforeach; ?>
</div>