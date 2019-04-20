<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class ObjsMessageAttachmentsItem extends \ArrayObject
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $fallback;
    /**
     * @var string
     */
    protected $color;
    /**
     * @var string
     */
    protected $pretext;
    /**
     * @var string
     */
    protected $authorName;
    /**
     * @var string
     */
    protected $authorLink;
    /**
     * @var string
     */
    protected $authorIcon;
    /**
     * @var string
     */
    protected $title;
    /**
     * @var string
     */
    protected $titleLink;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var ObjsMessageAttachmentsItemFieldsItem[]
     */
    protected $fields;
    /**
     * @var string
     */
    protected $imageUrl;
    /**
     * @var string
     */
    protected $thumbUrl;
    /**
     * @var string
     */
    protected $footer;
    /**
     * @var string
     */
    protected $footerIcon;
    /**
     * @var string
     */
    protected $ts;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getFallback(): ?string
    {
        return $this->fallback;
    }

    /**
     * @param string $fallback
     *
     * @return self
     */
    public function setFallback(?string $fallback): self
    {
        $this->fallback = $fallback;

        return $this;
    }

    /**
     * @return string
     */
    public function getColor(): ?string
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return self
     */
    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return string
     */
    public function getPretext(): ?string
    {
        return $this->pretext;
    }

    /**
     * @param string $pretext
     *
     * @return self
     */
    public function setPretext(?string $pretext): self
    {
        $this->pretext = $pretext;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorName(): ?string
    {
        return $this->authorName;
    }

    /**
     * @param string $authorName
     *
     * @return self
     */
    public function setAuthorName(?string $authorName): self
    {
        $this->authorName = $authorName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorLink(): ?string
    {
        return $this->authorLink;
    }

    /**
     * @param string $authorLink
     *
     * @return self
     */
    public function setAuthorLink(?string $authorLink): self
    {
        $this->authorLink = $authorLink;

        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorIcon(): ?string
    {
        return $this->authorIcon;
    }

    /**
     * @param string $authorIcon
     *
     * @return self
     */
    public function setAuthorIcon(?string $authorIcon): self
    {
        $this->authorIcon = $authorIcon;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitleLink(): ?string
    {
        return $this->titleLink;
    }

    /**
     * @param string $titleLink
     *
     * @return self
     */
    public function setTitleLink(?string $titleLink): self
    {
        $this->titleLink = $titleLink;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return ObjsMessageAttachmentsItemFieldsItem[]
     */
    public function getFields(): ?array
    {
        return $this->fields;
    }

    /**
     * @param ObjsMessageAttachmentsItemFieldsItem[] $fields
     *
     * @return self
     */
    public function setFields(?array $fields): self
    {
        $this->fields = $fields;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    /**
     * @param string $imageUrl
     *
     * @return self
     */
    public function setImageUrl(?string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbUrl(): ?string
    {
        return $this->thumbUrl;
    }

    /**
     * @param string $thumbUrl
     *
     * @return self
     */
    public function setThumbUrl(?string $thumbUrl): self
    {
        $this->thumbUrl = $thumbUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getFooter(): ?string
    {
        return $this->footer;
    }

    /**
     * @param string $footer
     *
     * @return self
     */
    public function setFooter(?string $footer): self
    {
        $this->footer = $footer;

        return $this;
    }

    /**
     * @return string
     */
    public function getFooterIcon(): ?string
    {
        return $this->footerIcon;
    }

    /**
     * @param string $footerIcon
     *
     * @return self
     */
    public function setFooterIcon(?string $footerIcon): self
    {
        $this->footerIcon = $footerIcon;

        return $this;
    }

    /**
     * @return string
     */
    public function getTs(): ?string
    {
        return $this->ts;
    }

    /**
     * @param string $ts
     *
     * @return self
     */
    public function setTs(?string $ts): self
    {
        $this->ts = $ts;

        return $this;
    }
}
