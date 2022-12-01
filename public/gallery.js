$(document).ready(function (){
    console.log("document loaded");

    $.ajax({
        type:"GET",
        url:"http://portofolioppw2.herokuapp.com/api/gallery",
        success: function(response){
            console.log(response['galleries'])
            var gal = '';
            response['galleries'].forEach(element =>{
                gal += '<div> <a class="example-image-link" href="http://portofolioppw2.herokuapp.com/storage/project/' + element['imagePath'] + '" data-lightbox="roadtrip" data-title=""><img class="example-image img-fluid mb-2" src="http://portofolioppw2.herokuapp.com/storage/project/' + element['imagePath'] + '"alt="image-1"/></a></div>';
            });
            

            $('#gallery-api').html(gal);
            console.log(gal)
        }
    })
})

$(window).on("load", function(){
    console.log("window loaded");
})