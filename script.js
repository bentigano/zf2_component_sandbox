$(document).ready(function(){
  
  $("#zend_debug").click(function(){
    $("#main").load("debug.php");
  });
  $("#zend_version").click(function(){
    $("#main").load("version.php");
  });
  
});