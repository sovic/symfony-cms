<?php

namespace Sovic\Cms\Entity;

use Doctrine\ORM\Mapping as ORM;
use InvalidArgumentException;

/**
 * @ORM\Table(name="setting")
 * @ORM\Entity
 */
class Setting
{
    private const TYPE_STRING = 'string';
    private const TYPE_INT = 'int'; // number
    private const TYPE_BOOL = 'bool'; // 0|1
    private const TYPE_ARRAY = 'array'; // array of strings, each line one field

    private const TYPES = [
        self::TYPE_ARRAY,
        self::TYPE_BOOL,
        self::TYPE_INT,
        self::TYPE_STRING,
    ];

    /**
     * @ORM\Id
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected int $id;

    /**
     * @ORM\Column(name="`group`", type="string", length=100, nullable=false)
     */
    protected string $group;

    /**
     * @ORM\Column(name="key", type="string", length=100, nullable=false)
     */
    protected string $key;

    /**
     * @ORM\Column(name="value", type="text", length=65535, nullable=false)
     */
    protected string $value;

    /**
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    protected string $description;

    /**
     * @ORM\Column(name="type", type="string", length=255, nullable=true, options={"default"=NULL})
     */
    protected ?string $type;

    public function getId(): int
    {
        return $this->id;
    }

    public function getGroup(): string
    {
        return $this->group;
    }

    public function setGroup(string $group): void
    {
        $this->group = $group;
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function setKey(string $key): void
    {
        $this->key = $key;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): void
    {
        if ($type !== null && !in_array($type, self::TYPES)) {
            throw new InvalidArgumentException('invalid type');
        }
        $this->type = $type;
    }
}
