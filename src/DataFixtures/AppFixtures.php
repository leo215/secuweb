<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Address;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $address = new Address();
        $address->setStreet("14 rue de la victoire");
        $address->setCp("29000");
        $address->setCity("Cotonou");
        $address->setCountry("Bénin");

        $manager->persist($address);
        $this->setReference('address-1', $address);

        $address = new Address();
        $address->setStreet("1 Rue du Parc au Ray");
        $address->setCp("44000");
        $address->setCity("Nantes");
        $address->setCountry("France");

        $manager->persist($address);
        $this->setReference('address-2', $address);


        $address = new Address();
        $address->setStreet("12 Rue de victoire");
        $address->setCp("28999");
        $address->setCity("Maroc");

        $manager->persist($address);
        $this->setReference('address-3', $address);

        $address = new Address();
        $address->setStreet("05 rue clermont");
        $address->setCp("44470");
        $address->setCity("THOUARE SUR LOIRE");
        $address->setCountry("FRANCE");

        $manager->persist($address);
        $this->setReference('address-4', $address);

        $address = new Address();
        $address->setStreet("17 de la porte");
        $address->setCp("1986");
        $address->setCity("NEW YORK");
        $address->setCountry("USA");

        $manager->persist($address);
        $this->setReference('address-3', $address);
        $manager->flush();
    }
}
