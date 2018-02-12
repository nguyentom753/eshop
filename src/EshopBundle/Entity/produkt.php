<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of produkt
 *
 * @author notebook-HP
 */
/**
* Popis metody / tridy
* @ORM\Entity()
*/
class produkt {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;
                
         /**
          *@ORM\Column (type="string" , length=128)
          */
        private $nazev;
        
        /**
          *@ORM\Column (type="string" , length=128 , unique=true)
          */
        private $url;
        
        /**
          *@ORM\Column (type="text")
          */
        private $popis;
        
        /**
          *@ORM\Column (type="float")
          */
        private $cena;
        
        /**
         *@ORM\Id
         * @ORM\ManyToOne (targetEntity ="kategorie", inversedBy="id")
         */
        private $kategorie;
        
        /**
          *@ORM\Column (type="boolean")
          */
        private $aktivni;
       
        /**
          *@ORM\Column (type="integer")
          */
        private $sklad;
}
