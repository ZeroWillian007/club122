<?php

namespace WBJ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Postes
 *
 * @ORM\Table(name="Postes", indexes={@ORM\Index(name="Postes_FKIndex1", columns={"Usuarios_id_user"})})
 * @ORM\Entity
 */
class Postes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_post", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=80, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="curpo_post", type="string", length=255, nullable=true)
     */
    private $curpoPost;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var \WBJ\UserBundle\Entity\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="WBJ\UserBundle\Entity\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Usuarios_id_user", referencedColumnName="id_user")
     * })
     */
    private $usuariosUser;



    /**
     * Get idPost
     *
     * @return integer 
     */
    public function getIdPost()
    {
        return $this->idPost;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Postes
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set curpoPost
     *
     * @param string $curpoPost
     * @return Postes
     */
    public function setCurpoPost($curpoPost)
    {
        $this->curpoPost = $curpoPost;

        return $this;
    }

    /**
     * Get curpoPost
     *
     * @return string 
     */
    public function getCurpoPost()
    {
        return $this->curpoPost;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Postes
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set usuariosUser
     *
     * @param \WBJ\UserBundle\Entity\Usuarios $usuariosUser
     * @return Postes
     */
    public function setUsuariosUser(\WBJ\UserBundle\Entity\Usuarios $usuariosUser = null)
    {
        $this->usuariosUser = $usuariosUser;

        return $this;
    }

    /**
     * Get usuariosUser
     *
     * @return \WBJ\UserBundle\Entity\Usuarios 
     */
    public function getUsuariosUser()
    {
        return $this->usuariosUser;
    }
}
