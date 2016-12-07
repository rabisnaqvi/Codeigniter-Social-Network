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
function create_post() {
	var content = $('#post_content').val();
	if(!content) {
		$('#new_post_content').addClass('has-error');
		return false;
	} else {
		var formData = new FormData($('form#new_post_form')[0]);
    for (var key in formData) {
    if (key == 'cb_csrf_secured') {
        formData.splice(key, 1);
    }
    }
    formData.append("cb_csrf_secured", $('#cb_csrf_secured').val());
    var request = $.ajax({
        url: "http://localhost/Codeigniter-Social-Network/Ajax/new_post",
        type: 'POST',
        data: formData,
        cache: false,
        dataType: 'JSON',
        contentType: false,
        success: function (data) {
            $('form#new_post_form')[0].reset();
            if(data.error){
                if(data.error != '<p>You did not select a file to upload.</p>'){
                $('#new_post_errors').text(data.error);
                $('#new_post_done').empty();
            }
            }
            if(!data.error || data.error == '<p>You did not select a file to upload.</p>') {
            $('#new_post_errors').empty();
            $('#new_post_done').text('Post Created');
            $('#new_post_content').removeClass('has-error');
            }
            $('#cb_csrf_secured').val(data.cb_csrf_secured);
        },
        processData: false
    });
	}
}