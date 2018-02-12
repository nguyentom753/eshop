<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Kategorie
 *
 * @author notebook-HP
 */
/**
* Popis metody / tridy
* @ORM\Entity()
*/
class Kategorie {
    /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;
        
        /**
         * @ORM\Column (type="string",length=128)
         */
        private $nazev;
        
        /**
         * @ORM\Column (type="text")
         */
        private  $popis;
        
        /**
         * @ORM\Column (type="string" , length=128 , unique = true)
         */
        private  $url;
}
