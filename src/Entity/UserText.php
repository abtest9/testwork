<?php


namespace App\Entity;

class UserText
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var User
     */
    private $user;

    /**
     * @var string
     */
    private $text;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getUser(): User
    {
        return $this->user;
    }

    /**
     * @param User $user
     *
     * @return UserText
     */
    public function setUser(User $user): UserText
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return UserText
     */
    public function setText(string $text): UserText
    {
        $this->text = $text;

        return $this;
    }
}