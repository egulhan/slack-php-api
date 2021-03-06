<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsInvitingUser extends \ArrayObject
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isAppUser;
    /**
     * @var bool
     */
    protected $isRestricted;
    /**
     * @var bool
     */
    protected $isUltraRestricted;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var ObjsUserProfileShortest
     */
    protected $profile;
    /**
     * @var string
     */
    protected $realName;
    /**
     * @var string
     */
    protected $teamId;
    /**
     * @var float
     */
    protected $updated;

    /**
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsAppUser(): ?bool
    {
        return $this->isAppUser;
    }

    /**
     * @param bool $isAppUser
     *
     * @return self
     */
    public function setIsAppUser(?bool $isAppUser): self
    {
        $this->isAppUser = $isAppUser;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsRestricted(): ?bool
    {
        return $this->isRestricted;
    }

    /**
     * @param bool $isRestricted
     *
     * @return self
     */
    public function setIsRestricted(?bool $isRestricted): self
    {
        $this->isRestricted = $isRestricted;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsUltraRestricted(): ?bool
    {
        return $this->isUltraRestricted;
    }

    /**
     * @param bool $isUltraRestricted
     *
     * @return self
     */
    public function setIsUltraRestricted(?bool $isUltraRestricted): self
    {
        $this->isUltraRestricted = $isUltraRestricted;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ObjsUserProfileShortest
     */
    public function getProfile(): ?ObjsUserProfileShortest
    {
        return $this->profile;
    }

    /**
     * @param ObjsUserProfileShortest $profile
     *
     * @return self
     */
    public function setProfile(?ObjsUserProfileShortest $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * @return string
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @param string $realName
     *
     * @return self
     */
    public function setRealName(?string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * @return string
     */
    public function getTeamId(): ?string
    {
        return $this->teamId;
    }

    /**
     * @param string $teamId
     *
     * @return self
     */
    public function setTeamId(?string $teamId): self
    {
        $this->teamId = $teamId;

        return $this;
    }

    /**
     * @return float
     */
    public function getUpdated(): ?float
    {
        return $this->updated;
    }

    /**
     * @param float $updated
     *
     * @return self
     */
    public function setUpdated(?float $updated): self
    {
        $this->updated = $updated;

        return $this;
    }
}
