<html lang="zh-cn" data-blockbyte-bs-uid="70629" class="no-touch">
<head>
  <meta charset="utf-8">
 <title>sess</title></head>

<body>
<div class="container" style="display: table;width: auto;margin-left: auto;margin-right: auto;">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1>ByPass!!!</h1>
</div>
<!---
error_reporting(0);
if(isset($_GET['sessss'])){
    if(";" === preg_replace('/[a-zA-Z0-9_]+\((?R)?\)/', '', $_GET['sessss']) ) {
        
        if (!preg_match('/na|info|dec|oct|hex|log|strlen|et|dir|ls|exp|bin|info|php|contens|file/i', $_GET['sessss'])) {
            
               eval($_GET['sessss']);
        } else {
            die("hacker!");
        }
  }
  else{
      die("try again,i don't like parameter");
  }
}

read the /flag
--->


<?php
error_reporting(0);
if(isset($_GET['sessss'])){
    if(";" === preg_replace('/[a-zA-Z0-9_]+\((?R)?\)/', '', $_GET['sessss']) ) {
        
        if (!preg_match('/na|info|dec|oct|hex|log|strlen|et|dir|ls|exp|bin|info|php|contens|file/i', $_GET['sessss'])) {
            
               eval($_GET['sessss']);
        } else {
            die("hacker!");
        }
  }
  else{
      die("try again,i don't like parameter");
  }
}