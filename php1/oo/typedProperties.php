<h2>Typed Properties</h2>

<?php

class Post {
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    public function aumentarLike()
    {
        $this->likes++;
    }
}

$post1 = new Post();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();

$post2 = new Post();
// $post2->likes = 'gomes'; // Erro
$post2->likes = 5;
$post2->comments = ['titulo' => 'Olá mundo', 'texto' => 'Lorem ipsum dolor sit
    amet consectetur adipisicing elit.
    Quod veniam repellendus ullam nam?
    Laudantium dolores necessitatibus vitae quos deserunt iure error,
    nulla esse nostrum nemo minus eos ex atque expedita.'];


echo "O post 1 teve: $post1->likes<br>";
echo "O post 2 teve: $post2->likes<br>";
echo 'Conteúdo comentários post 2<br>';
echo '<pre>' . print_r($post2->comments, true) . '</pre>';

