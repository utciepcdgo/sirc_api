<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

trait FilterableByRelation
{
    /**
     * Filter the model by the given relation.
     * Si los parámetros 'municipality', 'syndic' y 'councils' son falsos, se filtra por Coalición.
     *
     * @param  string  $relation  - The relation to filter by.
     * @param  int  $entityId  - The entity id to filter by.
     * @param  string  $filteringBy  - The filtering by to filter by. Possible values: 'coalition', 'party'.
     */
    public static function filterByX(string $relation, int $entityId, string $filteringBy): Builder
    {
        return (new static)->newModelQuery()->whereDoesntHave($relation, function ($query) use ($filteringBy) {
            $query->where('municipality', false)
                ->{self::_filterByHelper($filteringBy)[1]}('syndic', false)
                ->{self::_filterByHelper($filteringBy)[1]}('councils', ! null);
        });
    }

    // Helper function for filterBy method to define if it is filtering by Coalition or Party based on param $filteringBy.
    public static function _filterByHelper(string $_filteringBy): array
    {
        return $_filteringBy === 'coalition' ? ['!=', 'where'] : ['=', 'where'];
    }
}
