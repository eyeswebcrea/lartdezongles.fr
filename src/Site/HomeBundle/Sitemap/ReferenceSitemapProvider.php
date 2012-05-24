<?php

namespace Site\HomeBundle\Sitemap;

use Avalanche\Bundle\SitemapBundle\Sitemap\Provider;
use Avalanche\Bundle\SitemapBundle\Sitemap;
use Avalanche\Bundle\SitemapBundle\Sitemap\Url;
use Avalanche\Bundle\SitemapBundle\Sitemap\Url\Image;
use Symfony\Component\Routing\Router;


class ReferenceSitemapProvider implements Provider {

    protected $topicRepository;
    protected $router;

    public function __construct(Router $router, $container)
    {
        $this->router = $router;
		$this->container = $container;
    }
	
    public function populate(\Avalanche\Bundle\SitemapBundle\Sitemap $sitemap)
    {
        /* 
		 * Ajout de process page sitemap personalisé
		 */

        $sitemap->save();
    }
}