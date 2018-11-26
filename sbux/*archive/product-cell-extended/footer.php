<!-- JS -->
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script>
<script type='text/javascript' src='/js/main.js'></script>

<script>

$('.order-nav li').on('click', 'a', function() {
    $('.order-nav li a').removeClass('item-selected');
    $(this).addClass('item-selected');
});

$('.previous-button').on('click', function() {
    $('.cart-layout').addClass('hide').removeClass('show');
		$('.favorites-layout').addClass('hide').removeClass('show');
		$('.previous-layout').addClass('show').removeClass('hide');;
});

$('.cart-button').on('click', function() {
    $('.cart-layout').addClass('show').removeClass('hide');
		$('.favorites-layout').addClass('hide').removeClass('show');
		$('.previous-layout').addClass('hide').removeClass('show');
});

$('.favorites-button').on('click', function() {
    $('.cart-layout').addClass('hide').removeClass('show');
		$('.favorites-layout').addClass('show').removeClass('hide');
		$('.previous-layout').addClass('hide').removeClass('show');
});



$(".ghost").click(function() {
    $(".ghost").not(this).toggleClass("hide");
    $(".ghost-special").toggleClass("hide");
    $(this).toggleClass("reward-flip");
		$(this).parents(".birthday-row").toggleClass("justify");
		$(this).siblings(".reward-price").toggleClass("show");

    var rewardText = $(this).find('.reward-action').text();
    if (rewardText === "Use") {
        $(this).find('.reward-action').text("Remove");
    } else {
        $(this).find('.reward-action').text("Use");
    }

		var birthdayText = $(this).find('.birthday-action').text();
    if (birthdayText === "Use Birthday Reward") {
        $(this).find('.birthday-action').text("Remove Birthday Reward");
    } else {
        $(this).find('.birthday-action').text("Use Birthday Reward");
    }
});

$(".ghost-special").click(function() {
    $(".ghost").not(this).toggleClass("hide");
    $(".ghost-special").not(this).toggleClass("hide");
    $(this).toggleClass("reward-flip");
		$(this).parents(".birthday-row").toggleClass("justify");
		$(this).siblings(".reward-price-special").toggleClass("show");

    var rewardText = $(this).find('.reward-action').text();
    if (rewardText === "Use") {
        $(this).find('.reward-action').text("Remove");
    } else {
        $(this).find('.reward-action').text("Use");
    }

		var birthdayText = $(this).find('.birthday-action').text();
    if (birthdayText === "Use Birthday Reward") {
        $(this).find('.birthday-action').text("Remove Birthday Reward");
    } else {
        $(this).find('.birthday-action').text("Use Birthday Reward");
    }
});


$("body").on("click", ".minus", function() {
	$(this)
		.parents(".product-cell")
		.removeClass("scale-in-center")
		.addClass("scale-out-center")
		// .delay(200)
		.slideUp(300)

		$(this)
			.parents(".product-cell")
			.next()
			.slideUp(300)
 });

 // $(".minus").click(function() {
 // 	$(this)
 // 		.parents(".product-cell")
 // 		.toggleClass("scale-out-center")
 // 		// .delay(200)
 // 		.slideUp(300)
 //
 // 		$(this)
 // 			.parents(".product-cell")
 // 			.next()
 // 			.slideUp(300)
 //  });


 $("body").on("click", ".plus", function() {
	 var x = $(this).parents(".product-cell").next()
	 // var clone = $(this).parents(".product-cell").clone();

 	$(this)
		.parents(".product-cell")
		.clone()
		// .removeClass("scale-out-center")
		.insertAfter(x)
		.hide()
		.slideDown(200)
		.addClass("scale-in-center")
		.parents(".product-cell")
		.next()
		.clone()
		.insertAfter(x)
		x.clone()
		.insertAfter(x.next())

});



</script>



</body>
</html>
