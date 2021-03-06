<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class PrefsPrefsLocalesEnabled extends \ArrayObject
{
    /**
     * @var string
     */
    protected $deDE;
    /**
     * @var string
     */
    protected $enUS;
    /**
     * @var string
     */
    protected $esES;
    /**
     * @var string
     */
    protected $frFR;
    /**
     * @var string
     */
    protected $jaJP;
    /**
     * @var string
     */
    protected $pseudo;

    /**
     * @return string
     */
    public function getDeDE(): ?string
    {
        return $this->deDE;
    }

    /**
     * @param string $deDE
     *
     * @return self
     */
    public function setDeDE(?string $deDE): self
    {
        $this->deDE = $deDE;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnUS(): ?string
    {
        return $this->enUS;
    }

    /**
     * @param string $enUS
     *
     * @return self
     */
    public function setEnUS(?string $enUS): self
    {
        $this->enUS = $enUS;

        return $this;
    }

    /**
     * @return string
     */
    public function getEsES(): ?string
    {
        return $this->esES;
    }

    /**
     * @param string $esES
     *
     * @return self
     */
    public function setEsES(?string $esES): self
    {
        $this->esES = $esES;

        return $this;
    }

    /**
     * @return string
     */
    public function getFrFR(): ?string
    {
        return $this->frFR;
    }

    /**
     * @param string $frFR
     *
     * @return self
     */
    public function setFrFR(?string $frFR): self
    {
        $this->frFR = $frFR;

        return $this;
    }

    /**
     * @return string
     */
    public function getJaJP(): ?string
    {
        return $this->jaJP;
    }

    /**
     * @param string $jaJP
     *
     * @return self
     */
    public function setJaJP(?string $jaJP): self
    {
        $this->jaJP = $jaJP;

        return $this;
    }

    /**
     * @return string
     */
    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     *
     * @return self
     */
    public function setPseudo(?string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }
}
