<?php
// src/Acme/DemoBundle/Menu/Builder.php
namespace Site\HomeBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Sittler\HomeBundle\MenuEvents;
use Sittler\HomeBundle\Event\ConfigureMenuEvent;

class MainBuilder extends ContainerAware
{
    public function build(FactoryInterface $factory)
    {
    	$em = $this->container->get("doctrine")->getEntityManager();
		
		$this->routing = $this->container->get("router");
		
		$rubriquesRepository = $em->getRepository("SpipAccesContentBundle:SpipRubriques");
		
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());

        $menu
        	->addChild('Accueil', array('route' => 'SiteHomeBundle_homepage'));
			
		$menu
			->addChild('Ongles', array('route' => 'SiteHomeBundle_ongledetails'));
			
		foreach($rubriquesRepository->findByIdParent(5) as $rubrique)
		{
			if($rubrique->getIdRubrique() != 6)
			{
				$menu->addChild($rubrique->getTitre(), array("uri" => $this->routing->generate("SiteHomeBundle_lacarte")."#categorie-".$rubrique->getIdLiteral()));
			}
		}
					
		$menu
			->addChild('Contact', array( 'route' => 'SiteHomeBundle_contact'));

        return $menu;
    }
	
}