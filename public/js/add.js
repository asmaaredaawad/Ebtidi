$(document).ready(function () {
    console.log("hello");

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


// $("#search-buttton").click(function(e) {
//         /* e.preventDefault();*/
//         var serchKy = $('#search-field').val();
//         var searchBy = $('.search-panel span#search_concept').text();

//         $.ajax({
//             url: "/drivers/searchBy" + searchBy + "/" + serchKy,
//             type: 'GET',
//             data: {},
//             success: function(data) {
//               //  console.log(data);
//                 var dataTable = document.getElementById('data');

//                 dataTable.innerHTML = "";
//                 $.each(data, function(i, content) {
//                     var pic= "<?php URL::asset('images/driver_pic/'"+content.profile_pic+") ;?>";
//                     console.log(pic);

//                     var tablSearc = "";
//                     tablSearc = "<tr ><td>"+content.driver_id+"</td>";
//                     tablSearc += "<td><img  class='img-rounded user_thumb' src="+'/images/driver_pic/'+content.profile_pic+ "/> </td><td>" + content.first_name + " " + content.middle_name + " " + content.last_name + "</td><td>" + content.mobile + "</td><td>" + content.email + "</td>";
//                     tablSearc += "</tr>";
//                     dataTable.innerHTML = tablSearc;

//                 });
//             },
//             error: function(data) {
//                 console.log('Error:', data);
//             }
//         });

//     });