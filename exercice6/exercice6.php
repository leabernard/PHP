<html>
<head>
<link rel="stylesheet" href="style.css">

</head>
<body>
<form action="" method="GET">

    <input type="text" name="text">
    <input type="submit">

</form>
    <?php
  
  if(isset($_GET['text'])){
    echo "<span class='text'>".$_GET['text']. "</span>";
  }

highlight_file(__FILE__);





?>



</body>


</html>