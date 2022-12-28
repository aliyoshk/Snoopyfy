 <?php 
     session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <title>Desktop - 1</title>
    <link rel="stylesheet" href="main.css">
 </head>

<style type="text/css">
    table
    {  
        border: solid #1E1E1E;
    }
    td
    {
        border: solid #1D2028;
        border-width: 10px;
        background: #1D2028;
    }
    h2
    {
        color: #3AB755;
        font-family: Prompt;
        font-style: normal;
        font-weight: 700;
        font-size: 20px;
    }
    h4
    {
        font-family: Prompt;
        font-style: normal;
        font-weight: 400;
        font-size: 16px;
        color: #FFFFFF;
        margin-top: -10px;
        margin-bottom: 7px;
    }
    .conts, .txt
    {
         padding-top: 80px;
    }
    .search
    {
    outline: none;
    text-indent: 30px;
    }

</style>

<!--     <table>
        <form action="index.php" method="POST">
            <tr>
                <td><label>Username </label></td>
                <td><input type="text" name="name"></td></tr>
                <tr><td><label>Password </label></td>
                <td><input type="text" name="pass"></td></tr>
                <tr><td><input type="submit" name="submit" value="Log in"></td></tr>
            </tr>
        </form>
    </table> -->

 <body bgcolor="#1E1E1E">

  <div id="header">
     <?php
    include('menu.php');
    ?>
   </div>
  <div class="main-container">
      <center>
            <h2 style="font-family:Prompt; font-size:45px; margin-bottom:10px; margin-left:20px; color:#3AB755; font-style: normal;">
            Find Music Around the world.
            </h2>
            <h4 style="font-family:Prompt; margin-left:20px; color:#FFFFFF; font-weight:500; font-style: normal;">
            Search for artists, songs or albums, and get results in no time. Filter by location,</br> genres or languages for precise results.
            </h4><br><br>


          <form action="index.php" method="POST">
              <!-- <i class="fa fa-search" style="color:white;"></i> -->
              <input name="search_text" class="search" type="text" placeholder="Search for an artist, song or album" name="search_bar">
              <a href="#" >
              <button name="search" class="search_button" font-family: Prompt; font-style: normal; font-weight: 500; font-size: 24px;> Search </button></a> 
          </form>
      </center>  

    <h2 class=txt style="font-family:Prompt; font-size:26px; margin-bottom:10px; margin-left:20px; color:#FFFFFF; font-style: normal; position: absolute; left: 90px;">
            Top Artists
    </h2>
    <p><br><p>

    <center class="conts">
        <?php
        include('config.php');

        if(isset($_POST['search']))
        {
                   
                   // $s=$_POST['search_text'];

                   // $sq="SELECT * FROM top_result;";
                   // $sqr=mysqli_query($con,$sq) or die("fail to fetch");
                   // $ftch=mysqli_fetch_assoc($sqr);
                   // $sqnm=mysqli_num_rows($sqr);

                   // if($sqnm > 0)
                   // {
                        header("location:search.php");
                   //}
        }

        ?>

        <?php
         $sql="SELECT * FROM artists where category ='top_artists'";
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
                    echo "<a href='addtocart.php?id=".$row['id']."'> <img src='./img/".$row['image']."'width=270 height=270> </a>";
                    echo "<h2>".$row['name']."</h2>";
                    echo "<h4>".$row['dob']."</h4>";

                    echo "</div>";
                }
                else
                {
                    echo "<div class='cont'>";

                    echo "<td>";
                    echo "<a href='addtocart.php?id=".$row['id']."'><img src='./img/".$row['image']."'width=270 height=270></a>";
                    echo "<h2 >".$row['name']."</h2>";
                    echo "<h4>".$row['dob']."</h4>";

                    echo "</div>";
                }
                $count++;
                
                if($count==4)
                {
                  $count=0;
                } 
          }
         echo "</tr>";
         echo "</table>";
        ?>
    </center>

    <h4 class="more" style="font-family:Prompt; color:#FFFFFF; font-weight:500; font-style: normal;">
            See More <i class="fa fa-long-arrow-right" style="color:white; margin-left: 5px;"></i>
    </h4>

</div>
</body>
</html>