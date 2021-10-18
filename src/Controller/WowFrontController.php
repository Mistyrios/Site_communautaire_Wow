<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use App\Repository\TypeRepository;
use App\Repository\VideoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WowFrontController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function home(): Response
    {
        return $this->render('wow/home.html.twig');
    }

    #[Route('/legal', name: 'legal')]
    public function legal(): Response
    {
        return $this->render('wow/legal.html.twig');
    }

    #[Route('/articles', name: 'articles')]
    public function article(ArticleRepository $repo): Response
    {
        $articles = $repo->findBy([],['createdAt' => 'DESC']);
        return $this->render('wow/articles.html.twig', [
            'articles' => $articles
        ]);
    }

    #[Route('/articles/news', name: 'articles_news')]
    public function news(ArticleRepository $repo, TypeRepository $repoType): Response
    {
        $categorie = $repoType->findBy(['nom' => 'News']);
        $articles = $repo->findBy(['type' => $categorie],['createdAt' => 'DESC']);
        return $this->render('wow/article_type.html.twig', [
            'articles' => $articles,
            'nom' => 'News'
        ]);
    }

    #[Route('/articles/guides', name: 'articles_guides')]
    public function guides(ArticleRepository $repo, TypeRepository $repoType): Response
    {
        $categorie = $repoType->findBy(['nom' => 'Guides']);
        $articles = $repo->findBy(['type' => $categorie],['createdAt' => 'DESC']);
        return $this->render('wow/article_type.html.twig', [
            'articles' => $articles,
            'nom' => 'Guides'
        ]);
    }

    #[Route('/articles/histoire', name: 'articles_histoire')]
    public function histoire(ArticleRepository $repo, TypeRepository $repoType): Response
    {
        $categorie = $repoType->findBy(['nom' => 'Histoires']);
        $articles = $repo->findBy(['type' => $categorie],['createdAt' => 'DESC']);
        return $this->render('wow/article_type.html.twig', [
            'articles' => $articles,
            'nom' => 'Histoires'
        ]);
    }

    #[Route('/article/{id}', name: 'show_article')]
    public function showArticle(ArticleRepository $repo, $id){

        $article = $repo->find($id);

        return $this->render('wow/show_article.html.twig', [
            'article' => $article
        ]);
    }

    #[Route('/videos', name: 'videos')]
    public function video(VideoRepository $repo): Response
    {
        $videos = $repo->findBy([],['postedAt' => 'DESC']);
        return $this->render('wow/videos.html.twig', [
            'videos' => $videos
        ]);
    }

    #[Route('/video/{id}', name: 'show_video')]
    public function showVideo(VideoRepository $repo, $id){

        $video = $repo->find($id);

        return $this->render('wow/show_video.html.twig', [
            'video' => $video
        ]);
    }

    #[Route('/videos/tutoriels', name: 'videos_tutoriels')]
    public function tutoriels(VideoRepository $repo, TypeRepository $repoType): Response
    {
        $categorie = $repoType->findBy(['nom' => 'Tutoriels']);
        $videos = $repo->findBy(['type' => $categorie],['postedAt' => 'DESC']);
        return $this->render('wow/video_type.html.twig', [
            'videos' => $videos,
            'nom' => 'Tutoriels'
        ]);
    }

    #[Route('/videos/funnystuff', name: 'videos_funnystuff')]
    public function funnystuff(VideoRepository $repo, TypeRepository $repoType): Response
    {
        $categorie = $repoType->findBy(['nom' => 'Funny Stuff']);
        $videos = $repo->findBy(['type' => $categorie],['postedAt' => 'DESC']);
        return $this->render('wow/video_type.html.twig', [
            'videos' => $videos,
            'nom' => 'Funny Stuff'
        ]);
    }

    #[Route('/videos/worldrecord', name: 'videos_worldrecord')]
    public function worldrecord(VideoRepository $repo, TypeRepository $repoType): Response
    {
        $categorie = $repoType->findBy(['nom' => 'World Record']);
        $videos = $repo->findBy(['type' => $categorie],['postedAt' => 'DESC']);
        return $this->render('wow/video_type.html.twig', [
            'videos' => $videos,
            'nom' => 'World Record'
        ]);
    }

    #[Route('/searchtag', name: 'search_tag')]
    public function tag(): Response
    {
        return $this->render('wow/searchtag.html.twig', [

        ]);
    }
}
