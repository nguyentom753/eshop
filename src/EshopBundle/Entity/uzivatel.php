<?php
namespace EshopBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of uzivatel
 *
 * @author notebook-HP
 */

/**
* Popis metody / tridy
* @ORM\Entity()
*/
class uzivatel {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;
    
        /**
         * @ORM\Column(type="string" , length=128)
         */
        private $jmeno;
        
        /**
         * @ORM\Column(type="string" , length=128)
         */
        private $prijmeni;
        
        /**
         * @ORM\Column(type="string" , length=255, unique=true)
         */
        private $email;
        
        /**
         * @ORM\Column(type="string" , length=255)
         */
        private $heslo;
        
        /**
         * @ORM\Column(type="string" , length=16)
         */
        private $role;
       
        /**
         * @ORM\Column(type="string" , length=128 , nullable = true)
         */
        private $adresa;
        
        /**
         * @ORM\Column(type="string" , length=16 , nullable = true)
         */
        private $telefon;
}
