<?php

return [

    /**
     * Customize the models that you want use.
     */
    'models' => [
        /**
         * Need to know where your user lives. :) 
         */
        'user' => App\User::class
    ],

    'table_names' => [
        
        /**
         * table that holds banned users
         */
        'banned_users'     => 'banned_users',

        /**
         * table that holds suspended users
         */
        'suspended_users'  => 'suspended_users',

        /**
         * Table that holds appeals from users
         */
        'appeals'          => 'appeals',

        /**
         * Table that holds user strikes
         */
        'user_strikes'     => 'user_strikes'

    ],

    'options' => [
        /**
         * Strike number that makes a user bannable
         */
        'ban_strike_limit' => 5,

        /**
         * Strike number that makes a user suspended
         */
        'suspension_strike_limit' => 3
    ]

];