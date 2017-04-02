<?php
include_once dirname(__FILE__)."/postHandle.php";
include_once dirname(__FILE__)."/logMgr.php";

class cmd extends postHandle
{
	public function handle()
	{
		logMgr::writeLog( "[cmd][handle]" );
		$result = array("msg"=>"Hello World!");
		echo json_encode($result);
	}
}

?>
