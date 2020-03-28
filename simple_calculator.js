# Write a JavaScript to design a simple calculator to perform the following operations: sum,product, difference and quotient.









<!DOCTYPE HTML>
<html>
<head>
<style>
table, td, th
{
border: 1px solid black;
width: 33%;
text-align: center;
background-color: DarkGray;
border-collapse:collapse;
}
table { margin: auto; }
input { text-align:right; }
</style>
<script type="text/javascript">
function calc(clicked_id)
{
var val1 = parseFloat(document.getElementById("value1").value);
var val2 = parseFloat(document.getElementById("value2").value);
if(isNaN(val1)||isNaN(val2))
alert("ENTER VALID NUMBER");
else if(clicked_id=="add")
document.getElementById("answer").value=val1+val2;
else if(clicked_id=="sub")
document.getElementById("answer").value=val1-val2;
else if(clicked_id=="mul")
document.getElementById("answer").value=val1*val2;
else if(clicked_id=="div")
document.getElementById("answer").value=val1/val2;
}
function cls()
{
value1.value="0";
value2.value="0";
answer.value="";
}
</script>
</head>
<body>
<table>
