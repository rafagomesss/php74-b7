<h2>Definindo Classes e Objetos</h2>

<?php

class Post {
    public $likes;
    public $comments;
    public $author;

}

$post1 = new Post();
$post1->likes = 2;
$post1->author = 'Gomes';

$post2 = new Post();
$post2->likes = 3;

echo "O post 1 teve: $post1->likes e o autor é $post1->author<br>";
echo "O post 2 teve: $post2->likes<br>";

