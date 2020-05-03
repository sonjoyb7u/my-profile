// LOAD CATEGORY WISE PROJECT CONTENT using js...
$(document).ready(function () {
    $("#cat-wise-post").on("click", function(e) {
        e.preventDefault();
        // alert($(this).text());
        var cat_slug = $(this).attr("data-id");
        alert(cat_slug);

        $.ajax({
            type:"get",
            url:"category/" + cat_slug,
            success : function(results) {
                console.log(results);
            }
        });

    });

});
