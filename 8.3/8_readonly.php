<?php

readonly class Post
{
    public function __construct(
        public DateTime $createdAt,
    ) {}

    public function __clone(): void
    {
        $this->createdAt = clone $this->createdAt;
    }
}

$post = new Post(createdAt: new DateTime());

$clonedPost = clone $post;

var_dump($clonedPost->createdAt === $post->createdAt);

// PHP 8.4?
// $clonedPost = clone $post with {
//     createdAt: clone $post->createdAt,
// };
