

function showError(title, desc) {

    $("div #form-content").addClass("sc-hidden");
    $("div #title-container").addClass("sc-hidden");
    $('#message-title1').html(title).show();
    $('#message-desc1').html(desc).show();
}

function imageHandlers() {
    $('#user-image-upload').click(function (e) {
        e.preventDefault();

        $('#image-upload').trigger('click');
    });
    $('#image-upload').change(function (e) {
        if (!e.target.files || !e.target.files[0]) return;

        var reader = new FileReader();
        var form = new FormData();

        form.append('img', e.target.files[0]);
        reader.onload = function (e) {
            $.ajax({
                type: "POST",
                url: "request.php?param=image",
                data: form,
                processData: false,
                contentType: false,
                success: function (response) {
                    response = typeof response === 'string' ? JSON.parse(response) : response;

                    if (response.success) {
                        pic = response.success.filename;
                        url = 'http://imgapi.h2537721.stratoserver.net/' + pic;

                        $('#user-image-prev').attr('src', url);
                        $('#uploaded-file').val(url);

                    }
                },
                error: function (error) {
                    console.log(error);
                }
            });
        };
        reader.readAsDataURL(e.target.files[0]);
    });
}

var cId, sellId, cType = '';

function submit() {
    var data = {};

    data.CustomerId = cId;
    data.CustomerType = cType;
    data.sellId = sellId;

    $("#dealer-form").find('.change').each(function () {
        var $el = $(this);
        var nm = $el.attr('id');
        var is = $el.data( 'clicked' ) === 'clicked';
        var val;

        if(is){
            val = $el.data( 'clicked' ) === 'clicked';
        }


        if (val !== undefined && val !== '') data[nm] = val;
    });

    $("#dealer-form").find('input').each(function () {
        var $el = $(this);
        var nm = $el.attr('name');
        var val;

        if ($el.attr('type') === 'radio') {
            val = $el.val();
        }

        if ($el.attr('type') === 'text') {
            val = $el.val();
        }
        if ($el.attr('type') === 'hidden') {
            val = $el.val();
        }


        if (val !== undefined && val !== '') data[nm] = val;
    });

    console.log(data);

    $.ajax({
        url: "request.php?param=submit",
        type: "post",
        data: data,
        success: function (response) {
            showError("Vielen Dank!", "Wir haben Ihren Änderungswunsch erhalten. Aus Sicherheitsgründen muss dieser noch bestätigt werden. Wir haben an die hinterlegte E-Mail Adresse eine E-Mail mit der Bitte um Bestätigung geschickt. Sobald diese Bestätigung erfolgt ist, werden wir die Änderung vornehmen.");
            console.log(response);

        },
        error: function (error) {
            showError("Leider ist ein Fehler aufgetreten.", "Bitte kontaktieren Sie telefonisch oder per E-Mail unseren Kundenservice.");
            console.error(error);
        }

    });
    return false;
}

function formHandlers() {


    $('.change').click(function() {
        var box = $(this).attr('id');
        if ($('.chack'+box).hasClass("sc-hidden")) {
            $(this).data( 'clicked', 'clicked' );
            $('.chack'+box).removeClass(" sc-hidden");
            $(this).text("[schließen]");
            $(this).addClass("changeColor")
        } else {
            $(this).data( 'clicked', '' );
            $('.chack'+box).addClass("sc-hidden");
            $(this).text("[ändern]");
            $(this).removeClass("changeColor")
        }
    });

    $("#submit").on('click', function (e) {
        e.preventDefault();
        submit();
    });

    imageHandlers();
}

function getParam(param, params) {

    params = params || location.search;
    var result = null;
    var items = params.substr(1).split("&");

    Array.prototype.forEach.call(items, function (item) {
        item = item.split('=');

        if (item[0].toLowerCase() == param.toLowerCase()) result = decodeURIComponent(item[1]);
    });

    return result;
}

function getCookie(cname) {

    var name = cname + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];

        while (c.charAt(0) == ' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function authorize(params) {

    params = params || {};
    var url = params.returl || window.location.href;
    var userCookie = getCookie("User");

    if (params.debug) console.log(userCookie);
    if (!userCookie) {
        if (typeof params.noredir == 'undefined' || !params.noredir)
            window.location.href = 'api=' + encodeURIComponent(url);
    } else {
        cId = cId && cId != '' ? cId : getParam('customerid', userCookie);
    }

    return userCookie;
}


/*** Call all functions ***/
$(document).ready(function () {

    //var noauth = getParam( 'noauth' );

    //if ( ! noauth ) {
        var cookie = authorize();

        if (!cookie) return;

        cookie = '?' + cookie;
        sellId = sellId && sellId != '' ? sellId : getParam('sellId', cookie);
        cType = cType && cType != '' ? cType : getParam('CustomerType', cookie);



        if (cType !== 'D') {

            showError("Fehler!", "Sie müssen als Händler angemeldet sein.");
            return;

        }
    //}


    $.ajax({
        url: "request.php?param=init_page&cid=" + cId,
        type: "POST",
        dataType: 'json',
        success: function (response) {
            if (response.html && response.auth) {
                $('.dlr-form-wrap').html(response.html);
                formHandlers();
            } else if ( ! response.auth ) showError("Fehler!", "Usercheck failed.");
            else showError("Fehler #404!", "Not Found.");

        },
        error: function (error) {
            showError("Fehler!", "");
        }
    });
});
