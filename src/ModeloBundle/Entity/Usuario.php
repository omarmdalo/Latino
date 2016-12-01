<?php

namespace ModeloBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Usuario
 */
class Usuario implements UserInterface
{
    /**
     * @var integer
     */
    private $idusuario;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $caducidad;

    /**
     * @var \ModeloBundle\Entity\Perfil
     */
    private $idperfil;

    /**
     * @var \ModeloBundle\Entity\Empleado
     */
    private $idempleado;


    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return Usuario
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set caducidad
     *
     * @param \DateTime $caducidad
     *
     * @return Usuario
     */
    public function setCaducidad($caducidad)
    {
        $this->caducidad = $caducidad;

        return $this;
    }

    /**
     * Get caducidad
     *
     * @return \DateTime
     */
    public function getCaducidad()
    {
        return $this->caducidad;
    }

    /**
     * Set idperfil
     *
     * @param \ModeloBundle\Entity\Perfil $idperfil
     *
     * @return Usuario
     */
    public function setIdperfil(\ModeloBundle\Entity\Perfil $idperfil = null)
    {
        $this->idperfil = $idperfil;

        return $this;
    }

    /**
     * Get idperfil
     *
     * @return \ModeloBundle\Entity\Perfil
     */
    public function getIdperfil()
    {
        return $this->idperfil;
    }

    /**
     * Set idempleado
     *
     * @param \ModeloBundle\Entity\Empleado $idempleado
     *
     * @return Usuario
     */
    public function setIdempleado(\ModeloBundle\Entity\Empleado $idempleado = null)
    {
        $this->idempleado = $idempleado;

        return $this;
    }

    /**
     * Get idempleado
     *
     * @return \ModeloBundle\Entity\Empleado
     */
    public function getIdempleado()
    {
        return $this->idempleado;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array($this->getRole());
    }

    public function getSalt() {
        return null;
    }

    public function getUsername() {
        return $this->email;
    }
//Auth
    
//EndAuth    
}

