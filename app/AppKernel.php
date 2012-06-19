<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\DoctrineBundle\DoctrineBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new JMS\SecurityExtraBundle\JMSSecurityExtraBundle(),
            new Eyeswebcrea\ReferencementBundle\EyeswebcreaReferencementBundle(), // Permet de référencement
            new Eyeswebcrea\AssetServiceBundle\EyeswebcreaAssetServiceBundle(), // Permet au bundle d'ajouter des assets
            new Eyeswebcrea\AliasContent\ViewerBundle\EyeswebcreaAliasContentViewerBundle(), // Permet d'afficher des articles et rubrique
            new Eyeswebcrea\AliasContent\EditorBundle\EyeswebcreaAliasContentEditorBundle(), // Permet d'editer des artilces et rubriques
            new Eyeswebcrea\SecuserSpace\AdminBundle\EyeswebcreaSecuserSpaceAdminBundle(), // Permet de beneficier d'un espace administrateur
            new Eyeswebcrea\SecuserSpace\UserBundle\EyeswebcreaSecuserSpaceUserBundle(), // Permet de bénificier d'un espace utilisateur
			new Eyeswebcrea\SliderBundle\EyeswebcreaSliderBundle(), // Permet d'utiliser un slider
			new Spip\AccesContentBundle\SpipAccesContentBundle(), // Permet l'acces au contenu de spip 
			new Gregwar\ImageBundle\GregwarImageBundle(), // Permet de manipuler les images (redimensionement, etc...)
			new IHQS\ContactBundle\IHQSContactBundle(),  // Permet d'avoir un formulaire de contact puissant
			new Ivory\GoogleMapBundle\IvoryGoogleMapBundle(), // Permet de crée des google map puissante non static
			new AntiMattr\GoogleBundle\GoogleBundle(), // Permet de crée des google map static et d'integrer 
		    new Symfony\Bundle\DoctrineFixturesBundle\DoctrineFixturesBundle(), // Permet de crée des fixture pour les bundles
		    new Symfony\Bundle\DoctrineMongoDBBundle\DoctrineMongoDBBundle(), // Permet d'utilise une basse mongoDB
		    new Avalanche\Bundle\SitemapBundle\AvalancheSitemapBundle(), // Permet de generer des site map selon les donée fournit par les bundles
		    new Knp\Bundle\MenuBundle\KnpMenuBundle(), // Permet de crée gerer les differents menu de l'application
        	new Site\HomeBundle\SiteHomeBundle(), // Bundle principale de l'application
        	new Genemu\Bundle\FormBundle\GenemuFormBundle(), // Bundle permet de gerer des extra pour les form tel que richeditor
		);

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
}
