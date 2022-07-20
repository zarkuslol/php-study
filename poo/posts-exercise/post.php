<?php

class Post {
    public int $likes;
    public array $comments;
    public string $author;

    public function __construct($likes = 0, $comments = []) {
        $this->likes = $likes;
        $this->comments = $comments;
    }

    public function aumentarLike(): void {
        $this->likes++;
    }

    public function setAuthor(string $author): void {
        $array = [];
        $aux = explode(" ", $author);
        foreach($aux as $item) {
            array_push($array, ucfirst($item));
        }
        $name = implode(" ", $array);
        $this->author = $name;
    }

    public function getAuthor(): string {
        return $this->author;
    }
}
