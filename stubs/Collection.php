<?php

namespace Illuminate\Support;

use ArrayAccess;
use Illuminate\Support\Enumerable;

/**
 * Ideas of markup could be fetched from https://github.com/doctrine/collections/blob/master/lib/Doctrine/Common/Collections/Collection.php
 *
 * @template TKey of array-key
 * @template T
 * @template-extends ArrayAccess<TKey|null, T>
 */
class Collection implements ArrayAccess, Enumerable
{
    /**
     * Get all of the items in the collection.
     *
     * @psalm-return T[]
     * @return array
     */
    public function all() {}

    /**
     * Get the average value of a given key.
     *
     * @param callable|string|null $callback
     * @return mixed
     */
    public function avg($callback = null) {}

    /**
     * Get the median of a given key.
     *
     * @param string|array|null $key
     * @return mixed
     */
    public function median($key = null) {}

    /**
     * Get the mode of a given key.
     *
     * @param string|array|null $key
     * @return array|null
     */
    public function mode($key = null) {}

    /**
     * Collapse the collection of items into a single array.
     *
     * @return static
     */
    public function collapse() {}

    /**
     * Determine if an item exists in the collection.
     *
     * @param mixed $key
     * @param mixed $operator
     * @param mixed $value
     * @return bool
     */
    public function contains($key, $operator = null, $value = null) {}

    /**
     * Cross join with the given lists, returning all possible permutations.
     *
     * @param mixed ...$lists
     * @return static
     */
    public function crossJoin(...$lists) {}

    /**
     * Get the items in the collection that are not present in the given items.
     *
     * @param mixed $items
     * @psalm-param T[] $items
     * @return static
     */
    public function diff($items) {}

    /**
     * Get the items in the collection that are not present in the given items, using the callback.
     *
     * @param mixed    $items
     * @psalm-param T[] $items
     * @param callable $callback
     * @return static
     */
    public function diffUsing($items, callable $callback) {}

    /**
     * Get the items in the collection whose keys and values are not present in the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function diffAssoc($items) {}

    /**
     * Get the items in the collection whose keys and values are not present in the given items, using the callback.
     *
     * @param mixed    $items
     * @param callable $callback
     * @return static
     */
    public function diffAssocUsing($items, callable $callback) {}

    /**
     * Get the items in the collection whose keys are not present in the given items.
     *
     * @param mixed $items
     * @psalm-param TKey[]
     * @return static
     */
    public function diffKeys($items) {}

    /**
     * Get the items in the collection whose keys are not present in the given items, using the callback.
     *
     * @param mixed    $items
     * @param callable $callback
     *
     * @psalm-return static<T>
     * @return static
     */
    public function diffKeysUsing($items, callable $callback) {}

    /**
     * Retrieve duplicate items from the collection.
     *
     * @param callable|null $callback
     * @param bool          $strict
     * @return static
     */
    public function duplicates($callback = null, $strict = false) {}

    /**
     * Retrieve duplicate items from the collection using strict comparison.
     *
     * @param callable|null $callback
     * @return static
     */
    public function duplicatesStrict($callback = null) {}

    /**
     * Get all items except for those with the specified keys.
     *
     * @param self|mixed $keys
     * @return static
     */
    public function except($keys) {}

    /**
     * Run a filter over each of the items.
     *
     * @param callable|null $callback
     * @return static
     */
    public function filter(callable $callback = null) {}

    /**
     * Get the first item from the collection passing the given truth test.
     *
     * @param callable|null $callback
     * @param mixed         $default
     * @return mixed
     */
    public function first(callable $callback = null, $default = null) {}

    /**
     * Get a flattened array of the items in the collection.
     *
     * @param int $depth
     * @return static
     */
    public function flatten($depth = INF) {}

    /**
     * Flip the items in the collection.
     *
     * @return static
     */
    public function flip() {}

    /**
     * Remove an item from the collection by key.
     *
     * @param string|array $keys
     * @return self
     */
    public function forget($keys) {}

    /**
     * Get an item from the collection by key.
     *
     * @param mixed $key
     * @param mixed $default
     *
     * @psalm-return T
     * @return mixed
     */
    public function get($key, $default = null) {}

    /**
     * Group an associative array by a field or using a callback.
     *
     * @param array|callable|string $groupBy
     * @param bool                  $preserveKeys
     * @return static
     */
    public function groupBy($groupBy, $preserveKeys = false) {}

    /**
     * Key an associative array by a field or using a callback.
     *
     * @param callable|string $keyBy
     * @return static
     */
    public function keyBy($keyBy) {}

    /**
     * Determine if an item exists in the collection by key.
     *
     * @param mixed $key
     * @return bool
     */
    public function has($key) {}

    /**
     * Concatenate values of a given key as a string.
     *
     * @param string $value
     * @param string $glue
     * @return string
     */
    public function implode($value, $glue = null) {}

    /**
     * Intersect the collection with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function intersect($items) {}

    /**
     * Intersect the collection with the given items by key.
     *
     * @param mixed $items
     * @return static
     */
    public function intersectByKeys($items) {}

    /**
     * Determine if the collection is empty or not.
     *
     * @return bool
     */
    public function isEmpty() {}

    /**
     * Join all items from the collection using a string. The final items can use a separate glue string.
     *
     * @param string $glue
     * @param string $finalGlue
     * @return string
     */
    public function join($glue, $finalGlue = '') {}

    /**
     * Get the keys of the collection items.
     *
     * @return static
     * @psalm-return static<TKey>
     */
    public function keys() {}

    /**
     * Get the last item from the collection.
     *
     * @param callable|null $callback
     * @param mixed         $default
     * @return mixed
     * @psalm-return T
     */
    public function last(callable $callback = null, $default = null) {}

    /**
     * Get the values of a given key.
     *
     * @param string|array $value
     * @param string|null  $key
     * @return static
     * @psalm-return static<T>
     */
    public function pluck($value, $key = null) {}

    /**
     * Run a map over each of the items.
     *
     * @param callable $callback
     * @return static
     */
    public function map(callable $callback) {}

    /**
     * Run a dictionary map over the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param callable $callback
     * @return static
     */
    public function mapToDictionary(callable $callback) {}

    /**
     * Run an associative map over each of the items.
     *
     * The callback should return an associative array with a single key/value pair.
     *
     * @param callable $callback
     * @return static
     */
    public function mapWithKeys(callable $callback) {}

    /**
     * Merge the collection with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function merge($items) {}

    /**
     * Recursively merge the collection with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function mergeRecursive($items) {}

    /**
     * Create a collection by using this collection for keys and another for its values.
     *
     * @param mixed $values
     * @return static
     */
    public function combine($values) {}

    /**
     * Union the collection with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function union($items) {}

    /**
     * Create a new collection consisting of every n-th element.
     *
     * @param int $step
     * @param int $offset
     * @return static
     */
    public function nth($step, $offset = 0) {}

    /**
     * Get the items with the specified keys.
     *
     * @param mixed $keys
     * @return static
     */
    public function only($keys) {}

    /**
     * Get and remove the last item from the collection.
     *
     * @return mixed
     * @psalm-return T
     */
    public function pop() {}

    /**
     * Push an item onto the beginning of the collection.
     *
     * @psalm-param T
     *
     * @param mixed $value
     * @param mixed $key
     * @return self
     */
    public function prepend($value, $key = null) {}

    /**
     * Push an item onto the end of the collection.
     *
     * @param mixed $value
     * @return self
     */
    public function push($value) {}

    /**
     * Push all of the given items onto the collection.
     *
     * @param iterable $source
     * @return static
     */
    public function concat($source) {}

    /**
     * Get and remove an item from the collection.
     *
     * @param mixed $key
     * @param mixed $default
     * @return mixed
     */
    public function pull($key, $default = null) {}

    /**
     * Put an item in the collection by key.
     *
     * @param mixed $key
     * @param mixed $value
     * @return self
     */
    public function put($key, $value) {}

    /**
     * Get one or a specified number of items randomly from the collection.
     *
     * @param int|null $number
     * @return static|mixed
     *
     * @throws \InvalidArgumentException
     */
    public function random($number = null) {}

    /**
     * Reduce the collection to a single value.
     *
     * @param callable $callback
     * @param mixed    $initial
     * @return mixed
     */
    public function reduce(callable $callback, $initial = null) {}

    /**
     * Replace the collection items with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function replace($items) {}

    /**
     * Recursively replace the collection items with the given items.
     *
     * @param mixed $items
     * @return static
     */
    public function replaceRecursive($items) {}

    /**
     * Reverse items order.
     *
     * @return static
     */
    public function reverse() {}

    /**
     * Search the collection for a given value and return the corresponding key if successful.
     *
     * @param mixed $value
     * @param bool  $strict
     * @return mixed
     */
    public function search($value, $strict = false) {}

    /**
     * Get and remove the first item from the collection.
     *
     * @return mixed
     */
    public function shift() {}

    /**
     * Shuffle the items in the collection.
     *
     * @param int $seed
     * @return static
     */
    public function shuffle($seed = null) {}

    /**
     * Skip the first {$count} items.
     *
     * @param int $count
     * @return static
     */
    public function skip($count) {}

    /**
     * Slice the underlying collection array.
     *
     * @param int $offset
     * @param int $length
     * @return static
     */
    public function slice($offset, $length = null) {}

    /**
     * Split a collection into a certain number of groups.
     *
     * @param int $numberOfGroups
     * @return static
     */
    public function split($numberOfGroups) {}

    /**
     * Chunk the collection into chunks of the given size.
     *
     * @param int $size
     * @return static
     */
    public function chunk($size) {}

    /**
     * Sort through each item with a callback.
     *
     * @param callable|null $callback
     * @return static
     */
    public function sort(callable $callback = null) {}

    /**
     * Sort the collection using the given callback.
     *
     * @param callable|string $callback
     * @param int             $options
     * @param bool            $descending
     * @return static
     */
    public function sortBy($callback, $options = SORT_REGULAR, $descending = false) {}

    /**
     * Sort the collection in descending order using the given callback.
     *
     * @param callable|string $callback
     * @param int             $options
     * @return static
     */
    public function sortByDesc($callback, $options = SORT_REGULAR) {}

    /**
     * Sort the collection keys.
     *
     * @param int  $options
     * @param bool $descending
     * @return static
     */
    public function sortKeys($options = SORT_REGULAR, $descending = false) {}

    /**
     * Sort the collection keys in descending order.
     *
     * @param int $options
     * @return static
     */
    public function sortKeysDesc($options = SORT_REGULAR) {}

    /**
     * Splice a portion of the underlying collection array.
     *
     * @param int      $offset
     * @param int|null $length
     * @param mixed    $replacement
     * @return static
     */
    public function splice($offset, $length = null, $replacement = []) {}

    /**
     * Take the first or last {$limit} items.
     *
     * @param int $limit
     * @return static
     */
    public function take($limit) {}

    /**
     * Transform each item in the collection using a callback.
     *
     * @param callable $callback
     * @return self
     */
    public function transform(callable $callback) {}

    /**
     * Reset the keys on the underlying array.
     *
     * @return static
     */
    public function values() {}

    /**
     * Zip the collection together with one or more arrays.
     *
     * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]) {}
     *      => [[1, 4], [2, 5], [3, 6]]
     *
     * @param mixed ...$items
     * @return static
     */
    public function zip($items) {}

    /**
     * Pad collection to the specified length with a value.
     *
     * @param int   $size
     * @param mixed $value
     * @return static
     */
    public function pad($size, $value) {}

    /**
     * Get an iterator for the items.
     *
     * @return \ArrayIterator
     */
    public function getIterator() {}

    /**
     * Count the number of items in the collection.
     *
     * @return int
     */
    public function count() {}

    /**
     * Add an item to the collection.
     *
     * @param mixed $item
     * @return self
     */
    public function add($item) {}

    /**
     * Get a base Support collection instance from this collection.
     *
     * @return self
     */
    public function toBase() {}

    /**
     * Determine if an item exists at an offset.
     *
     * @param mixed $key
     * @return bool
     */
    public function offsetExists($key) {}

    /**
     * Get an item at a given offset.
     *
     * @param mixed $key
     * @return mixed
     */
    public function offsetGet($key) {}

    /**
     * Set the item at a given offset.
     *
     * @param mixed $key
     * @param mixed $value
     * @return void
     */
    public function offsetSet($key, $value) {}

    /**
     * Unset the item at a given offset.
     *
     * @param string $key
     * @return void
     */
    public function offsetUnset($key) {}
}