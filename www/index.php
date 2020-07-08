<html lang="zh-cn" data-blockbyte-bs-uid="70629" class="no-touch">
<head>
  <meta charset="utf-8">
  <title>世界高峰前三</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>

<body>
<div class="container" style="display: table;width: auto;margin-left: auto;margin-right: auto;">
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1>Please search for the top 3 mountains,we will show it to you.</h1>
<form>
  <div class="form-group">
    <label for="aaa" style="color:black">mount num(eg.one)</label>
    <input type="text" class="form-control" id="aaa" name="num">
  </div>
  <button type="submit" class="btn btn-primary">go!!!</button>
</form>
<?php
error_reporting(0);
$name = $_GET["num"];

if(isset($name))
{
    if($name==="one"||$name==="two"||$name==="three")
    {
        $filename = "tour/$name.php";
         echo file_get_contents($filename);
    }
    else
    {
          if(!preg_match('/data:|https:|http:|gopher:|file:|phar:|php:|zip:|dict:|imap:|ftp:|input|filter|flag/i',$name))
          {
            
            $url=file_get_contents($name);
            echo($url);
          }
          else
          {
            die("can you pass it and then read index.php? ");
          }
    }
}
#<!---next c2Vzcw==.php--> 
?>
</div>
</body>
