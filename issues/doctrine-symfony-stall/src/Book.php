<?php

declare(strict_types=1);

namespace Repro;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
final class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    public int $id;

    #[ORM\Column]
    public string $isbn;

    #[ORM\Column]
    public string $title;

    #[ORM\Column]
    public string $subtitle;

    #[ORM\Column]
    public string $author;

    #[ORM\Column]
    public string $publisher;

    #[ORM\Column]
    public string $language;

    #[ORM\Column]
    public int $pages;

    #[ORM\Column]
    public float $price;

    #[ORM\Column]
    public string $currency;

    #[ORM\Column]
    public int $stock;

    #[ORM\Column]
    public float $weight;

    #[ORM\Column]
    public string $edition;

    #[ORM\Column]
    public string $format;

    #[ORM\Column]
    public \DateTimeImmutable $publishedAt;

    #[ORM\Column]
    public \DateTimeImmutable $createdAt;
}
