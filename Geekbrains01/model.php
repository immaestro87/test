<?php

function dbCred()
{
	return [
		'host' => 'localhost',
		'user' => 'root',
		'pass' => '',
		'dbname' => 'test',	
	];
}

function dbInit()
{
	$cred = dbCred();
	$res = mysql_connect($cred['host'],$cred['user'],$cred['pass']);
	if (!$res){
		return false;
	}
	$res = mysql_select_db($cred['dbname']);
	return $res;
}

function dbQuery($sql)
{
	dbInit();
	$res = mysql_query($sql);
	if (false === $res){
		return false;
	}
	$ret = [];
	while($row = mysql_fetch_assoc($res)){
		$ret[] = $row;
	}
	return $ret;
}

function dbExec($sql)
{
	dbInit();
	$res = mysql_query($sql);
	if (false === $res){
		return false;
	}
	return $ret;
}