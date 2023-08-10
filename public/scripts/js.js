$(document).ready(function (){
    $('.create-product').submit(function (event){
       event.preventDefault();
       var json;
        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (result) {
                // console.log(result)
                // console.log('1111')
                // json = JSON.parse(result);
                // console.log(json.message);
                // console.log('12222')
                alert('Продукт создан');
            },
            error: function () {
                alert('ошибка');
            }
        });
    });

    $('.social-icon--get-list').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/getproduct',
            // data: 'id=testdata',
            // dataType: 'json',
            // contentType: false,
            cache: false,
            // processData: false,
            success: function (result) {
                $('.product__get').fadeIn();
                $('section').not('.product__get').hide();
                $('.product__get').empty();
                $('.product__get').append(result);
                // alert('Продукт создан');
            },
            error: function () {
                alert('ошибка');
            }
        });
    });

    $('body').on('submit', '.product', function (event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '/updateproduct',
            // data: new FormData(this),
            data: form_data,
            // dataType: 'json',
            // contentType: false,
            // cache: false,
            // processData: false,
            success: function (result) {
                $('.product__get').fadeIn();
                $('section').not('.product__get').hide();
                $('.product__get').empty();
                $('.product__get').append(result);
                // console.log('test product update');
                alert('Товар обновлён');
            },
            error: function () {
                alert('Ошибка изменения');
            }
        });
    });

    $('body').on('click', '.delete__product', function () {
        // var product_id = $(this).data('product_id');
        var product_id = $(this).siblings().find('input[name=product_id]').val();
        $.ajax({
            type: 'POST',
            url: '/deleteproduct',
            // data: new FormData(this),
            data: {id: product_id},
            // dataType: 'json',
            // contentType: false,
            // cache: false,
            // processData: false,
            success: function (result) {
                $('.product__get').fadeIn();
                $('section').not('.product__get').hide();
                $('.product__get').empty();
                $('.product__get').append(result);
                // console.log('test product update');
                alert('Товар удалён');
            },
            error: function () {
                alert('Ошибка удаления');
            }
        });
    });

    $('body').on('click', '.fake__delete__product', function () {
        // var product_id = $(this).data('product_id');
        var product_id = $(this).siblings().find('input[name=product_id]').val();
        $.ajax({
            type: 'POST',
            url: '/fakedeleteproduct',
            // data: new FormData(this),
            data: {id: product_id},
            // dataType: 'json',
            // contentType: false,
            // cache: false,
            // processData: false,
            success: function (result) {
                console.log('1111')
                console.log(result)
                console.log('222222')
                $('.product__get').fadeIn();
                $('section').not('.product__get').hide();
                $('.product__get').empty();
                $('.product__get').append(result);
                // console.log('test product update');
                alert('Товар удалён, но не полностью');
            },
            error: function () {
                alert('Ошибка не полного удаления');
            }
        });
    });

    $('.social-icon--get-fake-deleted-list').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/getfakedeletedproduct',
            success: function (result) {
                $('.product__get__deleted__products').fadeIn();
                $('section').not('.product__get__deleted__products').hide();
                $('.product__get__deleted__products').empty();
                $('.product__get__deleted__products').append(result);
                // alert('Продукт создан');
            },
            error: function () {
                alert('ошибка');
            }
        });
    });

    $('.social-icon--get-not-fake-deleted').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/getnotfakedeletedproduct',
            success: function (result) {
                $('.product__get__deleted__products').fadeIn();
                $('section').not('.product__get__deleted__products').hide();
                $('.product__get__deleted__products').empty();
                $('.product__get__deleted__products').append(result);
                // alert('Продукт создан');
            },
            error: function () {
                alert('ошибка');
            }
        });
    });

    $('body').on('submit', '.product__search__form', function (event) {
        event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: '/searchproduct',
            // data: new FormData(this),
            data: form_data,
            // dataType: 'json',
            // contentType: false,
            // cache: false,
            // processData: false,
            success: function (result) {
                $('.product__search').fadeIn();
                // $('section').not('.product__search__form').hide();
                $('.products').remove();
                $('.product__search').append(result);
                // console.log('test product update');
                alert('Товар найден');
            },
            error: function () {
                alert('Ошибка поиска');
            }
        });
    });

    $('body').on('click', '.product__sort__option', function () {
        $('.product__sort__option').not($(this)).removeClass('active-asc active-desc');
        var sort;
        var field = $(this).data('sort');
        if ($(this).hasClass('active-asc')) {
            $(this).removeClass('active-asc');
            $(this).addClass('active-desc');
            sort = 'DESC';
        } else {
            $(this).removeClass('active-desc');
            $(this).addClass('active-asc');
            sort = 'ASC';
        }
        $.ajax({
            type: 'POST',
            url: '/sort',
            data: {sort: sort, field: field},
            success: function (result) {
                $('.product__get').fadeIn();
                $('section').not('.product__get').hide();
                $('.product__get').empty();
                $('.product__get').append(result);
                // console.log('test product update');

            },
            error: function () {
                alert('Ошибка сортировки');
            }
        });

    })

    $('.social-icon--sort').on('click', function () {
        $('.product__sort').slideToggle();
    })

    $('.more-button').on('click', function () {
        $('.list-container').toggleClass('active');
    });

    $('.social-icon--search').on('click', function () {
        $('.product__search').fadeIn();
        $('section').not('.product__search').fadeOut();
    });

    $('.social-icon--create').on('click', function () {
        $('.product__create').fadeIn();
        $('section').not('.product__create').fadeOut();
    });

    $('.more-button').on('click', function () {
        $('.main__wrapper').slideToggle();
    });
});