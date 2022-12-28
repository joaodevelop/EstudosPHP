<?php
  include_once("templates/header.php");
  if(isset($_GET['id'])) {

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post) {
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }

  }

?>

<main id="posts">
    <div class="content-container">
        <h1 id="main-title"> <?=$currentPost['title']?></h1>
        <p id="post-description"><?=$currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/imgs/<?= $currentPost['img'] ?>" alt="<?=$currentPost['title']?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ad dolores aliquam nam earum vitae iusto explicabo non impedit ullam? Eligendi corporis debitis commodi blanditiis illum eos non ut veritatis?
            Tenetur aut nihil dolores quam voluptas, esse vel deserunt eius quasi repellendus est ratione facilis ullam. Veniam explicabo consequuntur cupiditate saepe eligendi iusto nesciunt obcaecati quam quos, iste repudiandae est.
            Laudantium consequatur ut, id repudiandae, quaerat explicabo fuga ea blanditiis ipsum necessitatibus exercitationem velit maxime excepturi, incidunt est consectetur debitis animi neque dolorem harum similique voluptatem enim aspernatur quas. Voluptatum.
            Laborum facilis praesentium consequatur magnam sapiente repudiandae dolorum natus quo omnis, illo provident autem blanditiis minus nobis voluptates dolore quibusdam nemo! Ratione voluptatum voluptates corporis delectus modi quam alias est.
            Deleniti voluptas quisquam aperiam non mollitia. Repellendus, odit sed. Aliquam at, inventore velit itaque autem beatae natus accusantium a facere sint quisquam culpa error expedita ipsa perferendis corrupti quam voluptatem.
        </p>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam ad dolores aliquam nam earum vitae iusto explicabo non impedit ullam? Eligendi corporis debitis commodi blanditiis illum eos non ut veritatis?
            Tenetur aut nihil dolores quam voluptas, esse vel deserunt eius quasi repellendus est ratione facilis ullam. Veniam explicabo consequuntur cupiditate saepe eligendi iusto nesciunt obcaecati quam quos, iste repudiandae est.
            Laudantium consequatur ut, id repudiandae, quaerat explicabo fuga ea blanditiis ipsum necessitatibus exercitationem velit maxime excepturi, incidunt est consectetur debitis animi neque dolorem harum similique voluptatem enim aspernatur quas. Voluptatum.
            Laborum facilis praesentium consequatur magnam sapiente repudiandae dolorum natus quo omnis, illo provident autem blanditiis minus nobis voluptates dolore quibusdam nemo! Ratione voluptatum voluptates corporis delectus modi quam alias est.
            Deleniti voluptas quisquam aperiam non mollitia. Repellendus, odit sed. Aliquam at, inventore velit itaque autem beatae natus accusantium a facere sint quisquam culpa error expedita ipsa perferendis corrupti quam voluptatem.
        </p>
    </div>
    <aside id="nav-container">
        <h3 id="tags-title">TAGS</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach; ?>
            </ul>
        <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach; ?>
            </ul>
    </aside>
</main>

<?php
    include_once("templates/footer.php")
?>