<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait InteractsWithJalali
{
    /**
     * Handle dynamic accessor calls for Jalali dates.
     *
     * @param  string  $key
     * @return mixed
     */
    public function __get($key)
    {
        if (Str::startsWith($key, 'jalali_') && Str::endsWith($key, '_at')) {
            $originalColumn = Str::after($key, 'jalali_');

            if ($this->isTimestampColumn($originalColumn)) {
                return $this->getJalaliAttribute($originalColumn);
            }
        }

        return parent::__get($key);
    }

    /**
     * Check if the given column is a timestamp column ending with _at.
     */
    protected function isTimestampColumn(string $column): bool
    {
        if (! Str::endsWith($column, '_at')) {
            return false;
        }

        $schema = $this->getConnection()->getSchemaBuilder();
        $table = $this->getTable();

        return $schema->hasColumn($table, $column);
    }

    /**
     * Get the Jalali representation of a timestamp column.
     */
    protected function getJalaliAttribute(string $column): ?string
    {
        $value = $this->getAttribute($column);

        if ($value === null) {
            return null;
        }

        return verta($value)->formatJalaliDatetime();
    }
}
