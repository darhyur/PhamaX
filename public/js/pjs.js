
$(document).ready(function() {
    $("#brand_id").change(function() {
        console.log($("#brand_id").val());

        $.ajax({


            url: getBrandUrl,
            type: "get",
           success: function (brandProducts) {
                console.log(brandProducts);

           }



        })

    });
});