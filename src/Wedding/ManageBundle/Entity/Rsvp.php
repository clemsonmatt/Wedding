<?php

namespace Wedding\ManageBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

use Wedding\ManageBundle\Traits\TimestampableTrait;

/**
 * @ORM\Entity()
 * @ORM\Table(name="rsvp")
 */
class Rsvp
{
    use TimestampableTrait;

    /**
     * @Assert\Callback
     */
    public function validate(ExecutionContextInterface $context)
    {
        if ($this->getResponse() == 'yes' && $this->getNumber() === null) {
            $context->buildViolation('Please enter the total number of people coming')
                ->atPath('number')
                ->addViolation();
        }
    }

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(name="email", type="text", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(name="response", type="string", length=255)
     */
    private $response;


    /**
     * Get id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get phone
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set number
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set email
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set response
     */
    public function setResponse($response)
    {
        $this->response = $response;

        return $this;
    }
}
