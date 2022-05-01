<?php

namespace QbaBit\SecurityBundle\Entity;

use QbaBit\CoreBundle\Entity\ArrayGetter;
use QbaBit\CoreBundle\Traits\DateRegistrable;
use QbaBit\CoreBundle\Traits\Enableable;
use QbaBit\CoreBundle\Traits\FileUploadable;

use Symfony\Component\Validator\Constraints as Assert;
use QbaBit\CoreBundle\Traits\Identificable;
use QbaBit\CoreBundle\Traits\Nameable;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Doctrine\ORM as ORM;
use QbaBit\CoreBundle\Validators\Constraints as QbaBitAssert;

/**
 * SecurityUser
 *
 */
class SecurityUser extends ArrayGetter implements AdvancedUserInterface, \Serializable
{
  use Identificable,Nameable,Enableable,DateRegistrable,FileUploadable;

    
    /**
     * @QbaBitAssert\OnlyLetter
     * @var string
     */
    private $firstName;

    /**
     * @QbaBitAssert\OnlyLetter
     * @var string
     */
    private $secondName;

    /**
     * 
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var boolean
     */
    private $issuperadmin = '0';



    /**
     * @var string
     */
    private $path;


    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $group;

    /**
     * Constructor
     */
    public function __construct()
    {
      //  parent::__construct();
        $this->group = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SecurityUser
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return SecurityUser
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     *
     * @return SecurityUser
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return SecurityUser
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
     * @return SecurityUser
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
     * Set salt
     *
     * @param string $salt
     *
     * @return SecurityUser
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set issuperadmin
     *
     * @param boolean $issuperadmin
     *
     * @return SecurityUser
     */
    public function setIssuperadmin($issuperadmin)
    {
        $this->issuperadmin = $issuperadmin;

        return $this;
    }

    /**
     * Get issuperadmin
     *
     * @return boolean
     */
    public function getIssuperadmin()
    {
        return $this->issuperadmin;
    }


    /**
     * Set path
     *
     * @param string $path
     *
     * @return SecurityUser
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }



    /**
     * Add group
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityGroup $group
     *
     * @return SecurityUser
     */
    public function addGroup(\QbaBit\SecurityBundle\Entity\SecurityGroup $group)
    {
        $this->group[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param \QbaBit\SecurityBundle\Entity\SecurityGroup $group
     */
    public function removeGroup(\QbaBit\SecurityBundle\Entity\SecurityGroup $group)
    {
        $this->group->removeElement($group);
    }

    /**
     * Get group
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getGroup()
    {
        return $this->group;
    }
    /**
     * @var string
     */
    private $username;


    /**
     * Set username
     *
     * @param string $username
     *
     * @return SecurityUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * (PHP 5 &gt;= 5.1.0)<br/>
     * String representation of object
     * @link http://php.net/manual/en/serializable.serialize.php
     * @return string the string representation of the object or null
     */
    public function serialize()
    {


            return serialize(array(
           $this->id,
           $this->email,
           $this->password,
           $this->enabled,

       ));
   }



   /**
    * (PHP 5 &gt;= 5.1.0)<br/>
    * Constructs the object
    * @link http://php.net/manual/en/serializable.unserialize.php
    * @param string $serialized <p>
    * The string representation of the object.
    * </p>
    * @return void
    */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->email,
            $this->password,
            $this->enabled
            ) = unserialize($serialized);
    }

    /**
     * Checks whether the user's account has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw an AccountExpiredException and prevent login.
     *
     * @return bool true if the user's account is non expired, false otherwise
     *
     * @see AccountExpiredException
     */
    public function isAccountNonExpired()
    {
        return $this->enabled;
        // TODO: Implement isAccountNonExpired() method.
    }

    /**
     * Checks whether the user is locked.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a LockedException and prevent login.
     *
     * @return bool true if the user is not locked, false otherwise
     *
     * @see LockedException
     */
    public function isAccountNonLocked()
    {
        return $this->enabled;
        // TODO: Implement isAccountNonLocked() method.
    }

    /**
     * Checks whether the user's credentials (password) has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a CredentialsExpiredException and prevent login.
     *
     * @return bool true if the user's credentials are non expired, false otherwise
     *
     * @see CredentialsExpiredException
     */
    public function isCredentialsNonExpired()
    {
        return $this->enabled;
        // TODO: Implement isCredentialsNonExpired() method.
    }

    /**
     * Checks whether the user is enabled.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a DisabledException and prevent login.
     *
     * @return bool true if the user is enabled, false otherwise
     *
     * @see DisabledException
     */
    public function isEnabled()
    {
        return $this->enabled;
        // TODO: Implement isEnabled() method.
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {

        $roles[] = 'ROLE_USER';
      
     //   $roles[]= 'ROLE_ADMIN';
        if($this->group!=null)
        foreach ($this->group as $grupo) {

            foreach ($grupo->getRole() as $rol) {
                $roles[] = $rol->getRole();
            }
        }
        return array_unique($roles);

                // TODO: Implement getRoles() method.
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
    public function getFileVar()
    {

        return array('path' => $this->getPath());
    }

    public function setFileVar($name, $value)
    {
        $this->path = $value;
    }
    public function getFullName()
    {
        return $this->getName(). ' '. $this->getFirstName(). ' '. $this->getSecondName();
    }
    private $impersonatedUser;
    /**
     * Get id
     *
     * @return SecurityUser
     */
    public function getImpersonateUser()
    {
        return $this->impersonatedUser;
    }
    public function setImpersonateUser($value)
    {
        $this->impersonatedUser= $value;
    }
    /**
     * Validador para la contraseña
     */
    public function validPass( $context) {


        if ($this->username == $this->password) {
            $context->addViolation( 'usuario_pass_distintos');
        }

        if (!$this->id && !$this->password) {
            $context->addViolation( 'campo_requerido');
        }

        if ($this->password) {
            if (strlen($this->password) < 6) {
                $context->addViolation('pass_min_caracteres', array('%car%' => 6));
            }
        }
    }

    /**
     * @var string
     */
    private $movilPhone;

    /**
     * @var string
     */
    private $fixPhone;


    /**
     * Set movilPhone
     *
     * @param string $movilPhone
     *
     * @return SecurityUser
     */
    public function setMovilPhone($movilPhone)
    {
        $this->movilPhone = $movilPhone;

        return $this;
    }

    /**
     * Get movilPhone
     *
     * @return string
     */
    public function getMovilPhone()
    {
        return $this->movilPhone;
    }

    /**
     * Set fixPhpne
     *
     * @param string $fixPhpne
     *
     * @return SecurityUser
     */
    public function setFixPhone($fixPhone)
    {
        $this->fixPhone = $fixPhone;

        return $this;
    }

    /**
     * Get fixPhpne
     *
     * @return string
     */
    public function getFixPhone()
    {
        return $this->fixPhone;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $accounts;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ip;


    /**
     * Add account
     *
     * @param \QbaBit\NautaBundle\Entity\NautaAccounts $account
     *
     * @return SecurityUser
     */
    public function addAccount(\QbaBit\NautaBundle\Entity\NautaAccounts $account)
    {
        $this->accounts[] = $account;

        return $this;
    }

    /**
     * Remove account
     *
     * @param \QbaBit\NautaBundle\Entity\NautaAccounts $account
     */
    public function removeAccount(\QbaBit\NautaBundle\Entity\NautaAccounts $account)
    {
        $this->accounts->removeElement($account);
    }

    /**
     * Get accounts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * Add ip
     *
     * @param \QbaBit\NautaBundle\Entity\NautaUserIp $ip
     *
     * @return SecurityUser
     */
    public function addIp(\QbaBit\NautaBundle\Entity\NautaUserIp $ip)
    {
        $this->ip[] = $ip;

        return $this;
    }

    /**
     * Remove ip
     *
     * @param \QbaBit\NautaBundle\Entity\NautaUserIp $ip
     */
    public function removeIp(\QbaBit\NautaBundle\Entity\NautaUserIp $ip)
    {
        $this->ip->removeElement($ip);
    }

    /**
     * Get ip
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIp()
    {
        return $this->ip;
    }
    /**
     * @var string
     */
    private $interface;


    /**
     * Set interface
     *
     * @param string $interface
     *
     * @return SecurityUser
     */
    public function setInterface($interface)
    {
        $this->interface = $interface;

        return $this;
    }

    /**
     * Get interface
     *
     * @return string
     */
    public function getInterface()
    {
        return $this->interface;
    }


    /**
     * @var \QbaBit\NautaBundle\Entity\NautaTipoCuenta
     */
    private $accountType;


    /**
     * Set accountType
     *
     * @param \QbaBit\NautaBundle\Entity\NautaTipoCuenta $accountType
     *
     * @return SecurityUser
     */
    public function setAccountType(\QbaBit\NautaBundle\Entity\NautaTipoCuenta $accountType = null)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return \QbaBit\NautaBundle\Entity\NautaTipoCuenta
     */
    public function getAccountType()
    {
        return $this->accountType;
    }
    /**
     * @var string
     */
    private $percent;


    /**
     * Set percent
     *
     * @param string $percent
     *
     * @return SecurityUser
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get percent
     *
     * @return string
     */
    public function getPercent()
    {
        return $this->percent;
    }
    /**
     * @var boolean
     */
    private $onlyHarry;


    /**
     * Set onlyHarry
     *
     * @param boolean $onlyHarry
     *
     * @return SecurityUser
     */
    public function setOnlyHarry($onlyHarry)
    {
        $this->onlyHarry = $onlyHarry;

        return $this;
    }

    /**
     * Get onlyHarry
     *
     * @return boolean
     */
    public function getOnlyHarry()
    {
        return $this->onlyHarry;
    }
    /**
     * @var integer
     */
    private $checkCount;


    /**
     * Set checkCount
     *
     * @param integer $checkCount
     *
     * @return SecurityUser
     */
    public function setCheckCount( $checkCount)
    {
        $this->checkCount = $checkCount;

        return $this;
    }

    /**
     * Get checkCount
     *
     * @return integer
     */
    public function getCheckCount()
    {
        return $this->checkCount;
    }
    /**
     * @var integer
     */
    private $checkCountInternet;


    /**
     * Set checkCountInternet
     *
     * @param integer $checkCountInternet
     *
     * @return SecurityUser
     */
    public function setCheckCountInternet($checkCountInternet)
    {
        $this->checkCountInternet = $checkCountInternet;

        return $this;
    }

    /**
     * Get checkCountInternet
     *
     * @return integer
     */
    public function getCheckCountInternet()
    {
        return $this->checkCountInternet;
    }
}
