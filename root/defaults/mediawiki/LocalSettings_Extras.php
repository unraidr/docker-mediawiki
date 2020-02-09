<?php
// @see https://www.mediawiki.org/wiki/Manual:Configuration_settings
# Protect against web entry
if ( !defined( 'MEDIAWIKI' ) ) {
    exit;
}
##########################################################################
##	Configuration settings											    ##
##	See https://www.mediawiki.org/wiki/Manual:Configuration_setting 	##
##  for an index of all supported configuration settings. 				##
##########################################################################


### Extra Configuration Settings ###


## Copyright
## See https://www.mediawiki.org/wiki/Manual:Configuration_settings#Copyright
## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
	#$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
	#$wgRightsUrl = "";
	#$wgRightsText = "";
	#$wgRightsIcon = "";


## Debug https://www.mediawiki.org/wiki/Manual:How_to_debug
	$wgShowExceptionDetails = true;
	#$wgShowDebugToolbar = true;
	#$wgShowDebug = true;
	#$wgDebugDumpSql = true;
	#$wgDebugLogFile = "/config/log/mediawiki/debug.log";


## Default User Options https://www.mediawiki.org/wiki/Manual:$wgDefaultUserOptions
## Examples with default values
	$wgDefaultUserOptions['watchdefault'] = 1;			// Add pages the user edits to their watchlist, checking the "Watch this page" by default on all edited pages.
	$wgDefaultUserOptions['date'] = 'default';			// Date format. Options: 'default', 'mdy', 'dmy', 'ymd', 'ISO 8601', 'persian'
	$wgDefaultUserOptions['timecorrection'] = '0';		// A fixed timezone offset or ZoneInfo zone


## Email https://www.mediawiki.org/wiki/Manual:$wgSMTP
	$wgSMTP = [
		'host'     => "mail.example.com",		// Could also be an IP address. Where the SMTP server is located
		'IDHost'   => "example.com",     	 	// Generally this will be the domain name of your website (aka mywiki.org)
		'port'     => 25,               	                                 	// Port to use when connecting to the SMTP server
		'auth'     => true,              	 	// Should we use SMTP authentication (true or false)
		'username' => "my_user_name",    	 	// Username to use for SMTP authentication (if being used)
		'password' => "my_password"      	 	// Password to use for SMTP authentication (if being used)
	];


## File Uploads https://www.mediawiki.org/wiki/Manual:Configuring_file_uploads
	#$wgEnableUploads = true;											// Enable uploads
	$wgUploadPath = "/assets"; # root path set in nginx.conf			// Alternet path to file uploads. The URL of the upload directory.
	$wgUploadDirectory = "/config/assets";								// Alternet path to file uploads. The file system path of the folder where uploaded files will be stored.
	$wgDeletedDirectory = "{$wgUploadDirectory}/deleted";				// Default path for to place deleted uploads in. 
	#$wgUploadSizeWarning = 1073741824; // 1024*1024*1024 = 1 GB		// Maximum file upload size. If you increase this valve you must also update the config/php/php-local.ini file
	#$wgMaxUploadSize = 1073741824; // 1024*1024*1024 = 1 GB			// Maximum file upload size. If you increase this valve you must also update the config/php/php-local.ini file
	/* $wgFileExtensions = array(
			'png',
			'gif',
			'jpg',
			'jpeg',
			'doc',
			'xls',
			'mpp',
			'pdf',
			'ppt',
			'tiff',
			'bmp',
			'docx',
			'xlsx',
			'pptx',
			'ps',
			'odt',
			'ods',
			'odp',
			'odg'
		);																// Allowed file extension types
	*/					
	#$wgAllowCopyUploads = true;										// Uploading directly from a URLs
	#$wgCopyUploadsFromSpecialUpload = true;							// Uploading directly from a URLs
	#$wgGroupPermissions['user']['upload_by_url'] = true;				// In order to use this feature, users must have the user right upload_by_url.


## Logo and Favicon
## $wgLogo is commented out in LocalSettings.php
## A default Logo and Favicon are located at /config/assets/resources/
## root for /assets is /config set in NGINX config
	$wgLogo = "/assets/resources/logo.png";
	$wgFavicon = "/assets/resources/favicon.ico";


## Short URLs See https://www.mediawiki.org/wiki/Manual:Short_URL
## $wgScriptPath = ""; //defined in LocalSettings.php
	$wgArticlePath = "/$1";
	$wgUsePathInfo = true;
	$wgScriptExtension = ".php";


## User Rights https://www.mediawiki.org/wiki/Manual:User_rights
// Make wiki private
	#$wgGroupPermissions['*']['read'] = false;
	#$wgGroupPermissions['*']['createaccount'] = false;
	#$wgGroupPermissions['*']['edit'] = false;


## Uncomment this to disable output compression
	# $wgDisableOutputCompression = true;

## Make wiki read only by file https://www.mediawiki.org/wiki/Manual:$wgReadOnlyFile
$wgReadOnlyFile = "/config/www/mediawiki/LOCK";
