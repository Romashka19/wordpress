(function($) {
    $(document).ready(function() {
        $('#edit_post').click(function(params) {
            let post_title = $('#title').val();
            let post_content = $('#content').val();
            let post_id = $('#post_id').val();
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    action: 'edit',
                    post_title:post_title,
                    post_content:post_content,
                    post_id:post_id,
                },
                success: function( data ) {
                    location.href = 'http://wordpress/info-page/';
                }
            });

        });
        $('#delete_post').click(function(params) {
            let post_id = $('#post_id').val();
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data:{
                    action: 'delete',
                    post_id:post_id,
                },
                success: function( data ) {
                    location.href = 'http://wordpress/info-page/';
                }
            });

        });

    })
})(jQuery);