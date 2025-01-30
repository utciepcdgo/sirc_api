<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait FilterableByRelation
{
    /**
     * Filter the model by the given relation.
     * Si los parámetros 'municipality', 'syndic' y 'councils' son falsos, se filtra por Coalición.
     *
     * @param string $relation - The relation to filter by.
     * @param string $filteringBy - The filtering by to filter by. Possible values: 'coalition', 'party'.
     * @return Builder
     */
    public static function filterByX(string $relation, string $filteringBy): Builder
    {
        return (new static)->newModelQuery()->whereHas($relation, function ($query) use ($filteringBy) {
            $query->where('municipality', self::_filterByHelper($filteringBy)[0])
                ->orWhere('syndic', self::_filterByHelper($filteringBy)[0])
                ->orWhere('councils', self::_filterByHelper($filteringBy)[1]);
        });
    }

    // Helper function for filterBy method to define if it is filtering by Coalition or Party based on param $filteringBy.
    public static function _filterByHelper(string $_filteringBy): array
    {
        return $_filteringBy === 'App\Models\Coalition' ? [true, ! null] : [false, null];
    }
}
