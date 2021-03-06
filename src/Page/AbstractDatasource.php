<?php

namespace MakinaCorpus\Drupal\Dashboard\Page;

/**
 * Base implementation which leaves null a few mathods
 *
 * @codeCoverageIgnore
 */
abstract class AbstractDatasource implements DatasourceInterface
{
    /**
     * {@inheritdoc}
     */
    public function getFilters($query)
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getSortFields($query)
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getDefaultSort()
    {
    }

    /**
     * {@inheritdoc}
     */
    public function init(array $query, array $filter)
    {
    }

    /**
     * {@inheritdoc}
     */
    public function validateItems(array $query, array $idList)
    {
        return false;
    }
}
