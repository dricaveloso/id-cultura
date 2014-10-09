<?php
namespace PROCERGS\OAuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Notification
 *
 * @ORM\Table(name="client_person")
 * @ORM\Entity
 */
class ClientPerson
{

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="PROCERGS\LoginCidadao\CoreBundle\Entity\Person", inversedBy="clients")
     * @ORM\JoinColumn(name="person_id", referencedColumnName="id")
     */    
    protected $person;
    
    /**
     * @ORM\ManyToOne(targetEntity="PROCERGS\OAuthBundle\Entity\Client", inversedBy="persons")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */    
    protected $client;

    public function getId()
    {
        return $this->id;
    }

    public function setId($var)
    {
        $this->id = $var;
        return $this;
    }

    public function getPerson()
    {
        return $this->person;
    }

    public function setPerson($var)
    {
        $this->person = $var;
        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }

    public function setClient($var)
    {
        $this->client = $var;
        return $this;
    }
}