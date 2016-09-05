$(document).ready(function () {
    console.log("welcome");

    $('#create').on('click', function(event) {
    	 event.preventDefault();

    	var name=$('#name-field').val();
            // console.log(name);
    	var user_id=$('#user_id-field').val();
            // console.log(user_id);
    	var category_id=$('#category_id-field').val();
            // console.log(category_id);
        var _token=$('#token').val();  

             var data={};
             data.name=name;
             data.user_id=user_id;
             data.category_id=category_id;
             data._token=_token;


             console.log(data);
             $.ajax({
                type: "POST",
                url: '/addproduct',
                data: data,
                success: function(response)
                {
                    console.log("Item updated successfully");   
                    window.location.href = '/products';                 
                },
                error: function(data) {
                console.log('Error:', data);
            }
            });

    });
})

