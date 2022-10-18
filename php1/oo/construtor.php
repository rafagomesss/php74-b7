<h2>Typed Properties</h2>

<?php

class Post {
    public $id;
    public int $likes = 0;
    public array $comments = [];
    public string $author = '';

    public function __construct($postId)
    {
        $this->id = $postId;
        $this->likes = 2 * $postId;
    }

    public function aumentarLike()
    {
        $this->likes++;
    }
}

$post1 = new Post(1);
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->aumentarLike();
$post1->author = 'Gomes';

$post2 = new Post(2);
// $post2->likes = 'gomes'; // Erro
$post2->likes = 5;
$post2->author = 'Fulano';
$post2->comments = ['titulo' => 'Olá mundo', 'texto' => 'Lorem ipsum dolor sit
    amet consectetur adipisicing elit.
    Quod veniam repellendus ullam nam?
    Laudantium dolores necessitatibus vitae quos deserunt iure error,
    nulla esse nostrum nemo minus eos ex atque expedita.'];


echo "O post 1 teve: $post1->likes e o autor é $post1->author<br>";
echo "O post 2 teve: $post2->likes e o autor é $post2->author<br><br>";
echo 'Conteúdo comentários post 2<br>';
echo '<pre>' . print_r($post2->comments, true) . '</pre>';

