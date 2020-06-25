const baseurl = window.location.origin;
// const baseurl = 'http://localhost/onlinergc';
// Make Sure SW are supporated
/*  if ('serviceWorker' in navigator) {
    window.addEventListener('load', () => {
        navigator.serviceWorker
            .register(baseurl + '/assets/sw_cached_files.js')
           .then(reg => console.log('Service Worker: Registered'))
        .catch(err => console.log(`Service Worker: Error: ${err}`)) 
    })
} */
// Submit form
$(document).on("click", ".ajaxform", function () {
    var tget = this;
    var btext = $(tget).text();
    $(tget).prop('disabled', true);
    var omsgb = $(tget).attr('data-msg');
    var aftreloadb = $(tget).attr('data-aftreload');
    var isformresetb = $(tget).attr('data-pvntreset');
    var control = $(tget).attr('data-control');
    var formidg = $(tget).attr('data-form');
    var omsg = (typeof omsgb !== typeof undefined && omsgb !== false) ? omsgb : 'outmsg';
    var aftreload = (typeof aftreloadb !== typeof undefined && aftreloadb !== false) ? aftreloadb : "false";
    var isformreset = (typeof isformresetb !== typeof undefined && isformresetb !== false) ? isformresetb : "false";

    var form_data = new FormData($('#' + formidg)[0]);
    $.ajax({
        type: 'post',
        url: baseurl + "/" + control,
        data: form_data,
        dataType: 'json',
        processData: false,
        contentType: false,
        beforeSend: function () {
            $(tget).text('processing...');
            $('.error').html('');
            return;
        },
        success: function (data) {
            $(tget).text(btext);
            var data = eval(data);
            const tt = data.status === "ok" ? "success" : "error";
            $(tget).prop('disabled', false);

            var outmsg = data.data;
            if (data.errarray === "true") {
                $('#' + omsg).html('');
                $.each(outmsg, function (i, errmsg) {
                    $(`#${i}-error`).html(errmsg);
                });
            } else {
                toastr[tt](data.data);
                if (data.status === "ok") {
                    if (isformreset === "false") { $("#" + formidg)[0].reset(); }
                    if (aftreload === "true") { location.reload(); }
                }
            }
        },
        error: function (jqXHR, exception) {
            $(tget).text(btext);
            $(tget).prop('disabled', false);
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else if (jqXHR.status == 404) {
                alert('Requested page not found. [404]');
            } else if (jqXHR.status == 500) {
                alert('Internal Server Error [500].');
            } else if (exception === 'parsererror') {
                alert('Requested JSON parse failed.');
            } else if (exception === 'timeout') {
                alert('Time out error.');
            } else if (exception === 'abort') {
                alert('Ajax request aborted.');
            } else {
                alert('Uncaught Error.\n' + jqXHR.responseText);
            }
        }
    });
    return false;
});
// validate code start
var typingTimer, vldthis;
var doneTypingInterval = 800;

$(document).on('keyup', '.codefvaldid', function () {
    clearTimeout(typingTimer);
    typingTimer = setTimeout(vlidatecode, doneTypingInterval);
});
$(document).on('keydown', '.codefvaldid', function () { clearTimeout(typingTimer); });

var requestSent = false;
function vlidatecode() {
    var $input = $('.codefvaldid');
    var codefvald = $input.val();
    var vcont = $input.attr('data-contlr');
    var mincar = $input.attr('data-mincar');
    var ists = document.getElementById('iconstatus');
    if (codefvald.trim()) {
        if (codefvald.length > mincar) {
            if (!requestSent) {
                requestSent = true;
                $.ajax({
                    url: baseurl + "/" + vcont,
                    type: 'post',
                    dataType: 'json',
                    data: { codefvald },
                    beforeSend: function () { ists.style.color = "#686464"; ists.innerHTML = "&#xf110"; },
                    success: function (data) {
                        var data = eval(data);
                        if (data.stus === "true") {
                            $input.val(data.msg); ists.innerHTML = "&#xf00c"; ists.style.color = "#4CAF50"; $('#validstus').val('true');
                        } else { ists.innerHTML = "&#xf00d"; ists.style.color = "#e43e23"; $('#validstus').val('false'); }
                        requestSent = false;
                    }
                });
            }
        } else {
            ists.innerHTML = "&#xf00d"; ists.style.color = "#e43e23"; $('#validstus').val('false');
        }
    } else {
        ists.innerHTML = "&#xf104"; ists.style.color = ""; $('#validstus').val('false');
    }
}
// validate code end
// image preview
var reader = new FileReader();
reader.onload = function (e) {
    document.getElementById('blah').src = e.target.result;
}
$(document).on("input", ".proup", function () {
    var input = this;
    if (input.files && input.files[0]) {
        reader.readAsDataURL(input.files[0]);
    }
});
$(document).on('click', '#blah', function (e) {
    const img = document.getElementById('blah');
    const image = new Image();
    image.src = img.src;
    const w = window.open("");
    w.document.write(image.outerHTML);
    return false;
});
// ajax page load
$(document).on('click', "a[rel='tab']", function () {
    var url = window.location.href;
    var ethis = this;
    pageurl = $(ethis).attr("href");
    if (url !== pageurl) {
        $.ajax({
            url: pageurl + "?rel=tab",
            beforeSend: function () { $('.loader').fadeIn(); },
            success: function (data) {
                $('.loader').fadeOut();
                $("#mainapp").html(data);
                window.history.pushState({ path: pageurl }, "", pageurl);
                $(".vertical-nav-menu li a").removeClass("mm-active");
                $(ethis).addClass("mm-active");
            },
            error: function (jqXHR, exception) {
                $('.loader').fadeOut();
                if (jqXHR.status === 0) {
                    alert('Not connect.\n Verify Network.');
                } else { alert("Some error to open this page"); }
            }
        });
    }
    return false;
});
// Delete table
$(document).on("click", ".ajaxdel", function () {
    if (window.confirm("Are You Sure?")) {
        var el = this;
        var delid = el.id;
        var dcontrol = $(el).attr('data-control');
        $.ajax({
            url: baseurl + "/" + dcontrol,
            type: 'POST', dataType: 'json',
            data: { delid },
            success: function (data) {
                var data = eval(data);
                if (data.error === "false") {
                    $(el).closest('tr').css('background', '#ff6347').fadeOut(250, function () {
                        $(el).remove();
                    });
                } else { alert("Someting not right,please try again!"); }
            }
        });
    } else { return false; }
});
$(window).on("popstate", function (evt) {
    $.ajax({
        url: location.pathname + '?rel=tab',
        beforeSend: function () { $('.loader').fadeIn(); },
        success: function (data) { $('.loader').fadeOut(); $('#mainapp').html(data); },
        error: function (jqXHR, exception) {
            $('.loader').fadeOut();
            if (jqXHR.status === 0) {
                alert('Not connect.\n Verify Network.');
            } else { alert("Some error to open this page"); }
        }
    });
});