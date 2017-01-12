<?php
return array(
	/*
	 * Client Info
	 */
	'appId' => '9001',
	'appSecret' => '9000',
	'token' => '654321',

	/*
	 * Server Info
	 */
	'serverSecret' => '1000001',
	'serverToken' => '123456',

	/*
	 *  Server check login URL
	 */
	'isLogin' => 'http://tpsso/index.php/Home/server/isLogin',

	/*
	 * Server Login URL
	 */
	'loginView' => 'http://tpsso/index.php/Home/server/index',

	/*
	 * Server Logout URL
	 */
	'logout' => 'http://tpsso/index.php/Home/server/logout',

	/*
	 * Ticket Checks
	 */
	'ticketChecks' => 'all', // session , cookie

	/*
	 * Ticket Store Name
	 */
	'ticketName' => 'ticket',

	/*
	 * user Session Name
	 */
	'userSessionName' => 'user',

	/*
	 * Per some seconds reCheck user's ticket from sso server
	 */
	'reCheckTime' => 90,
);
