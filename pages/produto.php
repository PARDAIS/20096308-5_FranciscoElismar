<h1 class="text-center"><?=$produto['nome'];?></h1>


<?php if(isset($produto) && !empty($produto)): ?>
<div class="row featurette">
  <div class="col-md-7">
    <h2 class="featurette-heading"><?=$produto['nome'];?><span class="text-muted"></span></h2>
    <p class="lead"><?=$produto['descricao'];?></p>
    Peso: <?=$produto['peso'];?>
  </div>
  <div class="col-md-5">
    <img class="produto-img" src="images/<?=$produto['img'];?>" alt="<?=$produto['nome'];?>">
  </div>
</div>
<section class="row">
    <div class="voltar">
        <a href="?page=home" class="btn btn-primary">Voltar para Home</a>
    </div>
</section>
<?php endif; ?>