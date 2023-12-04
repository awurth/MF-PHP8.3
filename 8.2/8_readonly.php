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

$clonedPost = clone $post; // Fatal error: Uncaught Error: Cannot modify readonly property Post::$createdAt

var_dump($clonedPost->createdAt === $post->createdAt);
