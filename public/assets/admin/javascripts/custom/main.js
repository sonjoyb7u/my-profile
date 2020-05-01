
// UPDATE SKILL STATUS using js
$('body').on('change', '#skillStatus', function () {
    var id = $(this).attr('data-id');

    if (this.checked) {
        var status = 'active';
    } else {
        var status = 'inactive';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "skill/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});


// UPDATE SERVICE STATUS using js
$('body').on('change', '#serviceStatus', function () {
    var id = $(this).attr('data-id');

    if (this.checked) {
        var status = 'active';
    } else {
        var status = 'inactive';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "service/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});

// UPDATE CLIENT STATUS using js...
$('body').on('change', '#clientStatus', function () {
    var id = $(this).attr('data-id');

    if (this.checked) {
        var status = 'active';
    } else {
        var status = 'inactive';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "client/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});


// UPDATE CATEGORY STATUS using js
$('body').on('change', '#categoryStatus', function () {
    var id = $(this).attr('data-id');

    if(this.checked) {
        var status = 'active';
    } else {
        var status = 'inactive';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "category/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});


// UPDATE PROJECT STATUS using js
$('body').on('change', '#projectStatus', function () {
    var id = $(this).attr('data-id');

    if(this.checked) {
        var status = 'published';

    } else {
        var status = 'draft';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "project/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});

// UPDATE SLIDER STATUS using js
$('body').on('change', '#sliderStatus', function () {
    var id = $(this).attr('data-id');

    if (this.checked) {
        var status = 'active';
    } else {
        var status = 'inactive';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "slider/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});


// UPDATE BLOG-CATEGORY STATUS using js
$('body').on('change', '#blogCategoryStatus', function () {
    var id = $(this).attr('data-id');

    if (this.checked) {
        var status = 'active';
    } else {
        var status = 'inactive';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "blog-category/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});

// UPDATE BLOG-POST STATUS using js
$('body').on('change', '#blogPostStatus', function () {
    var id = $(this).attr('data-id');

    if (this.checked) {
        var status = 'published';
    } else {
        var status = 'draft';
    }

    // alert(id + status);

    $('.loader-overlay').show();

    $.ajax({
        url: "blog-post/status/" + id + '/' + status,
        method: 'get',
        success: function (result) {
            // console.log(result);
            $('.loader-overlay').hide();
        }

    });

});


// DATETIME-PICKER START/END using js...
$('body').on('click', '#datetimepicker', function () {
    // window.alert("hello!");

    $('.date').datetimepicker({
        format:'YYYY-MM-DD hh:mm:ss',
        useCurrent: true,
    });

});


//SLIDER-IMAGE POPUP using jQuery...
$('img').click(function () {
    // alert('Slider Image');
    var slider_image_src = $(this).attr('src');
    // alert(slider_image_src);

    $('.modal').modal('show');
    $('#slider-popup').attr('src', slider_image_src);

});


