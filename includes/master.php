<?php

	const CODE_VERSION = 27;
	const SHOWCARUI_VERSION = 2;
	const DEBUG_CURL_REQUEST = false;

	foreach (glob(__DIR__ . "/../" . "DML/*.php") as $filename){
		require_once $filename;
	}

	foreach (glob(__DIR__ . "/../" . "BLL/*.php") as $filename){
		require_once $filename;
	}

	include_once(__DIR__ . '/' .'../../common-core/index.php');

	if ( empty( $_SESSION ) ) @session_start();

