//callback-form,
//order form

var modal = document.getElementById('callbackWindow');
var callBackBtn = document.getElementsByClassName('callBackBtn');
var callBackClose = document.getElementsByClassName('modal-close')[0];
var orderModal = document.getElementById('orderWindow');
var orderBtn = document.getElementsByClassName('orderBtn');
var orderClose = document.getElementsByClassName('order-close')[0];

Array.from(callBackBtn).forEach(function (el) {
    el.onclick = function () {
        modal.style.display = 'block';
    };
});

callBackClose.onclick = function () {
    modal.style.display = 'none';
};
window.onclick = function (e) {
    if ((e.target == modal) || (e.target == orderModal)) {
        modal.style.display = 'none';
        orderModal.style.display = 'none';
    }
};

Array.from(orderBtn).forEach(function (e) {
    e.onclick = function () {
        orderModal.style.display = 'block';
    };
});


orderClose.onclick = function () {
    orderModal.style.display = 'none';
};


//animate menu scroll
$('.menu-item a ').on('click', function () {
    $('html, body').animate({
            scrollTop: $($(this).attr('href')).offset().top + 'px'
        },
        {
            duration: 500,
            easing: 'swing'
        });
    return false;
});

//sendMail
$('#orderFormBtn').on('click', function () {
    $.ajax({
        type: 'POST',
        data: {
            name: $('#orderName').val(),
            phone: $('#orderPhone').val(),
            mail: $('#orderMail').val(),
            comment: $('#orderComment').val(),
            qty: $('#orderQty').val(),
            price: $('#orderPrice').val()
        },
        url: './mail.php',
        cache: false,
        success: function (html) {
            alert(html);
        },
        error: function (error) {
            console.log('err');
        }
    });
});

//selected size and price

// $('.order__select').change(function () {
//     var items = $(this).parents('.order__item').find('.order__price');
//     var itemIndex = parseInt($(this).val()),
//         item = items[itemIndex];
//
//     if (item !== undefined) {
//         items.each(function () {
//             if(item !== this) {
//                 $(this).removeClass('active');
//             }
//         });
//         $(item).addClass('active');
//     }
// });

$('.order__select').change(function () {
    var optionSelected = $(this).find('option:selected'),
        oldPrice = optionSelected.data('orderold'),
        newPrice = optionSelected.data('ordernew'),
        selectVal = optionSelected.val();

    $(this).closest('.order__item').find('.order__old').html(oldPrice);
    $(this).closest('.order__item').find('.order__new').html(newPrice);
});

$('.orderBtn').on('click',function () {
   var parent = $(this).closest('.order__item'),
     itemHeight = parent.find('option:selected').val(),
     item = parent.data('item');

    console.log($(this));
    $('#orderQty').val(itemHeight);
    $('#orderPrice').val(item);
    console.log($('#orderQty').val());
    console.log($('#orderPrice').val());

});