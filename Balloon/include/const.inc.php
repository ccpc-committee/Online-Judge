<?php if(file_exists("include/db_info.inc.php")){
		require_once("include/db_info.inc.php");
	if(isset($OJ_LANG)){
		require_once("./lang/$OJ_LANG.php");
	}
}
$judge_result=Array($MSG_Pending,$MSG_Pending_Rejudging,$MSG_Compiling,$MSG_Running_Judging,$MSG_Accepted,$MSG_Presentation_Error,$MSG_Wrong_Answer,$MSG_Time_Limit_Exceed,$MSG_Memory_Limit_Exceed,$MSG_Output_Limit_Exceed,$MSG_Runtime_Error,$MSG_Compile_Error,$MSG_Compile_OK,$MSG_TEST_RUN);
$jresult=Array($MSG_PD,$MSG_PR,$MSG_CI,$MSG_RJ,$MSG_AC,$MSG_PE,$MSG_WA,$MSG_TLE,$MSG_MLE,$MSG_OLE,$MSG_RE,$MSG_CE,$MSG_CO,$MSG_TR);
$judge_color=Array("gray","gray","orange","orange","green","red","red","red","red","red","red","navy ","navy");
$language_name=Array("C","C++","Pascal","Java","Ruby","Bash","Python","PHP","Perl","C#","Obj-C","FreeBasic","Scheme","Clang","Clang++","Lua","JavaScript","Go","Other Language");
$language_ext=Array( "c", "cc", "pas", "java", "rb", "sh", "py", "php","pl", "cs","m","bas","scm","c","cc","lua","js","go" );
$PID="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
$ball_color=Array('red','blue','darkslategray','cadetblue1','pink','black','yellow','maroon','magenta','darkblue','darkorchid');
$ball_name=Array('红色','蓝色','墨绿色','蒂夫尼蓝色','粉红色','黑色','黄色','咖啡色','玫瑰红','深蓝色','深紫色');
?>
