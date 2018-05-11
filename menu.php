<?php

  define("TITLE", "Menu | the lonely passersby");

  include('includes/header.php');

 ?>

    <div class="food-menu">

        <h1>Food Menu</h1>

        <hr>

        <ul>
            <?php foreach ($menuItems as $dish => $item) { ?>

              <li><?php echo $item[dish]; ?>
                  <br><?php echo $item[ingredients]; ?>
              </li>

            <?php  }  ?>

        </ul>

    </div>

    <div class="drink-menu">

        <h1>Drink Menu</h1>

        <hr>

        <ul>
            <?php foreach ($drinkItems as $dish => $item) { ?>

              <li><?php echo $item[drink]; ?>
                  <br><?php echo $item[ingredients]; ?>
              </li>

              <?php } ?>

        </ul>

    </div>

<?php include('includes/footer.php'); ?>
