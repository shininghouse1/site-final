<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<h3 class="text-center mt-3">Comentários dos clientes</h3>
<div class="row">
  <?php
    include "banco.php";
    $query = "select * from comments order by rand() limit 3";
    $exec = mysqli_query($con, $query);
    while($p = mysqli_fetch_array($exec)){
      $nome = $p['nome'];
      $email = $p['email'];
      $data = $p['data'];
      $comentario = $p['comentario'];
      echo "
       <div class='col-xs-12 col-md-3 col-lg-4 mt-3'>
           <div class='borda'>
                <p><strong>Data de envio: </strong> $data</p>
                <p><strong>Nome: </strong> $nome</p>
                <p><strong>Email: </strong> $email </p>
                <p><strong>Comentário: </strong>$comentario</p>
           </div>
       </div>
      ";
    }
  ?>
</php>
