 <?php 
     session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Desktop - 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>

 <body bgcolor="#1E1E1E">

  <div id="logo">
    <?php
    include('head.php');
    ?>
  </div>

  <div>
    <a href="#"> <input type="button" name="button" class="buttons" value="All"></a>
    <a href="#"> <input type="button" name="button" class="buttons" value="Artists"></a>
    <a href="#"> <input type="button" name="button" class="buttons" value="Song"></a>
    <a href="#"> <input type="button" name="button" class="buttons" value="Album"></a>
    <a href="#"> <input type="button" name="button" class="buttons" value="Producers"></a>
    <a href="#"> <input type="button" name="button" class="buttons" value="Song writer"></a>
    <a href="#"> <input type="button" name="button" class="buttons" value="Composer"></a>
    <a href="#"> <input type="button" name="button" class="buttons" value="Genre"></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <a href="#"> <input type="button" name="button" class="buttons" value="filter" id="filter"></a>
    <i class="fa fa-filter"></i>
  </div>

  <h2 class=txt>
      Top Results
  </h2>
  <center class="conts">
       <?php
         include('config.php');

          //$sql="SELECT * FROM artists where category ='top_artists'";
            $sql="SELECT * FROM top_result where title ='top_result'";
            $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     
         echo "<table cellspacing=10 cellpadding=0 border=1 bgcolor=#1E1E1E>";
         $count=0;
         while($row=mysqli_fetch_assoc($sqlqr))
         {
              echo "<div class='cont'>";
            
                if($count==0)
                {
                    echo "<tr>"; 
                    echo "<td>";
                    echo "<a href='addtocart.php?id=".$row['id']."'> <img src='./img/".$row['image']."'width=200 height=257> </a>";
                    echo "<h3>".$row['name']."</h2>";
                    echo "<h4>".$row['category']."</h4>";

                    echo "</div>";
                }
                else
                {
                    echo "<div class='cont'>";

                    echo "<td>";
                    echo "<a href='addtocart.php?id=".$row['id']."'><img src='./img/".$row['image']."'width=200 height=257></a>";
                    echo "<h3>".$row['name']."</h2>";
                    echo "<h4>".$row['category']."</h4>";

                    echo "</div>";
                }
                $count++;
                
                if($count==5)
                {
                  $count=0;
                } 
          }
         echo "</tr>";
         echo "</table>";
        ?>
  </center>

    <h2 class=txt>
      Songs
  </h2>
  <center class="conts">
       <?php
         include('config.php');

            $sql="SELECT * FROM top_result where title ='song'";
            $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     
         echo "<table cellspacing=10 cellpadding=0 border=1 bgcolor=#1E1E1E>";
         $count=0;
         while($row=mysqli_fetch_assoc($sqlqr))
         {
              echo "<div class='cont'>";
            
                if($count==0)
                {
                    echo "<tr>"; 
                    echo "<td>";
                    echo "<a href='addtocart.php?id=".$row['id']."'> <img src='./img/".$row['image']."'width=200 height=257></a>";
                    echo "<h3>".$row['name']."</h2>";
                    echo "<h4>".$row['category']."</h4>";

                    echo "</div>";
                }
                else
                {
                    echo "<div class='cont'>";

                    echo "<td>";
                    echo "<a href='addtocart.php?id=".$row['id']."'><img src='./img/".$row['image']."'width=200 height=257></a>";
                    echo "<h3>".$row['name']."</h2>";
                    echo "<h4>".$row['category']."</h4>";

                    echo "</div>";
                 }
                $count++;
                
                if($count==5)
                {
                  $count=0;
                } 
          }
         echo "</tr>";
         echo "</table>";
        ?>
  </center>

    <h2 class=txt>
      Album
  </h2>
  <center class="conts">
       <?php
         include('config.php');

         $sql="SELECT * FROM top_result where title ='album'";
            $sqlqr=mysqli_query($con,$sql) or die("failed to fetch: ".mysqli_error());
     
         echo "<table cellspacing=10 cellpadding=0 border=1 bgcolor=#1E1E1E>";
         $count=0;
         while($row=mysqli_fetch_assoc($sqlqr))
         {
              echo "<div class='cont'>";
            
                if($count==0)
                {
                    echo "<tr>"; 
                    echo "<td>";
                    echo "<a href='addtocart.php?id=".$row['id']."'> <img src='./img/".$row['image']."'width=200 height=257></a>";
                    echo "<h3>".$row['name']."</h2>";
                    echo "<h4>".$row['category']."</h4>";

                    echo "</div>";
                }
                else
                {
                    echo "<div class='cont'>";

                    echo "<td>";
                    echo "<a href='addtocart.php?id=".$row['id']."'><img src='./img/".$row['image']."'width=200 height=257></a>";
                    echo "<h3>".$row['name']."</h2>";
                    echo "<h4>".$row['category']."</h4>";

                    echo "</div>";
                }
                $count++;
                
                if($count==5)
                {
                  $count=0;
                } 
          }
         echo "</tr>";
         echo "</table>";
        ?>
  </center>

</body>
</html>