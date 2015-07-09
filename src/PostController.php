<?php

class PostController
{
    public function indexAction(\Silex\Application $app)
    {
        /** @var \Doctrine\DBAL\Connection $conn */
        $conn = $app['db'];

        $posts = $conn->fetchAll("SELECT * FROM posts");

//        print_r($posts);

        return 'My blog';
    }

    public function showAction(\Silex\Application $app, $id)
    {
        /** @var \Doctrine\DBAL\Connection $conn */
        $conn = $app['db'];

        $post = $conn->fetchAssoc("SELECT * FROM posts WHERE id = :id", array(
            'id' => (int) $id,
        ));

//        print_r($post);

        return $app['twig']->render('post/show.twig', array(
            'post' => $post,
        ));
    }
}
