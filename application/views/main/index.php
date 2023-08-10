<div class="main container">
    <div class="list-container">
        <button class="more-button" aria-label="Menu Button">
            <div class="menu-icon-wrapper">
                <div class="menu-icon-line half first"></div>
                <div class="menu-icon-line"></div>
                <div class="menu-icon-line half last"></div>
            </div>
        </button>
    </div>
    <div class="main__wrapper" style="display: none">
        <nav class="product__navigation">
            <div class="social-icons">
                <a class="social-icon social-icon--create">
                    <div class="tooltip">Создать</div>
                </a>
                <a class="social-icon social-icon--get-list">
                    <div class="tooltip">Все</div>
                </a>
                <a class="social-icon social-icon--get-fake-deleted-list">
                    <div class="tooltip">Удаленные</div>
                </a>
                <a class="social-icon social-icon--get-not-fake-deleted">
                    <div class="tooltip">Не удаленные</div>
                </a>
                <a class="social-icon social-icon--search">
                    <div class="tooltip">Поиск</div>
                </a>
                <a class="social-icon social-icon--sort">
                    <div class="tooltip">Сортировка</div>
                </a>
                <a class="social-icon social-icon--facebook">
                    <div class="tooltip">Facebook</div>
                </a>
            </div>
        </nav>

        <div class="product__sort">
            <div class="product__sort__head">Сортировка</div>
            <div class="product__sort__body">
                <div class="product__sort__option" data-sort="created_at">По дате создания</div>
                <div class="product__sort__option" data-sort="updated_at">По дате обновления</div>
                <div class="product__sort__option" data-sort="deleted_at">По дате Удаления</div>
                <div class="product__sort__option" data-sort="title">По заголовку</div>
                <div class="product__sort__option" data-sort="price">По цене</div>
            </div>
        </div>

        <section class="product__create">
            <div class="product__create__wrapper">
                <h1>Создать товар</h1>
                <form class="create-product" action="/setproduct" method="post">
                    <div class="input__wrapper">
                        <div class="input-group">
                            <label class="input-group__label" for="myInput">Категория</label>
                            <input type="text" id="myInput" class="input-group__input" name="product_category"/>
                        </div>
                    </div>
                    <div class="input__wrapper">
                        <div class="input-group">
                            <label class="input-group__label" for="myInput">Заголовок</label>
                            <input type="text" id="myInput" class="input-group__input" name="product_title"/>
                        </div>
                    </div>
                    <div class="input__wrapper">
                        <div class="input-group">
                            <label class="input-group__label" for="myInput">Цена</label>
                            <input type="text" id="myInput" class="input-group__input" name="product_price"/>
                        </div>
                    </div>
                    <div class="input__wrapper">
                        <div class="input-group">
                            <label class="input-group__label" for="myInput">Описание</label>
                            <input type="text" id="myInput" class="input-group__input" name="product_description"/>
                        </div>
                    </div>

                    <b>
                        <button class="form-submit-button" type="submit" name="enter">Отправить</button>
                    </b>
                </form>
            </div>
        </section>

        <section class="product__get"></section>
        <section class="product__get__deleted__products"></section>
        <section class="product__search">
            <form class="product__search__form">
                <div class="input__wrapper">
                    <div class="input-group">
                        <label class="input-group__label" for="myInput">Поиск</label>
                        <input type="text" id="myInput" class="input-group__input" name="product_search" value=""/>
                    </div>
                </div>
                <button class="form-submit-button search__product" type="submit">Найти</button>
            </form>
        </section>
    </div>
</div>



