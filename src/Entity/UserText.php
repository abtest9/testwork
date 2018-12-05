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
    private $userId;

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
    public function getUserId(): User
    {
        return $this->userId;
    }

    /**
     * @param User $userId
     *
     * @return UserText
     */
    public function setUserId(User $userId): UserText
    {
        $this->userId = $userId;

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