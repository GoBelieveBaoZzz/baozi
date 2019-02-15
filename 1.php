<?php

namespace beijing;

class Animal{
	public $obj='dog';
	static $name='大黄';
}

function getmsg(){
	echo '北京';
}

include ("./2.php");

getmsg();