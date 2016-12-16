<?php
return array(
	//'配置项'=>'配置值'
	/*
	 * Client Info
	 */
	'appId' => '9001',
	'appSecret' => '9000',
	'token' => '654321',

	/*
	 * Server Info
	 */
	'serverId' => '1000000',
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
	 * Server Login Controller
	 */
	'loginController' => 'http://tpsso/index.php/Home/server/login',

	/*
	 * Server check ticket Controller
	 */
	'checkTicketUrl' => 'http://tpsso/index.php/Home/server/checkTicket',

	/*
	 * Ticket Checks
	 */
	'ticketChecks' => 'all', // session , cookie

	/*
	 * Ticket Store Name
	 * ticket = ['id'=>'Rand()','create_at'=>'timestamp','expire_time'=>'6000','user'=>'encrypted','clients'=>['client1','client2']]
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
