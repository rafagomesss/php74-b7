<h2>Private e Protected</h2>

<?php

class Post
{
    private int $id;
    private int $likes;

    protected function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    protected function setLikes($like)
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
        $this->setLikes(77);
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

echo "FOTO: #" . $foto->getId() . " - " . $foto->getLikes() . " likes";