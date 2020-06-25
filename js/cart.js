function addToCart(cartItem, amount, callback) {
    $.ajax({
        url: "controllers/.php",
        type: "POST",
        data: {
            action: "",
        },
        success: function(result) {
        }
    })
}

// andere functies etc...