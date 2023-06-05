<!-- Inclusão do cabeçalho -->
<?php
  include_once("templates/header.php");

  if (isset($_GET['id'])) { //Verificando se não vem algum dado da url
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {
      if ($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }

?>

<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">  

       <p class="post-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam finibus urna sit amet erat tristique, eget pulvinar odio sollicitudin. Vestibulum elementum tellus in nisi pellentesque, sit amet ullamcorper odio pulvinar. Mauris sit amet dolor ut metus congue faucibus at ut felis. Pellentesque in tincidunt mi. Vestibulum lobortis odio non sapien cursus, nec aliquam nisi euismod. Sed id gravida tellus. In nec rhoncus lacus. Morbi consequat, ex ac pulvinar elementum, metus velit viverra tellus, eu sollicitudin eros ligula vitae tellus. Fusce pellentesque elit at turpis elementum, vitae dignissim urna volutpat. Aenean eu tellus lorem. Curabitur et mi enim. Phasellus id purus velit.
    </div>

   

  </p>

  </div>


<aside id="nav-container">

  <h3 id="tags-title">Tags</h3>

<ul id="tag-list">
  <?php foreach($currentPost['tags'] as $tag): ?>
      <li><a href="#"><?= $tag ?></a></li>
  <?php endforeach; ?>
</ul>

<h3 id="categories-title">Categorias</h3>

<ul id="categories-list">
  <?php foreach($categories as $categorias): ?>
      <li><a href="#"><?= $categorias ?></a></li>
  <?php endforeach; ?>
</ul>

</aside>

</main>


<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>