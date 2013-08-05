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
  
  $("#zend_config").click(function(){
    $("#main").load("config.php");
  });
  
  $("#zend_loader").click(function(){
    $("#main").load("loader.php");
  });
  
  $("#zend_session").click(function(){
    $("#main").load("session.php");
  });
  
});