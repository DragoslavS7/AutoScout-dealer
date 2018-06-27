/*function validate() {

    var valid = true;
    var Form1 = $('#Form1').val();
    var Form2 = $('#Form2').val();
    var Form3 = $('#Form3').val();
    var Form4 = $('#Form4').val();
    var Form5 = $('#Form5').val();
    var Form6 = $('#Form6').val();
    var Form7 = $('#Form7').val();
    var Form8 = $('#Form8').val();
    var Form9 = $('#Form9').val();
    var Form10 = $('#Form10').val();
    var Form11 = $('#Form11').val();
    var Form12 = $('#Form12').val();
    var Form13 = $('#Form13').val();
    var Form14 = $('#Form14').val();
    var Form15 = $('#Form15').val();
    var Form16 = $('#Form16').val();
    var Form17 = $('#Form17').val();
    var Form18 = $('#Form18').val();
    var Form19 = $('#Form19').val();
    var Form20 = $('#Form20').val();
    var Form21 = $('#Form21').val();
    var Form22 = $('#Form22').val();
    var Form23 = $('#Form23').val();
    var Form24 = $('#Form24').val();
    var Form25 = $('#Form25').val();
    var Form26 = $('#Form26').val();
    var Form27 = $('#Form27').val();
    var Form28 = $('#Form28').val();
    var Form29 = $('#Form29').val();
    var Form30 = $('#Form30').val();
    var Form31 = $('#Form31').val();
    var Form32 = $('#Form32').val();
    var Form33 = $('#Form33').val();
    var Form34 = $('#Form34').val();
    var Form35 = $('#Form35').val();
    var Form36 = $('#Form36').val();
    var Form37 = $('#Form37').val();
    var Form38 = $('#Form38').val();
    var Form39 = $('#Form39').val();
    var Form40 = $('#Form40').val();
    var Form41 = $('#Form41').val();
    var Form42 = $('#Form42').val();
    var Form43 = $('#Form43').val();
    var Form44 = $('#Form44').val();
    var Form45 = $('#Form45').val();
    var Form46 = $('#Form46').val();
    var Form47 = $('#Form47').val();
    var Form48 = $('#Form48').val();
    var Form49 = $('#Form49').val();
    var Form50 = $('#Form50').val();
    var Form51 = $('#Form51').val();
    var Form52 = $('#Form52').val();
    var Form53 = $('#Form53').val();
    var Form54 = $('#Form54').val();
    var Form55 = $('#Form55').val();
    var Form56 = $('#Form56').val();
    var Form57 = $('#Form57').val();

    //console.warn( $( '[name=as24-radio]:checked' ).val() );

    if (! Form1) {
        $('#Form1').css('background', '#ffdddc');

        valid = false;
    } else {
        $('#Form1').css('background', '');
    }

    if (! Form2) {
        $('#Form2').css('background', '#ffdddc');
    } else {
        $('#Form2').css('background', '');
    }

    if (Form3 == "") {
        $('#Form3').css('background', '#ffdddc');
    } else {
        $('#Form3').css('background', '');
    }

    if (Form4 == "") {
        $('#Form4').css('background', '#ffdddc');
    } else {
        $('#Form4').css('background', '');
    }

    if (Form5 == "") {
        $('#Form5').css('background', '#ffdddc');
    } else {
        $('#Form5').css('background', '');
    }

    if (Form6 == "") {
        $('#Form6').css('background', '#ffdddc');
    } else {
        $('#Form6').css('background', '');
    }


    if (Form7 == "") {
        $('#Form7').css('background', '#ffdddc');
    } else {
        $('#Form7').css('background', '');
    }

    if (Form8 == "") {
        $('#Form8').css('background', '#ffdddc');
    } else {
        $('#Form8').css('background', '');
    }

    if (Form9 == "") {
        $('#Form9').css('background', '#ffdddc');
    } else {
        $('#Form9').css('background', '');
    }

    if (Form10 == "") {
        $('#Form10').css('background', '#ffdddc');
    } else {
        $('#Form10').css('background', '');
    }

    if (Form11 == "") {
        $('#Form11').css('background', '#ffdddc');
    } else {
        $('#Form11').css('background', '');
    }

    if (Form12 == "") {
        $('#Form12').css('background', '#ffdddc');
    } else {
        $('#Form12').css('background', '');
    }


    if (Form13 == "") {
        $('#Form13').css('background', '#ffdddc');
    } else {
        $('#Form13').css('background', '');
    }

    if (Form14 == "") {
        $('#Form14').css('background', '#ffdddc');
    } else {
        $('#Form14').css('background', '');
    }

    if (Form15 == "") {
        $('#Form15').css('background', '#ffdddc');
    } else {
        $('#Form15').css('background', '');
    }

    if (Form16 == "") {
        $('#Form16').css('background', '#ffdddc');
    } else {
        $('#Form16').css('background', '');
    }

    if (Form17 == "") {
        $('#Form17').css('background', '#ffdddc');
    } else {
        $('#Form17').css('background', '');
    }

    if (Form18 == "") {
        $('#Form18').css('background', '#ffdddc');
    } else {
        $('#Form18').css('background', '');
    }

    if (Form19 == "") {
        $('#Form19').css('background', '#ffdddc');
    } else {
        $('#Form19').css('background', '');
    }

    if (Form20 == "") {
        $('#Form20').css('background', '#ffdddc');
    } else {
        $('#Form20').css('background', '');
    }

    if (Form21 == "") {
        $('#Form21').css('background', '#ffdddc');
    } else {
        $('#Form21').css('background', '');
    }

    if (Form22 == "") {
        $('#Form22').css('background', '#ffdddc');
    } else {
        $('#Form22').css('background', '');
    }

    if (Form23 == "") {
        $('#Form23').css('background', '#ffdddc');
    } else {
        $('#Form23').css('background', '');
    }

    if (Form24 == "") {
        $('#Form24').css('background', '#ffdddc');
    } else {
        $('#Form24').css('background', '');
    }

    if (Form25 == "") {
        $('#Form25').css('background', '#ffdddc');
    } else {
        $('#Form25').css('background', '');
    }

    if (Form26 == "") {
        $('#Form26').css('background', '#ffdddc');
    } else {
        $('#Form26').css('background', '');
    }

    if (Form27 == "") {
        $('#Form27').css('background', '#ffdddc');
    } else {
        $('#Form27').css('background', '');
    }

    if (Form28 == "") {
        $('#Form28').css('background', '#ffdddc');
    } else {
        $('#Form28').css('background', '');
    }

    if (Form29 == "") {
        $('#Form29').css('background', '#ffdddc');
    } else {
        $('#Form29').css('background', '');
    }

    if (Form30 == "") {
        $('#Form30').css('background', '#ffdddc');
    } else {
        $('#Form30').css('background', '');
    }

    if (Form31 == "") {
        $('#Form31').css('background', '#ffdddc');
    } else {
        $('#Form31').css('background', '');
    }

    if (Form32 == "") {
        $('#Form32').css('background', '#ffdddc');
    } else {
        $('#Form32').css('background', '');
    }

    if (Form33 == "") {
        $('#Form33').css('background', '#ffdddc');
    } else {
        $('#Form33').css('background', '');
    }

    if (Form34 == "") {
        $('#Form34').css('background', '#ffdddc');
    } else {
        $('#Form34').css('background', '');
    }

    if (Form35 == "") {
        $('#Form35').css('background', '#ffdddc');
    } else {
        $('#Form35').css('background', '');
    }

    if (Form36 == "") {
        $('#Form36').css('background', '#ffdddc');
    } else {
        $('#Form36').css('background', '');
    }

    if (Form37 == "") {
        $('#Form37').css('background', '#ffdddc');
    } else {
        $('#Form37').css('background', '');
    }

    if (Form38 == "") {
        $('#Form38').css('background', '#ffdddc');
    } else {
        $('#Form38').css('background', '');
    }

    if (Form39 == "") {
        $('#Form39').css('background', '#ffdddc');
    } else {
        $('#Form39').css('background', '');
    }

    if (Form40 == "") {
        $('#Form40').css('background', '#ffdddc');
    } else {
        $('#Form40').css('background', '');
    }

    if (Form41 == "") {
        $('#Form41').css('background', '#ffdddc');
    } else {
        $('#Form41').css('background', '');
    }

    if (Form42 == "") {
        $('#Form42').css('background', '#ffdddc');
    } else {
        $('#Form42').css('background', '');
    }

    if (Form43 == "") {
        $('#Form43').css('background', '#ffdddc');
    } else {
        $('#Form43').css('background', '');
    }

    if (Form44 == "") {
        $('#Form44').css('background', '#ffdddc');
    } else {
        $('#Form44').css('background', '');
    }

    if (Form45 == "") {
        $('#Form45').css('background', '#ffdddc');
    } else {
        $('#Form45').css('background', '');
    }

    if (Form46 == "") {
        $('#Form46').css('background', '#ffdddc');
    } else {
        $('#Form46').css('background', '');
    }

    if (Form47 == "") {
        $('#Form47').css('background', '#ffdddc');
    } else {
        $('#Form47').css('background', '');
    }

    if (Form48 == "") {
        $('#Form48').css('background', '#ffdddc');
    } else {
        $('#Form48').css('background', '');
    }


    if (Form49 == "") {
        $('#Form49').css('background', '#ffdddc');
    } else {
        $('#Form49').css('background', '');
    }

    if (Form50 == "") {
        $('#Form50').css('background', '#ffdddc');
    } else {
        $('#Form50').css('background', '');
    }

    if (Form51 == "") {
        $('#Form51').css('background', '#ffdddc');
    } else {
        $('#Form51').css('background', '');
    }

    if (Form52 == "") {
        $('#Form52').css('background', '#ffdddc');
    } else {
        $('#Form52').css('background', '');
    }

    if (Form53 == "") {
        $('#Form53').css('background', '#ffdddc');
    } else {
        $('#Form53').css('background', '');
    }

    if (Form54 == "") {
        $('#Form54').css('background', '#ffdddc');
    } else {
        $('#Form54').css('background', '');
    }

    if (Form55 == "") {
        $('#Form55').css('background', '#ffdddc');
    } else {
        $('#Form55').css('background', '');
    }

    if (Form56 == "") {
        $('#Form56').css('background', '#ffdddc');
    } else {
        $('#Form56').css('background', '');
    }

    if (Form57 == "") {
        $('#Form57').css('background', '#ffdddc');
    } else {
        $('#Form57').css('background', '');
    }

    return valid;
}*/

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
            window.location.href = 'https://secure.meinauto.autoscout24.de/Authorize/Basic?url=' + encodeURIComponent(url);
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
