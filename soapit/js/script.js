$(document).ready(function() {
    $("#state").change(function() {
        $stateselected = $("#state option:selected").val();
        
        var request = $.ajax({
            url: "http://localhost/AHShoppy/index.php/HomeController/getCity",
            method: "POST",
            data: {state: $stateselected},
            dataType: "html"
        });

        request.done(function(msg) {
           $('#city').html(msg);
        });

        request.fail(function(jqXHR, textStatus) {
           // alert("Request failed: " + textStatus);
        });
    });

});