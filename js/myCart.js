function addToCart(id)
{
	console.log('add' + id);
	$.ajax({
		async: false,
		type: "POST",
		url: "/Models/Cart.php",
		data: 'action=add&id=' + id,
		error: function ()
		{
			alert("Не смог");
		},
		success: function (response)
		{
			alert('Добавленно в корзину')
		}
	});
}

function showMyCart()
{
	console.log('show');
	$.ajax({
		async: false,
		type: "POST",
		url: "/Models/Cart.php",
		data: 'action=show',
		dataType: "text",
		error: function ()
		{
			alert("Произошла ошибка");
		},
		success: function (response)
		{
			$('#in-check').html(response);
		}
	});
}

function delFromCart(id){
    console.log('del ' + id);
    $.ajax({
        async: false,
        type: "POST",
        url: "/Models/Cart.php",
        data: 'action=del&id=' + id,
        dataType:"text",
        error: function () {	
            alert( "Произошла ошибка при добавлении товара" );
        },
        success: function (response) {
            showMyCart();
            console.log(response);
        }
    });
}