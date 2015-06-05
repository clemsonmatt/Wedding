<?php
namespace Wedding\ManageBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav nav-pills nav-justified');

        $menu->addChild('Home', [
            'route' => 'index',
        ]);

        $menu->addChild('RSVP', [
            'route' => 'rsvp',
        ]);

        $menu->addChild('About', [
            'route' => 'about',
        ]);

        $menu->addChild('Honeymoon', [
            'route' => 'honeymoon',
        ]);

        $menu->addChild('Photos', [
            'route' => 'photos',
        ]);

        $menu->addChild('Registries', [
            'route' => 'registries',
        ]);

        return $menu;
    }
}
