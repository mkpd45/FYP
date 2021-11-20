<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","ajaxphp.php?q="+str,true);
  xmlhttp.send();
}

function showNotification() {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","notificationBox.php",true);
  xmlhttp.send();
}
</script>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

    <form action="ajaxphp.php" method="get">
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<option value="27">27 Years old</option>
<option value="28">28 Years old</option>
<option value="29">29 Years old</option>
<option value="">Glenn Quagmire</option>
</select>
</form>
    <button onclick=showNotification()>Show Notification</button>
<br>
<div id="txtHint"><b>Person info will be listed here.</b></div>


</body>
</html>