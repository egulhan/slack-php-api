<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class RtmStartGetResponse200Self extends \ArrayObject
{
    /**
     * @var int
     */
    protected $created;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $manualPresence;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var PrefsPrefs
     */
    protected $prefs;

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
     * @return string
     */
    public function getManualPresence(): ?string
    {
        return $this->manualPresence;
    }

    /**
     * @param string $manualPresence
     *
     * @return self
     */
    public function setManualPresence(?string $manualPresence): self
    {
        $this->manualPresence = $manualPresence;

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
     * @return PrefsPrefs
     */
    public function getPrefs(): ?PrefsPrefs
    {
        return $this->prefs;
    }

    /**
     * @param PrefsPrefs $prefs
     *
     * @return self
     */
    public function setPrefs(?PrefsPrefs $prefs): self
    {
        $this->prefs = $prefs;

        return $this;
    }
}
