<?php
$solution=$_POST['solution'];
$myfile = fopen("solution.txt", "w") or die("Unable to open file!");
fwrite($myfile,$solution);
fclose($myfile);
echo "修改成功";