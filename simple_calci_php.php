Write the PHP programs to do the following:
a) Implement simple calculator operations.








<html>
<head>
<style>
table, td, th
{
border: 1px solid black;
width: 35%;
text-align: center;
background-color: DarkGray;
}
table { margin: auto; }
input,p { text-align:right; }
</style>
</head>
<body>
<form method="post">
<table>
<caption><h2> SIMPLE CALCULATOR </h2></caption>>
<tr><td>First Number:</td><td><input type="text" name="num1" /></td>
<td rowspan="2"><input type="submit" name="submit"
value="calculate"></td></tr>
<tr><td>Second Number:</td><td><input type="text"
name="num2"/></td></tr>
</form>
<?php
if(isset($_POST['submit'])) // it checks if the input submit is filled
