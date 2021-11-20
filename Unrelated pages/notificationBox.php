<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php

echo "<div id='notification' style='background-color: white; width: 300px; height: 150px; position: absolute; top: 50%; left: 10%'>"
. "Hello is me"
. "</div>";
echo "<img src onerror=removeBox()>"
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script>
    function removeBox(){setTimeout(function(){
    $(document).ready(function(){
    $('#notification').remove();
  });},3000);}
  </script>
  
  
  