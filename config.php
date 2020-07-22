<?php
date_default_timezone_set('Asia/Hong_Kong');
define("FRONT_PAGE","front");
define('UPLOADS_DIR',dirname($_SERVER['DOCUMENT_ROOT']).'/uploads/');

//Branch Connection Details
define('USERDBIP',"localhost");
// DBs
define('USERDBNAME',"runningphdb");
// URL
define('SITEURL',"http://runningph.test");

define ('CURRENCY','Php');

// ADMIN IDS - temporary only
define("ADMIN_IDS",'1,1');

if (preg_match('/.test/', $_SERVER['HTTP_HOST'])) {
    define( 'ENV', 'local' );
} 
else {
    define( 'ENV', 'live' );
}

//CONNECTION

switch (ENV) {
    case 'local':
        define("DBHOST",USERDBIP);  

        // user 1
        define("DBUSER","root");
        define("DBPASS","root");     

        define("DBNAME",USERDBNAME);
        define("SITE_URL",SITEURL);
        break;
    default:
        define("DBHOST",USERDBIP);   

          // user 1
        define("DBUSER","root");
        define("DBPASS","root"); 

        define("DBNAME",USERDBNAME);
        define("SITE_URL",SITEURL);
} 
