<?php

declare(strict_types=1);

trait StringUtils
{
    public function createSlug(string $string)
    {
        return strtolower(str_replace(' ', '-', $string));
    }

    public function removeAccent()
    {
        return 'remove acentos';
    }
}

class Post
{
    use StringUtils;

    private string $title;

    public function setTitle(string $title)
    {
        $this->title = $this->createSlug($title);
    }

    public function getTitle()
    {
        return $this->title;
    }
}

class ForumPost
{
    use StringUtils;

    private string $title;

    public function setTitle(string $title)
    {
        $this->title = $this->createSlug($title);
    }

    public function getTitle()
    {
        return $this->title;
    }
}

$post = new Post;
$post->setTitle('Meu post');
echo $post->getTitle();

$forumpost = new ForumPost;
$forumpost->setTitle('Meu post no fórum');
echo $forumpost->getTitle();