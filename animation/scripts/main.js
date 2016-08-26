/**
 * Created by Aleksandrovych on 23.01.2016.
 */

$(function() {

    $(function() {
        var i=1;
        for (i;i<20;i++) {
            $('<img src="photo/ju ('+i+').jpg"/>');
        }

    });
    $("button").on("click", toggleMain);
});

function myFunction(event) {
    var x = event.which || event.keyCode;
    if (x == 13) {  // 13 is the Enter key
        toggleMain();
    }
}

function toggleMain () {
    $(".main").toggle();
    return setTimeout(mainFunc,1000);
}


mainFunc = function() {
    $(function() {
        var timer, j = 0;

        timer = setInterval(function () {

            if (j >= 6) {
                // clear the timer
                clearInterval(timer);
                return;
            }

            var idd = "div#images" + j;
            imgTable(idd);
            // go to next
            j += 1;
        }, 111);

    });

    function imgTable(idies) {
        var timer, width_c, d, index = 0;
        var items = Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18);

        timer = setInterval(function () {
            width_c = Math.floor(($(window).width() * .9) / 75);
            if (index >= width_c) {
                // also clear the timer
                clearInterval(timer);
                setTimeout(function() {
                    $(".text").css("display", "block");
                },555);
                foo();
            }

            d = Math.floor(Math.random()* items.length);
            $(idies).append('<img class="animated flipInY" src="photo/ju (' + items[d] + ').jpg" alt=""/>');
            items.splice(d, 1);
            // go to next circle
            index += 1;
        }, 77);
    }

    foo = setInterval(function () {
        $("img").removeClass("animated flipInY");
    }, 4000);


    foo1 = setInterval(function () {
        var chil, width_c, timer, d, index = 0, m,
            wiwidth = $(window).width();
        var items = Array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18);

        m = Math.floor(Math.random() * 6);
        chil = document.getElementById('images' + m).children;

        timer = setInterval(function () {
            width_c = Math.floor((wiwidth * .9) / 75);
            if (index >= width_c) {
                // also clear the timer
                clearInterval(timer);
                return;
            }

            d = Math.floor(Math.random()* items.length);
            $(chil[index]).attr('src', 'photo/ju (' + items[d] + ').jpg');
            $(chil[index]).addClass('animated flipInY').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
                foo);
            items.splice(d, 1);
            // go to next circle
            index += 1;
        }, 111);

    }, 5000);

    foo2 = setInterval(function () {

        $(".type").toggleClass("type1 animated flipInX").one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend',
            function () {
                $("div").removeClass("animated flipInX");
            });


    }, 5000);
};