<?php

namespace beijing\haidian;
function getmsg(){
	echo "大海";
}

namespace shanghai\pituo;
function getmsg(){
	echo "文档";
}

\beijing\haidian\getmsg();//完全限定



use beijing\haidian;
haidian\getmsg();