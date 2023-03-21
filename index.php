<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Page</title>
</head>
<body>
    <?php
    include_once ('Layouts/header.php');
    include_once ('Layouts/hero.php');
    ?>
    
    <section>
        <!-- sidebar -->
        <div class="sidebar">
            <div class="container-fluid ">
                <div class="align-items-start d-flex ">
              <div class="col-md-3">
                <?php
                include_once('Layouts/sidebar.php');
                ?>
              </div>
            
              
              <!-- Content -->
              <div class="col-md-9">
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Dummy Text</h5>
                      <p class="card-text"> labore sit magnam excepturi cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima earum amet veritatis nesciunt dicta commodi consectetur, sequi impedit adipisci? Unde iusto ex atque, molestias beatae minus fugiat! Exercitationem, quo unde. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Asperiores modi, accusantium libero consequatur saepe nulla suscipit sed, odio laborum voluptatibus hic iusto laboriosam maiores reprehenderit necessitatibus dolor, odit quam nisi?Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo totam nihil expedita debitis rem voluptate odit quod magnam aliquid! Temporibus blanditiis numquam impedit quia optio neque dignissimos officia veniam minima. Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae temporibus magnam facilis blanditiis, exercitationem voluptates deserunt distinctio nobis fugit, quos omnis? Blanditiis eum minus iste. Iusto delectus quos cumque neque?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente aspernatur, minus ut quidem nobis placeat laboriosam aperiam recusandae dignissimos voluptatem esse repellendus architecto obcaecati explicabo similique soluta nemo? Velit, voluptatibus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore praesentium numquam itaque. Facere, velit rem? Deserunt quam necessitatibus nisi modi atque. In natus repellendus velit ea explicabo sint cumque minus. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <?php                
                      $gosomewhere = new Btn('Show More', '#', 'btn btn-primary');
                      $gosomewhere->get_html();
                      ?>
                      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
   
    <footer>
      <?php 
      include_once('Layouts/footer.php');
      ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>