<?php

namespace WBJ\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Usuarios
 *
 * @ORM\Table(name="Usuarios")
 * @ORM\Entity
 *
 * @ORM\HasLifecycleCallbacks()
 */
class Usuarios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=100, nullable=true)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100, nullable=true)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=50, nullable=true)
     */
    private $nickname;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=50, nullable=true)
     */
    private $pass;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_creacion", type="date", nullable=true)
     */
    private $fechaCreacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_update", type="date", nullable=true)
     */
    private $fechaUpdate;

    /**
     * @var string
     *
     * @ORM\Column(name="medidas", type="string", length=50, nullable=true)
     */
    private $medidas;

    /**
     * @var integer
     *
     * @ORM\Column(name="cost", type="integer", nullable=true)
     */
    private $cost;

    /**
     * @var integer
     *
     * @ORM\Column(name="signo", type="integer", nullable=true)
     */
    private $signo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_naci", type="date", nullable=true)
     */
    private $fechaNaci;

    /**
     * @var string
     *
     * @ORM\Column(name="nacionalidad", type="string", length=80, nullable=true)
     */
    private $nacionalidad;

    /**
     * @var string
     *
     * @ORM\Column(name="provincia", type="string", length=80, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="ciudad", type="string", length=80, nullable=true)
     */
    private $ciudad;

    /**
     * @var integer
     *
     * @ORM\Column(name="privi", type="integer", nullable=true)
     */
    private $privi;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=true)
     * 
     * 
     * @Assert\File(maxSize="6000000")
     * 
     * 
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="img2", type="string", length=100, nullable=false)
     */
    private $img2;

    /**
     * @var string
     *
     * @ORM\Column(name="img3", type="string", length=100, nullable=false)
     */
    private $img3;

    /**
     * @var string
     *
     * @ORM\Column(name="img4", type="string", length=100, nullable=false)
     */
    private $img4;

    /**
     * @var integer
     *
     * @ORM\Column(name="control", type="integer", nullable=true)
     */
    private $control;

    /**
     * @var string
     *
     * @ORM\Column(name="extra", type="string", length=100, nullable=false)
     */
    private $extra;

    /**
     * @var integer
     *
     * @ORM\Column(name="opcinal", type="integer", nullable=false)
     */
    private $opcinal;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="introduc", type="string", length=255, nullable=true)
     */
    private $introduc;



    /**
     * Get idUser
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set nombres
     *
     * @param string $nombres
     * @return Usuarios
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string 
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return Usuarios
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set nickname
     *
     * @param string $nickname
     * @return Usuarios
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string 
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set pass
     *
     * @param string $pass
     * @return Usuarios
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string 
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Usuarios
     *
     * @ORM\PrePersist
     */
    public function setFechaCreacion()
    {
        $this->fechaCreacion = new \DateTime();

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set fechaUpdate
     *
     * @param \DateTime $fechaUpdate
     * @return Usuarios
     * 
     *  
     */
    public function setFechaUpdate($fechaUpdate)
    {
        $this->fechaUpdate = $fechaUpdate;

        return $this;
    }

    /**
     * Get fechaUpdate
     *
     * @return \DateTime 
     */
    public function getFechaUpdate()
    {
        return $this->fechaUpdate;
    }

    /**
     * Set medidas
     *
     * @param string $medidas
     * @return Usuarios
     */
    public function setMedidas($medidas)
    {
        $this->medidas = $medidas;

        return $this;
    }

    /**
     * Get medidas
     *
     * @return string 
     */
    public function getMedidas()
    {
        return $this->medidas;
    }

    /**
     * Set cost
     *
     * @param integer $cost
     * @return Usuarios
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return integer 
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set signo
     *
     * @param integer $signo
     * @return Usuarios
     */
    public function setSigno($signo)
    {
        $this->signo = $signo;

        return $this;
    }

    /**
     * Get signo
     *
     * @return integer 
     */
    public function getSigno()
    {
        return $this->signo;
    }

    /**
     * Set fechaNaci
     *
     * @param \DateTime $fechaNaci
     * @return Usuarios
     */
    public function setFechaNaci($fechaNaci)
    {
        $this->fechaNaci = $fechaNaci;

        return $this;
    }

    /**
     * Get fechaNaci
     *
     * @return \DateTime 
     */
    public function getFechaNaci()
    {
        return $this->fechaNaci;
    }

    /**
     * Set nacionalidad
     *
     * @param string $nacionalidad
     * @return Usuarios
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return string 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Usuarios
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Usuarios
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set privi
     *
     * @param integer $privi
     * @return Usuarios
     */
    public function setPrivi($privi)
    {
        $this->privi = $privi;

        return $this;
    }

    /**
     * Get privi
     *
     * @return integer 
     */
    public function getPrivi()
    {
        return $this->privi;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Usuarios
     * 
     * 
     * 
     * 
     * 
     *
     * 
     * 
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set img2
     *
     * @param string $img2
     * @return Usuarios
     */
    public function setImg2($img2)
    {
        $this->img2 = $img2;

        return $this;
    }

    /**
     * Get img2
     *
     * @return string 
     */
    public function getImg2()
    {
        return $this->img2;
    }

    /**
     * Set img3
     *
     * @param string $img3
     * @return Usuarios
     */
    public function setImg3($img3)
    {
        $this->img3 = $img3;

        return $this;
    }

    /**
     * Get img3
     *
     * @return string 
     */
    public function getImg3()
    {
        return $this->img3;
    }

    /**
     * Set img4
     *
     * @param string $img4
     * @return Usuarios
     */
    public function setImg4($img4)
    {
        $this->img4 = $img4;

        return $this;
    }

    /**
     * Get img4
     *
     * @return string 
     */
    public function getImg4()
    {
        return $this->img4;
    }

    /**
     * Set control
     *
     * @param integer $control
     * @return Usuarios
     */
    public function setControl($control)
    {
        $this->control = $control;

        return $this;
    }

    /**
     * Get control
     *
     * @return integer 
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Set extra
     *
     * @param string $extra
     * @return Usuarios
     */
    public function setExtra($extra)
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * Get extra
     *
     * @return string 
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Set opcinal
     *
     * @param integer $opcinal
     * @return Usuarios
     */
    public function setOpcinal($opcinal)
    {
        $this->opcinal = $opcinal;

        return $this;
    }

    /**
     * Get opcinal
     *
     * @return integer 
     */
    public function getOpcinal()
    {
        return $this->opcinal;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuarios
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
     * Set introduc
     *
     * @param string $introduc
     * @return Usuarios
     */
    public function setIntroduc($introduc)
    {
        $this->introduc = $introduc;

        return $this;
    }

    /**
     * Get introduc
     *
     * @return string 
     */
    public function getIntroduc()
    {
        return $this->introduc;
    }
}
