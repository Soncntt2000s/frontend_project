$('.buy_now').click(function(event) {
    alert('Bạn có chắc chắn muốn thêm vào giỏ hàng?');
    event.preventDefault();
    var href = $(this).attr('href');
    var tenlt = $(this).data('name')


    $.ajax({
        type: "GET",
        url: href,
        data: {},

        success: function(res) {
                alert('Đã thêm thành công');
        }
    });
    
});

$('.continue').click(function(event)
{
    return view('container.home');
})
