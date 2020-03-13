<?php

class Counter{

    public function init(){
        add_action( 'wp_login', array($this, 'count_login'), 10 , 2);
        add_filter( 'manage_users_columns', array( $this, 'add_stats_columns' ) );
        add_filter( 'manage_users_custom_column', array( $this, 'fill_stats_columns' ), 10, 3 );
    }


    public function count_login($user_login, $user){

        $count = get_user_meta( $user->ID, 'sp_login_count', true );
        if ( ! empty( $count ) ) {
            $login_count = get_user_meta( $user->ID, 'sp_login_count', true );
            update_user_meta( $user->ID, 'sp_login_count', ( (int) $login_count + 1 ) );
        }
        else {
            update_user_meta( $user->ID, 'sp_login_count', 1 );
        }
    }

    public function add_stats_columns( $columns ) {
        $columns['login_stat'] = __( 'Auth Count' );
        return $columns;
    }

    public function fill_stats_columns($empty, $column_name, $user_id){

        if( 'login_stat' == $column_name){
            if(get_user_meta($user_id, 'sp_login_count', true) !== ''){
                $login_count = get_user_meta($user_id, 'sp_login_count', true);
                return "<strong>$login_count</strong>";

            }
        }
        return $empty;
    }


    public static function get_instance() {
        static $instance;
        if ( ! isset( $instance ) ) {
            $instance = new self();
            $instance->init();
        }

        return $instance;
    }
}

Counter::get_instance();