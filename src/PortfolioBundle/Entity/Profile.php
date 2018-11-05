<?php
namespace PortfolioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
* Profile
*
* @ORM\Table(name="Profile")
* @ORM\Entity(repositoryClass="PortfolioBundle\Repository\ProfileRepository")
*/
class Profile
{
    /**
    * @var int
    *
    * @ORM\Column(name="id", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    /**
    * @var string
    *
    * @ORM\Column(name="first_name", type="string", length=50)
    */
    private $firstName;

    /**
    * @var string
    *
    * @ORM\Column(name="last_name", type="string", length=50)
    */
    private $lastName;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="birth_date", type="datetime")
    */
    private $birthDate;

    /**
    * @var string
    *
    * @ORM\Column(name="address", type="string", length=255)
    */
    private $address;

    /**
    * @var string
    *
    * @ORM\Column(name="zipcode", type="integer", length=5)
    */
    private $zipcode;

    /**
    * @var string
    *
    * @ORM\Column(name="city", type="string", length=50)
    */
    private $city;

    /**
    * @var string
    *
    * @ORM\Column(name="country", type="string", length=50)
    */
    private $country;

    /**
    * @var string
    *
    * @ORM\Column(name="mail", type="string", length=100)
    */
    private $mail;

    /**
    * @var string
    *
    * @ORM\Column(name="mail2", type="string", length=100, nullable=true)
    */
    private $mail2;

    /**
    * @var string
    *
    * @ORM\Column(name="local_phone_number", type="string", length=30, unique=true)
    */
    private $localPhoneNumber;

    /**
    * @var string
    *
    * @ORM\Column(name="delocalized_phone_number", type="string", length=30, nullable=true, unique=true)
    */
    private $delocalizedPhoneNumber;

    /**
    * @var string
    *
    * @ORM\Column(name="description", type="text")
    */
    private $description;

    /**
    * @var string
    *
    * @ORM\Column(name="profession", type="string", length=100, nullable=true)
    */
    private $profession;

    /**
    * @var string
    *
    * @ORM\Column(name="avatar", type="string", length=255, nullable=true)
    */
    private $avatar;

    /**
    * @var \DateTime
    *
    * @ORM\Column(name="updated_at", type="datetime")
    */
    private $updatedAt;

    /**
    * @var \Admin
    *
    * @ORM\OneToOne(targetEntity="Admin")
    * @ORM\JoinColumns({
    *   @ORM\JoinColumn(name="admin_id", referencedColumnName="id")
    * })
    */
    private $admin;


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
    * Set firstName
    *
    * @param string $firstName
    *
    * @return Profile
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
    * Set lastName
    *
    * @param string $lastName
    *
    * @return Profile
    */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
    * Get lastName
    *
    * @return string
    */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
    * Set birthDate
    *
    * @param \DateTime $birthDate
    *
    * @return Profile
    */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
    * Get birthDate
    *
    * @return \DateTime
    */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
    * Set address
    *
    * @param string $address
    *
    * @return Profile
    */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
    * Get address
    *
    * @return string
    */
    public function getAddress()
    {
        return $this->address;
    }

    /**
    * Set zipcode
    *
    * @param string $zipcode
    *
    * @return Profile
    */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
    * Get zipcode
    *
    * @return string
    */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
    * Set city
    *
    * @param string $city
    *
    * @return Profile
    */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
    * Get city
    *
    * @return string
    */
    public function getCity()
    {
        return $this->city;
    }

    /**
    * Set country
    *
    * @param string $country
    *
    * @return Profile
    */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
    * Get country
    *
    * @return string
    */
    public function getCountry()
    {
        return $this->country;
    }



    /**
    * Set mail
    *
    * @param string $mail
    *
    * @return Profile
    */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
    * Get mail
    *
    * @return string
    */
    public function getMail()
    {
        return $this->mail;
    }

    /**
    * Set mail2
    *
    * @param string $mail2
    *
    * @return Profile
    */
    public function setMail2($mail2)
    {
        $this->mail2 = $mail2;

        return $this;
    }

    /**
    * Get mail2
    *
    * @return string
    */
    public function getMail2()
    {
        return $this->mail2;
    }

    /**
    * Set localPhoneNumber
    *
    * @param string $localPhoneNumber
    *
    * @return Profile
    */
    public function setLocalPhoneNumber($localPhoneNumber)
    {
        $this->localPhoneNumber = $localPhoneNumber;

        return $this;
    }

    /**
    * Get localPhoneNumber
    *
    * @return string
    */
    public function getLocalPhoneNumber()
    {
        return $this->localPhoneNumber;
    }

    /**
    * Set delocalizedPhoneNumber
    *
    * @param string $delocalizedPhoneNumber
    *
    * @return Profile
    */
    public function setDelocalizedPhoneNumber($delocalizedPhoneNumber)
    {
        $this->delocalizedPhoneNumber = $delocalizedPhoneNumber;

        return $this;
    }

    /**
    * Get delocalizedPhoneNumber
    *
    * @return string
    */
    public function getDelocalizedPhoneNumber()
    {
        return $this->delocalizedPhoneNumber;
    }

    /**
    * Set description
    *
    * @param string $description
    *
    * @return Profile
    */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
    * Get description
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->description;
    }

    /**
    * Set profession
    *
    * @param string $profession
    *
    * @return Profile
    */
    public function setProfession($profession)
    {
        $this->profession = $profession;

        return $this;
    }

    /**
    * Get profession
    *
    * @return string
    */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
    * Set avatar
    *
    * @param string $avatar
    *
    * @return Profile
    */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
    * Get avatar
    *
    * @return string
    */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
    * Set updatedAt
    *
    * @param \DateTime $updatedAt
    *
    * @return Profile
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
    * Get updatedAt
    *
    * @return \DateTime
    */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
    * Set admin
    *
    * @return Profile
    */
    public function setAdmin($admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
    * Get admin
    *
    * @return \PortfolioBundle\Entity\Admin
    */
    public function getAdmin()
    {
        return $this->admin;
    }
}
