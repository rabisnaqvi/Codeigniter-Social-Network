function check_login() {
    var username = $('#log_username_field').val();
    var pass = $('#log_pass_field').val();
    if (!username && !pass) {
        return false;
    }
    var data = {
        'login': username,
        'pass': pass,
        'cb_csrf_secured': $('#cb_csrf_secured').val()
    }
    var request = $.ajax({
        type: 'POST',
        url: 'http://localhost/Codeigniter-Social-Network/ajax/login',
        data: data,
        dataType: 'json',
        encode: true
    }).done(function(data, e) {
        $('#cb_csrf_secured').val(data.cb_csrf_secured);
        if (data.error) {
            $('p#login_errors').text(data.error);
            e.preventDefault();
            return false;
        } else {
            location.reload();
            e.preventDefault();
            return false;
        }
    });
};