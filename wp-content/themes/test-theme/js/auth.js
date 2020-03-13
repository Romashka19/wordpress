(function($) {
    $(document).ready(function() {
        $('#loginBtn').click(function(params) {
            let user_name = $('#user_name').val();
            let password = $('#password').val();
            console.log(user_name);
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    action: 'login',
                    user_name: user_name,
                    password: password,
                },
                success: function( data ) {
                    $('#loginBtn').text('Отправить');
                    alert( data );
                }
            });

        });
    })
})(jQuery);