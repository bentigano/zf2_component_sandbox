$(document).ready(function(){
  
  $("#zend_debug").click(function(){
    $("#main").load("debug.php");
  });
  
  $("#zend_log").click(function(){
    $("#main").load("logger.php");
  });
  
  $("#zend_version").click(function(){
    $("#main").load("version.php");
  });
  
});