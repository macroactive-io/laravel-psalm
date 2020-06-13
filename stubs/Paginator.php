<?php

namespace Illuminate\Contracts\Pagination;

/**
 * @template T of Model
 */
interface Paginator
{
    /**
     * Get all of the items being paginated.
     *
     * @return array<T>
     */
    public function items();
}
