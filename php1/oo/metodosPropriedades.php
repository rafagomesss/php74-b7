<h2>Métodos e Propriedades</h2>

<?php

class Post {
    public $likes;
    public $comments;
    public $author;

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
$post2->likes = 3;

echo "O post 1 teve: $post1->likes<br>";
echo "O post 2 teve: $post2->likes<br>";

