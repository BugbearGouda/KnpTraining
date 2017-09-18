<?php
namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;

class User implements UserInterface
{
    private $email;

    public function getUsername()
    {
        return $this->email;
    }

    public function getRoles()
    {
        // TODO: Implement getRoles() method.
    }

    public function getPassword()
    {
        // TODO: Implement getPassword() method.
    }

    public function getSalt()
    {
        // TODO: Implement getSalt() method.
    }

    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }


}