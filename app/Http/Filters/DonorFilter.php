<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Schema;

class DonorFilter extends Filter
{
    
    /**
     * Filter the products by the given category.
     *
     * @param string|null $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function blood_group(string $value = null): Builder
    {
        return $this->builder->where('blood_group', $value);
    }
    
    /**
     * Filter the products by the given category.
     *
     * @param string|null $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function location(string $value = null): Builder
    {
        return $this->builder->where('location', $value);
    }
    
    /**
     * Sort the products by the given order and field.
     *
     * @param array $value
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function sort(array $value = []): Builder
    {
        if (isset($value['by']) && ! Schema::hasColumn('donors', $value['by'])) {
            return $this->builder;
        }
        
        return $this->builder->orderBy(
            $value['by'] ?? 'created_at', $value['order'] ?? 'desc'
        );
    }
}