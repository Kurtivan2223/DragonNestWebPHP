<?php
    use Medoo\Medoo;

    class Database
    {
        public static $membership;
        public static $world;

        public static function db_connect()
        {
            self::$membership = new Medoo([
                'database_type' => 'mssql',
                'host' => get_config('db_host'),
                'database' => get_config('db_member_dbname'),
                'username' => get_config('db_user'),
                'password' => get_config('db_pass'),
                'port' => get_config('db_port')
            ]);

            self::$world = new Medoo([
                'database_type' => 'mssql',
                'host' => get_config('db_host'),
                'database' => get_config('db_world_dbname'),
                'username' => get_config('db_user'),
                'password' => get_config('db_pass'),
                'port' => get_config('db_port')
            ]);
        }
    }