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
     
      <?php while($dados = mysqli_fetch_assoc($exec)): ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="<?= baseUrlPublic('images/').$dados['foto_produto'] ?>" alt="Produto">
            <div class="card-body">
              <h4 class="card-title"><?= utf8_encode(substr($dados['nome_produto'],0,50))?></h4>
              <p class="card-text"><small><?=substr($dados['detalhes_produto'],0,100)?></small></p>
              <h4 class="card-title">R$ <?=$dados['preco_produto']?></h4>
            </div>
            <div class="card-footer">
              <form action="?page=adicionarcarrinho" method="POST">
                <input type="hidden" name="id_produto" value="<?= $dados['id_produto'] ?>">
                <button type="submit" class="btn btn-primary">Adicionar no Carrinho</button>
              </form>
            </div>
          </div>
        </div>
       <?php endwhile ?>
       

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    