<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo htmlentities(str_replace("\n\r","\n",$view_user),ENT_QUOTES,"utf-8")?></title>  
</head>
<body>
<link href='highlight/styles/shCore.css' rel='stylesheet' type='text/css'/>
<link href='highlight/styles/shThemeDefault.css' rel='stylesheet' type='text/css'/>
<script src='highlight/scripts/shCore.js' type='text/javascript'></script>
<script src='highlight/scripts/shBrushCpp.js' type='text/javascript'></script>
<script language='javascript'>
function draw(){
	SyntaxHighlighter.config.bloggerMode = false;
	SyntaxHighlighter.config.clipboardSwf = 'highlight/scripts/clipboard.swf';
	SyntaxHighlighter.highlight();
}
function printCode(){
         var bdhtml = window.document.body.innerHTML;	
         document.body.innerHTML=document.getElementById('printf_area').innerHTML;
        //var dom_printFine=document.getElementById('printFine_button');
        //dom_print.style.display="none";
        //dom_printFine.style.display="none";
        window.print();
        //history.back(-1);
        //window.setTimeout(500);
        //location.href='printer_view.php?id=<?php echo $id?>';
        window.document.body.innerHTML = bdhtml;
        window.location.reload();
}

</script>

<!--<input onclick="draw()" type="button" value="Line Number">-->
<input id="printf_button" onclick="printCode();" type="button" value="<?php echo $MSG_PRINTER?>">
<input id="printFine_button" onclick="location.href='printer.php?id=<?php echo $id?>';" type="button" value="<?php echo $MSG_PRINT_DONE?>">
<input id="back" onclick="location.href='printer.php'" value="返回" type="button">
<div id="printf_area">
<?php
echo htmlentities(str_replace("\n\r","\n",$view_user),ENT_QUOTES,"utf-8")."\n";
echo "-".htmlentities(str_replace("\n\r","\n",$view_school),ENT_QUOTES,"utf-8")."-".htmlentities(str_replace("\n\r","\n",$view_nick),ENT_QUOTES,"utf-8")."\n";
echo "<pre class='brush:c'>".htmlentities(str_replace("\n\r","\n",$view_content),ENT_QUOTES,"utf-8")."\n"."</pre>";
?>
<!--<input onclick="draw()" type="button" value="Line Number">-->
<!--<input onclick="window.print();" type="button" value="<?php echo $MSG_PRINTER?>">
<input onclick="location.href='printer.php?id=<?php echo $id?>';" type="button" value="<?php echo $MSG_PRINT_DONE?>">-->
<!--<img src="image/wx.jpg" height="100px" width="100px">-->
</div>
</body>
