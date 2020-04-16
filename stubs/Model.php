<?php

namespace Illuminate\Database\Eloquent;

use Illuminate\Database\Eloquent\Builder;

/**
 * @template T
 */
class Model
{
    /** @var bool */
    public $timestamps;

    /** @var string */
    protected $connection;

    /** @var string */
    protected $table;

    /** @var array<string, string> */
    protected $casts;

    /** @var list<string> */
    protected $fillable;

    /** @var null|string */
    protected $dateFormat;

    public function __isset(string $name): void {}

    /** @return mixed */
    public function __get(string $name) {}
    /** @param mixed $value */
    public function __set(string $name, $value): void {}

    /**
     * @psalm-return T|Builder
     */
    public static function whereId() {}

    /**
     * @psalm-return T|Builder
     */
    public static function newModelQuery() {}

    /**
     * @psalm-return T|Builder
     */
    public static function newQuery() {}

    /**
     * @psalm-return T|Builder
     */
    public static function query() {}
}