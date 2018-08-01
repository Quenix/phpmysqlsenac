<?php

$query = "SELECT * FROM produto";
$exec = mysqli_query($connect, $query);
?>
   
   
  




    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
        <h1 class="display-3">PROMOÇÃO!!!!</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Clique aqui</a>
      </header>




      <!-- Page Features -->
      <div class="row text-center">
     
      <?php while($query = mysqli_fetch_assoc($exec)): ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="fone1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title"><?=$exec['nome_produto']?></h4>
              <p class="card-text"><?=$exec['detalhes_produto']?></p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Detalhes</a>
            </div>
          </div>
        </div>
       <?php endwhile ?>
       

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    