$(document).on("click", ".open-sharedialoge", function () {


         var language = $(this).data('language');
        
         var restaurant = $(this).data('restaurant');
       
         
         $.ajax({
            url: base_url+'api/region_item/'+language+'/'+restaurant,
            type: 'GET',
            

            success: function(res) {

                $('#load_restaurants').html('');
                console.log("share link success"+res);

                
                var parsed_json = JSON.parse(res);
                alert(res);
               /* var image=parsed_json[0].logo;*/
                $('#load_restaurants').html('<div class="col-md-4">'+res+'</div>');
                /*var noti_content = $('');*/
                noti_content.appendTo('#load_restaurants');
                $('#offer_image').attr('src',parsed_json[0].logo);
                console.log(parsed_json[0].offer_image);
                
            },
            error: function (err){
                $('#full_notifications').html('Unable to fetch offer at this moment. Please try again later');
                console.log("offer api error"+err);

            }
        });
    });