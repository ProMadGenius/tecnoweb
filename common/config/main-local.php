<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
           // 'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
           'dsn' => 'pgsql:host=mail.ficct.uagrm.edu.bo;dbname=db_grupo06sa',
           'username' => 'grupo06sa',
          'password' => 'grupo06grupo06',

            //////////////////////////////
          //  'dsn' => 'pgsql:host=localhost;dbname=proyectotecno',
           // 'username' => 'postgres',
            //'password' => 'tiempo16',


            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
