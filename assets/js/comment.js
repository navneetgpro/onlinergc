$(document).ready(function () {
    getCommets(blogid);
});
$(document).on('click', '.addcomment', function () {
    const tget = this;
    let btext = $(tget).text();
    $(tget).prop('disabled', true);
    var form_data = $('#formid').serialize();
    $.ajax({
        type: 'post',
        url: baseurl + "/blog/addcomment",
        data: form_data,
        dataType: 'json',
        beforeSend: function () {
            $(tget).text('processing...');
            $('.error').html('');
            return;
        },
        success: function (data) {
            var data = eval(data);
            toastr[data.status === "ok" ? "success" : "error"](data.data);
            $(tget).text(btext);
            $(tget).prop('disabled', false);
            if (data.status === "ok") {
                getCommets(blogid);
                $("#formid")[0].reset();
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
function getCommets(id) {
    $.ajax({
        url: baseurl + "/blog/blogcomment/" + id,
        dataType: 'json',
        success: function (data) {
            var data = eval(data);
            $('#blog_commets').html(data.comments);
            $('.ccomment').html(data.count);
        }
    });
}