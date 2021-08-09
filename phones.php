<?php include "conn.php"; ?>
<?php include "header.php"; ?>
</head>
<body>



        
        <div class="centered">

            <section class="cards">
<?php

$stmt = $conn -> query('SELECT * FROM stock');
$stmt->execute();
while($row = $stmt->fetch()){
?>
          
            <article class="card">
                    <a href="#">
                        <picture class="thumbnail">
                        <img style="width:100%; text-align: center;" src="image/<?php echo $row['pic']?>">
                        </picture>
                        <div class="card-content">
                            <h2 style="text-align: center;"><?php echo $row['item']?></h2>
                            <p style="text-align: center;"><?php echo $row['description']?></p>
                            <p style="text-align: center; font-size: 18px"><b>Ksh <?php echo $row['price']?></b></p>
                        </div><!-- .card-content -->
                        
                        <form onclick="bidfunction()" id="bidbutton" type="submit" action="lipa.php" method="POST" style="text-align: center; margin-bottom:1rem;">
                        <button class="buybtn"  value="buy" >Bid Now</button>
                        </form>

                    </a>
              </article><!-- .card -->
<?php } ?>



            </section><!-- .cards -->
           
        </div><!-- .centered -->




</body>


<?php include "footer.php" ?>
