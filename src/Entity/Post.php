<?php

namespace Sovic\Cms\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;

/**
 * Sovic\Cms\Entity\Post
 *
 * @ORM\Table(
 *     name="post",
 *     uniqueConstraints={
 *         @ORM\UniqueConstraint(name="url_id", columns={"raw_id"})
 *     },
 *     indexes={
 *         @ORM\Index(name="public_post", columns={"raw_id", "public"}),
 *         @ORM\Index(name="published", columns={"published"})
 *     }
 * )
 *
 * @ORM\Entity(repositoryClass="Sovic\Cms\Repository\PostRepository")
 */
class Post
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public int $id;

    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    protected string $name;

    /**
     * @ORM\Column(name="raw_id", type="string", length=255, nullable=false)
     */
    public string $urlId;

    /**
     * @ORM\Column(name="meta_title", type="string", length=255, nullable=true, options={"default"=NULL})
     */
    protected ?string $metaTitle = null;

    /**
     * @ORM\Column(name="meta_description", type="string", length=255, nullable=true, options={"default"=NULL})
     */
    protected ?string $metaDescription = null;

    /**
     * @ORM\Column(name="meta_keywords", type="string", length=255, nullable=true, options={"default"=NULL})
     */
    protected ?string $metaKeywords = null;

    /**
     * @ORM\Column(name="heading", type="string", length=255, nullable=true, options={"default"=NULL})
     */
    protected ?string $heading = null;

    /**
     * @ORM\Column(name="subtitle", type="string", length=255, nullable=true, options={"default"=NULL})
     */
    protected ?string $subtitle = null;

    /**
     * @ORM\Column(name="perex", type="text", length=16383, nullable=true, options={"default"=NULL})
     */
    protected ?string $perex = null;

    /**
     * @ORM\Column(name="content", type="text", length=4294967295, nullable=true, options={"default"=NULL})
     */
    protected ?string $content;

    /**
     * @ORM\Column(name="`index`", type="integer", nullable=true, options={"default"=NULL})
     */
    protected ?int $index = null;

    /**
     * @ORM\Column(name="public", type="boolean", nullable=false, options={"default"=0})
     */
    protected bool $public = false;

    /**
     * @ORM\Column(name="lang", type="string", length=5, nullable=true, options={"default"=NULL})
     */
    protected ?string $lang;

    /**
     * @ORM\Column(name="group_id", type="integer", nullable=true, options={"default"=NULL})
     */
    protected ?int $groupId = null;

    /**
     * @ORM\Column(name="published", type="integer", nullable=true, options={"default"=NULL})
     */
    protected ?int $publishDate = null;

    /**
     * @ORM\Column(name="created", type="integer")
     */
    protected int $created;

    /**
     * @ORM\Column(name="title", type="integer", nullable=true, options={"default"=NULL})
     */
    protected ?int $title = null;

    /**
     * @ORM\Column(name="import_id", type="integer", nullable=true, options={"default"=NULL})
     */
    protected ?int $importId = null;

    /**
     * @ORM\Column(name="import_service", type="string", length=50, nullable=true, options={"default"=NULL})
     */
    protected ?string $importService = null;

    /**
     * @ORM\Column(name="infobox", type="text", length=1024, nullable=true)
     */
    protected ?string $infoBox = null;

    /**
     * @ORM\Column(name="signature", type="string", length=1024, nullable=true, options={"default"=NULL})
     */
    protected ?string $signature = null;

    /**
     * @ORM\Column(name="modified", type="integer", options={"default"=0})
     */
    protected int $modified = 0;

    /**
     * @ORM\Column(name="publishers_id", type="integer", options={"default"=0})
     */
    protected int $publishersId = 0;

    /**
     * @ORM\Column(name="postsauthors_id", type="integer", options={"default"=0})
     */
    protected int $postsAuthorsId = 0;

    /**
     * @ORM\Column(name="gallery", type="boolean", options={"default"=false})
     */
    protected bool $gallery = false;

    /**
     * @ORM\Column(name="media_id", type="integer", options={"default"=0})
     */
    protected int $mediaId = 0;

    /**
     * @ORM\Column(name="authorsusers_id", type="integer", nullable=true, options={"default"=NULL})
     */
    protected ?int $authorsUsersId = null;

    /**
     * @ORM\Column(name="secret", type="string", length=10, nullable=true)
     */
    protected ?string $secret = null;

    /**
     * @ORM\Column(name="is_featured", type="boolean", nullable=false, options={"default"="0"})
     */
    protected bool $isFeatured = false;

    /**
     * @ORM\Column(name="is_gallery_enabled", type="boolean", nullable=false, options={"default"="1"})
     */
    protected bool $isGalleryEnabled = true;

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getUrlId(): string
    {
        return $this->urlId;
    }

    public function setUrlId(string $urlId): void
    {
        $this->urlId = $urlId;
    }

    public function getMetaTitle(): ?string
    {
        return $this->metaTitle;
    }

    public function setMetaTitle(?string $metaTitle): void
    {
        $this->metaTitle = $metaTitle;
    }

    public function getMetaDescription(): ?string
    {
        return $this->metaDescription;
    }

    public function setMetaDescription(?string $metaDescription): void
    {
        $this->metaDescription = $metaDescription;
    }

    public function getMetaKeywords(): ?string
    {
        return $this->metaKeywords;
    }

    public function setMetaKeywords(?string $metaKeywords): void
    {
        $this->metaKeywords = $metaKeywords;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function setHeading(?string $heading): void
    {
        $this->heading = $heading;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(?string $subtitle): void
    {
        $this->subtitle = $subtitle;
    }

    public function getPerex(): ?string
    {
        return $this->perex;
    }

    public function setPerex(?string $perex): void
    {
        $this->perex = $perex;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): void
    {
        $this->content = $content;
    }

    public function getIndex(): ?int
    {
        return $this->index;
    }

    public function setIndex(?int $index): void
    {
        $this->index = $index;
    }

    public function isPublic(): bool
    {
        return $this->public;
    }

    public function setPublic(bool $public): void
    {
        $this->public = $public;
    }

    public function getLang(): string
    {
        return $this->lang;
    }

    public function setLang(string $lang): void
    {
        $this->lang = $lang;
    }

    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    public function setGroupId(?int $groupId): void
    {
        $this->groupId = $groupId;
    }

    public function getPublishDate(): ?DateTimeImmutable
    {
        return $this->publishDate ? (new DateTimeImmutable())->setTimestamp($this->publishDate) : null;
    }

    public function setPublishDate(?DateTimeImmutable $publishDate): void
    {
        $this->publishDate = $publishDate?->getTimestamp();
    }

    public function getCreated(): DateTimeImmutable
    {
        return (new DateTimeImmutable())->setTimestamp($this->created);
    }

    public function setCreated(DateTimeImmutable $created): void
    {
        $this->created = $created->getTimestamp();
    }

    public function getTitle(): ?int
    {
        return $this->title;
    }

    public function setTitle(?int $title): void
    {
        $this->title = $title;
    }

    public function getModified(): int
    {
        return $this->modified;
    }

    public function setModified(int $modified): void
    {
        $this->modified = $modified;
    }

    public function getPublishersId(): int
    {
        return $this->publishersId;
    }

    public function setPublishersId(int $publishersId): void
    {
        $this->publishersId = $publishersId;
    }

    public function getPostsAuthorsId(): int
    {
        return $this->postsAuthorsId;
    }

    public function setPostsAuthorsId(int $postsAuthorsId): void
    {
        $this->postsAuthorsId = $postsAuthorsId;
    }

    public function isGallery(): bool
    {
        return $this->gallery;
    }

    public function setGallery(bool $gallery): void
    {
        $this->gallery = $gallery;
    }

    public function getMediaId(): int
    {
        return $this->mediaId;
    }

    public function setMediaId(int $mediaId): void
    {
        $this->mediaId = $mediaId;
    }

    public function getAuthorsUsersId(): ?int
    {
        return $this->authorsUsersId;
    }

    public function setAuthorsUsersId(?int $authorsUsersId): void
    {
        $this->authorsUsersId = $authorsUsersId;
    }

    public function getImportId(): ?int
    {
        return $this->importId;
    }

    public function setImportId(?int $importId): void
    {
        $this->importId = $importId;
    }

    public function getImportService(): ?string
    {
        return $this->importService;
    }

    public function setImportService(?string $importService): void
    {
        $this->importService = $importService;
    }

    public function getInfoBox(): ?string
    {
        return $this->infoBox;
    }

    public function setInfoBox(?string $infoBox): void
    {
        $this->infoBox = $infoBox;
    }

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(?string $signature): void
    {
        $this->signature = $signature;
    }

    public function getSecret(): ?string
    {
        return $this->secret;
    }

    public function setSecret(?string $secret): void
    {
        $this->secret = $secret;
    }

    public function isFeatured(): bool
    {
        return $this->isFeatured;
    }

    public function setIsFeatured(bool $isFeatured): void
    {
        $this->isFeatured = $isFeatured;
    }

    public function isGalleryEnabled(): bool
    {
        return $this->isGalleryEnabled;
    }

    public function setIsGalleryEnabled(bool $isGalleryEnabled): void
    {
        $this->isGalleryEnabled = $isGalleryEnabled;
    }
}

