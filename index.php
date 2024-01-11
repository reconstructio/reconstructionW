<?php
  $name = $_GET['name'];
  $php_content = ("./content/$name.php");
  $inc_content = ("./content/$name.inc");

  if(strpos($name,'html_tag') !== false){
  include("./content/$name.inc");
  $inc_file = "";
  }elseif($name >= "0" and file_exists($php_content) and file_exists($inc_content)){
  include("./content/$name.php");
  $inc_file = './content/'.$name.'.inc';
  }elseif($name == ''){
  include("./content/index.php");
  $inc_file = "./content/index.inc";
  }else{
  include("./content/index.php");
  $inc_file = "./content/index.inc";
  }

include("./thema/thema.php");
?>
