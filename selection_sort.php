# Write a PHP program to sort the student records which are stored in the
database using selection sort.








Goto Mysql and then type
create database weblab;
use weblab;
create table student(usnvarchar(10),name varchar(20),address varchar(20));





<!DOCTYPE html>
<html>
<body>
<style>
table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
border-collapse:collapse;
background-color:lightblue;
}
table { margin: auto; }
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "weblab";
$a=[];
// Create connection
// Opens a new connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);
