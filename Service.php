<?php

namespace PhpBenchmarksRestData;

class Service
{
    public static function getUsers()
    {
        $type = (new CommentType())
            ->setId(1)
            ->setName('Type');
        $comment = (new Comment())
            ->setId(1)
            ->setMessage('http://www.php-benchmarks.com')
            ->setType($type);
        $user = (new User())
            ->setId(1)
            ->setLogin('phpbenchmarks')
            ->setCreatedAt(new \DateTime('2017-10-30 18:03:00'))
            ->addComment($comment)
            ->addComment($comment);

        $return = [];
        for ($i = 0; $i < 20; $i++) {
            $return[] = $user;
        }

        return $return;
    }
}
