$(document).ready(function () {
    console.log("delete");

    $('#delete').on('click', function(event) {
    	 event.preventDefault();

    	var product_id=$('#product_id-field').val();
            // console.log(product_id);
        var _token=$('#token').val();  

             var data={};
             data.product_id=product_id;
             data._token=_token;


             console.log(data);
             $.ajax({
                type: "POST",
                url: '/deleteproduct',
                data: data,
                success: function(response)
                {
                    console.log("Item deleted successfully");   
                    window.location.href = '/products';                 
                },
                error: function(data) {
                console.log('Error:', data);
            }
            });

    });
})

