<h2>Encapsulamento</h2>

<?php

class Post {
    public $id;
    public int $likes = 0;
    public array $comments = [];
    private string $author;

    public function aumentarLike()
    {
        $this->likes++;
    }

    public function setAuthor(string $nome)
    {
        if (strlen($nome) >= 3) {
            $this->author = ucfirst($nome);
        }
    }

    public function getAuthor()
    {
        return $this->author ?? '';
    }
}

$post1 = new Post();
$post1->setAuthor('bonieky');

$post2 = new Post();
$post2->setAuthor('Gomes');

echo "POST1: $post1->likes likes - {$post1->getAuthor()} <br>";
echo "POST2: $post2->likes likes - {$post2->getAuthor()} <br>";
