<?php
   // Array with names
   $a[] = "Android";
   $a[] = "B programming language";
   $a[] = "C programming language";
   $a[] = "D programming language";
   $a[] = "euphoria";
   $a[] = "F#";
   $a[] = "GWT";
   $a[] = "HTML5";
   $a[] = "ibatis";
   $a[] = "Java";
   $a[] = "K programming language";
   $a[] = "Lisp";
   $a[] = "Microsoft technologies";
   $a[] = "Networking";
   $a[] = "Open Source";
   $a[] = "Prototype";
   $a[] = "QC";
   $a[] = "Restful web services";
   $a[] = "Scrum";
   $a[] = "Testing";
   $a[] = "UML";
   $a[] = "VB Script";
   $a[] = "Web Technologies";
   $a[] = "Xerox Technology";
   $a[] = "YQL";
   $a[] = "ZOPL";
   $q ="";
   $q = $_REQUEST["q"];
   $hint = "";
   
   if ($q !== "") {
      $q = strtolower($q);
      $len = strlen($q);
      
      foreach($a as $name) {
      
         if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
               $hint = $name;
            }else {
               $hint .= ", $name";
            }
         }
      }
   }
   echo $hint === "" ? "Please enter a valid course name" : $hint;
?>
<html>
   <head>
      
      <style>
         span {
            color: green;
         }
      </style>
      
      <script>
         function showHint(str) {
            if (str.length == 0) {
               document.getElementById("txtHint").innerHTML = "";
               return;
            }else {
               var xmlhttp = new XMLHttpRequest();
					
               xmlhttp.onreadystatechange = function() {
                  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                     document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                  }
               }
               xmlhttp.open("GET", "php_ajax.php?q=" + str, true);
               xmlhttp.send();
            }
         }
      </script>
      
   </head>
   <body>
      
      <p><b>Search your favourite tutorials:</b></p>
      
      <form>
         <input type = "text" name="q" onkeyup = "showHint(this.value)">
      </form>
      
      <p>Entered Course name: <span id="txtHint"></span></p>
   
   </body>
</html>