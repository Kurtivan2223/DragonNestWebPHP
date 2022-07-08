<?php

$config["page_title"] = "Dragon Nest";

/*===================================================================
If you see a white screen or have an issue, you can enable it to see the errors.
Note that after testing, be sure to disable this option.
=====================================================================*/
$config['debug_mode'] = true; // ENABLE Debug mode if you got blank screen or 503 error, to see what happen?

/*===================================================================
MSSQL SERVER INFORMATION
db_host
    Database Host
db_port
    Database Port
db_user
    Database Username
db_pass
    Database Password
db_member_dbname
    DNMembership Database DBName
db_world_dbname
    DNWorld Database DBName
=====================================================================*/
$config['db_host'] = '127.0.0.1';
$config['db_port'] = '1433';
$config['db_user'] = 'DragonNest';
$config['db_pass'] = 'uZBfDg7e6LZxZfM';
$config['db_member_dbname'] = 'DNMembership';
$config['db_world_dbname'] = 'DNWorld';

/*===================================================================
SMTP config.
We need this part to send an email. (used for restore password and 2FA)
You can use your own SMTP or Gmail/Yahoo/Hotmail and etc
smtp_host
    Specify main and backup SMTP servers
smtp_port
    TCP port to connect to
smtp_auth
    Enable SMTP authentication
smtp_user
    SMTP username
smtp_pass
    SMTP password
smtp_secure
    Enable TLS encryption, `ssl` also accepted
smtp_mail
    Send emails by ...
=====================================================================*/
$config['smtp_host'] = 'smtp1.example.com';
$config['smtp_port'] = 587;
$config['smtp_auth'] = true;
$config['smtp_user'] = 'user@example.com';
$config['smtp_pass'] = 'SECRET';
$config['smtp_secure'] = 'tls';
$config['smtp_mail'] = 'no-reply@example.com';