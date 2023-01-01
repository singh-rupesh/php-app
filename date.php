<?php
date_default_timezone_set("Asia/Kolkata");

echo ("<pre>");

echo(date("d-m-y"));

echo ("<hr>");

echo(date("D, d-M-Y"));

echo ("<hr>");

echo(date("l, d-M-Y"));

echo ("<hr>");

echo(date("Y"));

echo ("<hr>");

echo( date("d-m-y h:i:s A", time()));

echo ("<hr>");

echo(strtotime("now") . "<br>");

echo ("<hr>");

echo(strtotime("3 October 2005") . "<br>");

echo ("<hr>");

echo(strtotime("+5 hours") . "<br>");

echo ("<hr>");

echo(strtotime("+1 week") . "<br>");

echo ("<hr>");

echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");

echo ("<hr>");

echo(strtotime("next Monday") . "<br>");

echo ("<hr>");

echo(strtotime("last Sunday"));

echo ("<hr>");

echo(date("d-m-y", strtotime("last Sunday")));

echo ("</pre>");

?>