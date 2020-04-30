// UPDATE CATEGORY STATUS using js
$(document).ready(function () {

    $("a[name='category']").on('click', '#catProject', function(){
        // alert('Hello');
        var cat_id =$(this).attr("data-id");
        alert('cat_id');
        // console.log(cat_id);

        $.ajax({
           url: "project/" + cat_id,
           method: 'get',
            success: function (result) {
               // console.log(result);
            }

        });

    });

});
