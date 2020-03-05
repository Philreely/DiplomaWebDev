<!DOCTYPE html>
<html>
  <head>
    <title>Lesson 6 : PHP</title>
  </head>
  
  <body>
    <?php
      echo "<p>this writes to html doc</p>";
      echo 5+5;
      echo "string 1"."string 2"
     
        $myString = "this is a string";
        echo $myString;
    
        if (4<5) {
          echo "four is less than five";
        }
        else {
          echo "the comparison is false";
        }
        
        for ($i=0;$i<5;$i++){
          echo "<p>this is the ".$i."th run of the for loop</p>";
        }
    
        $myAnimals = array ("ant", "bear", "cow");
        for ($i=0;$i<3;$i++){
          echo "<p>the element in the array is: ".$myAnimals[$i}."</p>"


/* html form */
         <form action="process.php" method="POST">
            <input type="text" name="username">
            <input type="password" name="password">
            <button type="submit">Login</button>
         </form>
                                                              



    ?>
  </body>
</html>

