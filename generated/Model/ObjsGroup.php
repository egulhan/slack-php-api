<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsGroup extends \ArrayObject
{
    /**
     * @var int
     */
    protected $created;
    /**
     * @var string
     */
    protected $creator;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var bool
     */
    protected $isArchived;
    /**
     * @var bool
     */
    protected $isGroup;
    /**
     * @var int
     */
    protected $isMoved;
    /**
     * @var bool
     */
    protected $isMpim;
    /**
     * @var bool
     */
    protected $isOpen;
    /**
     * @var bool
     */
    protected $isPendingExtShared;
    /**
     * @var string
     */
    protected $lastRead;
    /**
     * @var mixed
     */
    protected $latest;
    /**
     * @var string[]
     */
    protected $members;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $nameNormalized;
    /**
     * @var mixed
     */
    protected $priority;
    /**
     * @var ObjsGroupPurpose
     */
    protected $purpose;
    /**
     * @var ObjsGroupTopic
     */
    protected $topic;
    /**
     * @var int
     */
    protected $unreadCount;
    /**
     * @var int
     */
    protected $unreadCountDisplay;

    /**
     * @return int
     */
    public function getCreated(): ?int
    {
        return $this->created;
    }

    /**
     * @param int $created
     *
     * @return self
     */
    public function setCreated(?int $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreator(): ?string
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     *
     * @return self
     */
    public function setCreator(?string $creator): self
    {
        $this->creator = $creator;

        return $this;
    }

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
    public function getIsArchived(): ?bool
    {
        return $this->isArchived;
    }

    /**
     * @param bool $isArchived
     *
     * @return self
     */
    public function setIsArchived(?bool $isArchived): self
    {
        $this->isArchived = $isArchived;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsGroup(): ?bool
    {
        return $this->isGroup;
    }

    /**
     * @param bool $isGroup
     *
     * @return self
     */
    public function setIsGroup(?bool $isGroup): self
    {
        $this->isGroup = $isGroup;

        return $this;
    }

    /**
     * @return int
     */
    public function getIsMoved(): ?int
    {
        return $this->isMoved;
    }

    /**
     * @param int $isMoved
     *
     * @return self
     */
    public function setIsMoved(?int $isMoved): self
    {
        $this->isMoved = $isMoved;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsMpim(): ?bool
    {
        return $this->isMpim;
    }

    /**
     * @param bool $isMpim
     *
     * @return self
     */
    public function setIsMpim(?bool $isMpim): self
    {
        $this->isMpim = $isMpim;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsOpen(): ?bool
    {
        return $this->isOpen;
    }

    /**
     * @param bool $isOpen
     *
     * @return self
     */
    public function setIsOpen(?bool $isOpen): self
    {
        $this->isOpen = $isOpen;

        return $this;
    }

    /**
     * @return bool
     */
    public function getIsPendingExtShared(): ?bool
    {
        return $this->isPendingExtShared;
    }

    /**
     * @param bool $isPendingExtShared
     *
     * @return self
     */
    public function setIsPendingExtShared(?bool $isPendingExtShared): self
    {
        $this->isPendingExtShared = $isPendingExtShared;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastRead(): ?string
    {
        return $this->lastRead;
    }

    /**
     * @param string $lastRead
     *
     * @return self
     */
    public function setLastRead(?string $lastRead): self
    {
        $this->lastRead = $lastRead;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param mixed $latest
     *
     * @return self
     */
    public function setLatest($latest): self
    {
        $this->latest = $latest;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param string[] $members
     *
     * @return self
     */
    public function setMembers(?array $members): self
    {
        $this->members = $members;

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
     * @return string
     */
    public function getNameNormalized(): ?string
    {
        return $this->nameNormalized;
    }

    /**
     * @param string $nameNormalized
     *
     * @return self
     */
    public function setNameNormalized(?string $nameNormalized): self
    {
        $this->nameNormalized = $nameNormalized;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param mixed $priority
     *
     * @return self
     */
    public function setPriority($priority = null): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * @return ObjsGroupPurpose
     */
    public function getPurpose(): ?ObjsGroupPurpose
    {
        return $this->purpose;
    }

    /**
     * @param ObjsGroupPurpose $purpose
     *
     * @return self
     */
    public function setPurpose(?ObjsGroupPurpose $purpose): self
    {
        $this->purpose = $purpose;

        return $this;
    }

    /**
     * @return ObjsGroupTopic
     */
    public function getTopic(): ?ObjsGroupTopic
    {
        return $this->topic;
    }

    /**
     * @param ObjsGroupTopic $topic
     *
     * @return self
     */
    public function setTopic(?ObjsGroupTopic $topic): self
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnreadCount(): ?int
    {
        return $this->unreadCount;
    }

    /**
     * @param int $unreadCount
     *
     * @return self
     */
    public function setUnreadCount(?int $unreadCount): self
    {
        $this->unreadCount = $unreadCount;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnreadCountDisplay(): ?int
    {
        return $this->unreadCountDisplay;
    }

    /**
     * @param int $unreadCountDisplay
     *
     * @return self
     */
    public function setUnreadCountDisplay(?int $unreadCountDisplay): self
    {
        $this->unreadCountDisplay = $unreadCountDisplay;

        return $this;
    }
}
