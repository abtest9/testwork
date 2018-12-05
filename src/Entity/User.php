<?php


namespace App\Entity;


class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string|null
     */
    private $homepage;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     *
     * @return User
     */
    public function setUserName(string $userName): User
    {
        $this->userName = $userName;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return User
     */
    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getHomepage(): ?string
    {
        return $this->homepage;
    }

    /**
     * @param null|string $homepage
     *
     * @return User
     */
    public function setHomepage(?string $homepage): User
    {
        $this->homepage = $homepage;

        return $this;
    }
}