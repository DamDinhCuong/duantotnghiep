
$(document).ready(() => {
	//Fly to cart
	$('.items').flyto({
    		item: '.product_img', // item cần bay đến giỏ hàng
    		target: '.checkout', // giỏ hàng
    		button: '.btnAddToCart' // button add vào giỏ hàng
    	});
});