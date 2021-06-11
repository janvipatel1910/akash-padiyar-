<?

$con = mysql_connect("root","localhost"," ");
if ($con)
{
    echo " Connection open"; 
}
else
{
    echo  " Connection not open";
}
?>