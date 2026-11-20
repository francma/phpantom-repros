<?php

declare(strict_types=1);

namespace Repro;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;

final class BookReport
{
    /** @param list<string> $columns */
    public function build(
        EntityManagerInterface $entityManager,
        array $columns,
        float $minimumPrice,
    ): QueryBuilder
    {
        $query = $entityManager->createQueryBuilder()
            ->select('book.id')
            ->from(Book::class, 'book');

        if (in_array('isbn', $columns, true)) {
            $query->addSelect('book.isbn');
        }

        if (in_array('title', $columns, true)) {
            $query->addSelect('book.title');
        }

        if (in_array('subtitle', $columns, true)) {
            $query->addSelect('book.subtitle');
        }

        if (in_array('author', $columns, true)) {
            $query->addSelect('book.author');
        }

        if (in_array('publisher', $columns, true)) {
            $query->addSelect('book.publisher');
        }

        if (in_array('language', $columns, true)) {
            $query->addSelect('book.language');
        }

        if (in_array('pages', $columns, true)) {
            $query->addSelect('book.pages');
        }

        if (in_array('price', $columns, true)) {
            $query->addSelect('book.price');
        }

        if (in_array('currency', $columns, true)) {
            $query->addSelect('book.currency');
        }

        if (in_array('stock', $columns, true)) {
            $query->addSelect('book.stock');
        }

        if (in_array('weight', $columns, true)) {
            $query->addSelect('book.weight');
        }

        if (in_array('edition', $columns, true)) {
            $query->addSelect('book.edition');
        }

        if (in_array('format', $columns, true)) {
            $query->addSelect('book.format');
        }

        if (in_array('publishedAt', $columns, true)) {
            $query->addSelect('book.publishedAt');
        }

        if (in_array('createdAt', $columns, true)) {
            $query->addSelect('book.createdAt');
        }

        $query->andWhere('book.price >= :minimumPrice');
        $query->setParameter('minimumPrice', $minimumPrice);

        return $query;
    }
}
