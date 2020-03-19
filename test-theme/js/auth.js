(function($) {
    $(document).ready(function() {
        $('#loginBtn').click(function(params) {
            let log = $('#user_name').val();
            let pwd = $('#password').val();
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    action: 'login',
                    log: log,
                    pwd: pwd,
                },
                success: function( data ) {
                    alert('Ви успішно увійшли')
                    location.href = 'http://wordpress/info-page/';
                }
            });

        });
        $('#registerBtn').click(function(params) {
            let user_email = $('#register_email').val();
            let user_login = $('#register_name').val();
            let password = $('#register_pwd').val();
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    action: 'register',
                    user_email: user_email,
                    user_login: user_login,
                    password: password,
                },
                success: function( data ) {
                    location.href = 'http://wordpress/login-test/';
                }
            });

        });

    })
})(jQuery);