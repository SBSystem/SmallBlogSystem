<?php

namespace App\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\QueryBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Posts;

class PostController extends Controller
{
    public function addPostPage()
    {
        return $this->render('admin/addPost.html.twig');
    }
    public function editPostPage()
    {
        return $this->render('admin/editPost.html.twig');
    }
    public function removePostPage()
    {
        return $this->render('admin/removePost.html.twig');
    }

    // ----------------------------------------------------------
    public function addPost(EntityManager $entityManager, string $title, string $text, string $createdBy, int $categoryId): void
    {
        $post = new Posts();
        $post->setCreatedBy($createdBy);
        $post->setPostTitle($title);
        $post->setPostText($text);
        $post->setCategoryId($categoryId);

        try {
            $entityManager->persist($post);
            $entityManager->flush();
        }catch(ORMException $ormException) {
            //return error
        }
    }
    public function editPost(EntityManager $entityManager, int $postId, string $postTitle, string $postText, int $categoryId): void
    {
        $builder = $entityManager->createQueryBuilder();

        $updated = $builder->select('*')->from('Posts', 'post')->where('post.id='.$postId);
        $updated->set('postTitle', $postTitle);
        $updated->set('postText', $postText);
        $updated->set('categoryId', $categoryId);
    }
    public function deletePost(EntityManager $entityManager, int $postId): void
    {
        $builder = $entityManager->createQueryBuilder();

        $oldRecord = $builder->select('*')->from('Posts', 'post')->where('post.id='.$postId);

        $builder->delete($oldRecord);
    }
    public function getPost(EntityManager $entityManager, int $id): QueryBuilder
    {
        $builder = $entityManager->createQueryBuilder();
        return $builder->select('*')->from('Posts', 'post')->where('post.id = '.$id);
    }
}