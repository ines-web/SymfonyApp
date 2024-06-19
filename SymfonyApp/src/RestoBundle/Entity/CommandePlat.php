<?php

namespace RestoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandePlat
 *
 * @ORM\Table(name="commande_plat")
 * @ORM\Entity(repositoryClass="RestoBundle\Repository\CommandePlatRepository")
 */
class CommandePlat
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr", type="integer")
     */
    private $nbr;

    /**
  	 * @ORM\ManyToOne(targetEntity="Reservation")
     * @ORM\JoinColumn(nullable=false)	
     */
    private $reservation;
	
    /**	
     * @ORM\ManyToOne(targetEntity="Plat")	
     * @ORM\JoinColumn(nullable=false)	
     */
    private $palt;





    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nbr
     *
     * @param integer $nbr
     *
     * @return CommandePlat
     */
    public function setNbr($nbr)
    {
        $this->nbr = $nbr;

        return $this;
    }

    /**
     * Get nbr
     *
     * @return int
     */
    public function getNbr()
    {
        return $this->nbr;
    }

 

    /**
     * Set palt
     *
     * @param \RestoBundle\Entity\Plat $palt
     *
     * @return CommandePlat
     */
    public function setPalt(\RestoBundle\Entity\Plat $palt)
    {
        $this->palt = $palt;

        return $this;
    }

    /**
     * Get palt
     *
     * @return \RestoBundle\Entity\Plat
     */
    public function getPalt()
    {
        return $this->palt;
    }

    /**
     * Set reservation
     *
     * @param \RestoBundle\Entity\Reservation $reservation
     *
     * @return CommandePlat
     */
    public function setReservation(\RestoBundle\Entity\Reservation $reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \RestoBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }
}
