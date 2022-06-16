jQuery(document).ready(function ($) {

    M.AutoInit();

    $('.scrollspy').scrollSpy();

    var instances = M.ScrollSpy.init(document.querySelectorAll('.scrollspy'), {
        throttle: 200,
        scrollOffset: 100
    });

});

function objectifyForm(formArray) { //serialize data function

    var returnArray = {};
    for (var i = 0; i < formArray.length; i++) {
        returnArray[formArray[i]['name']] = formArray[i]['value'];
    }
    return returnArray;
}
