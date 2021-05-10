<?php
//check if .env exist
//if exist check variables if are set
//if not create variables to .env via I/O by user keyboard
//if all is ready ask if send message.

//email
//API Key/Password
//Days in past to read raport

//Need Clocify API
//Need SMTP - maybe gmail
require_once 'vendor/autoload.php';

define("CLOCKIFY_REPORTS_BREAKPOINT","https://reports.api.clockify.me/v1");
define("CLOCKIFY_BREAKPOINT","https://api.clockify.me/api/v1");
define("CLOCKIFY_API_HEADER_NAME","X-Api-Key");

//$dotenv = Dotenv\Dotenv::