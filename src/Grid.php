<?php

namespace DeBandai;

class Grid
{
    /** @var Cell[] */
    protected $cells;

    /**
     * Grid constructor.
     *
     * @param [] $cells
     */
    public function __construct()
    {
        for ($row = 0; $row <= 2; $row++) {
            for ($column = 0; $column <= 2; $column++) {
                $this->cells["$row$column"] = new Cell($row,$column);
            }
        }

    }

    public function getCell($x, $y): Cell
    {
        return $this->cells["$x$y"];
    }

    public function isEmpty(): bool
    {
        foreach ($this->cells as $cell) {
            if(!$cell->isEmpty()){
                return false;
            }
        }
        return true;
    }

    public function doMove(int $row, int $column, ?string $value)
    {
        $this->cells["$row$column"]->setValue($value);
    }
}