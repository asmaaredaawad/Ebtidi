$(document).ready(function () {
    console.log("edit");

    $('#edit').on('click', function(event) {
    	 event.preventDefault();

    	var name=$('#name-field').val();
    	var user_id=$('#user_id-field').val();
        var category_id=$('#category_id-field').val();
        var product_id=$('#product_id-field').val();
        var _token=$('#token').val();  

             var data={};
             data.name=name;
             data.user_id=user_id;
             data.category_id=category_id;
             data.product_id=product_id;
             data._token=_token;


             console.log(data);
             $.ajax({
                type: "POST",
                url: '/editproduct',
                data: data,
                success: function(response)
                {
                    console.log("Item edit successfully");   
                    window.location.href = '/products';                 
                },
                error: function(data) {
                console.log('Error:', data);
            }
            });

    });
})

