
<?php 
if( $_GET['submit']== "Enter")
{
    $f1=fopen("data.txt","r");
    $data=fread($f1,filesize("data.txt"));
    fclose($f1);
    $data2=$_GET['tf1']." ".$_GET['tf2'] ;
    $data3 = $data.$data2." ". $_GET['tf3']."\n";
    $f2=fopen("data.txt","w");
    fwrite($f2,$data3);
    fclose($f2);
}
else if($_GET['submit']=="Print")
{
    $f1=fopen("data.txt","r");
    $data=fread($fp,filesize("data.txt"));
    fclose($f1);
    echo $data;
}

?>