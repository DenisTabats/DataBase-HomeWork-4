<?php
$link=false;
function OpenDB()
{
    global $link;
    $link = mysqli_connect("localhost", "root", "", "turfirma");
    mysqli_query($link, "SET NAMES UTF8");
}
function CloseDB()
{
    global $link;
    mysqli_close($link);
}
function getInfo()
{
    global $link;
    OpenDB();
    $result=mysqli_query($link, "SELECT * FROM clients");
    CloseDB();
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}
function deleteInfo($id)
{
    global $link;
    OpenDB();
    $delete=mysqli_query($link,"DELETE FROM clients WHERE IDclient=$id");
    CloseDB();
    return $delete;
}
function addInfo($fio, $passport, $visa, $status, $dateVisa)
{
    global $link;
    OpenDB();
    $add=mysqli_query($link, "INSERT into clients (fio, passport, visa, status, dateVisa) value ('$fio', '$passport', '$visa', '$status', '$dateVisa')");
    CloseDB();
    return $add;
}
?>