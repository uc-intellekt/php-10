<?php

class PostController
{
    public function indexAction()
    {
        return 'My blog';
    }

    public function showAction($id)
    {
        return 'Post ' . $id;
    }
}
