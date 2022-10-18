<h2>Herança</h2>

<?php

class Post
{
    private int $id;
    private int $likes;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLikes($like)
    {
        $this->likes = $like;
    }

    public function getLikes()
    {
        return $this->likes;
    }
}

class Foto extends Post
{
    private $url;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

$foto = new Foto(20);
$foto->setLikes(12);

echo "FOTO: #" . $foto->getId() . " - " . $foto->getLikes() . " likes";