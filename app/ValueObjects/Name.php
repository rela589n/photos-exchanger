<?php


namespace App\ValueObjects;


final class Name
{
    public const MIN_LENGTH = 2;

    /**
     * @var string
     */
    protected $name;

    private function __construct(string $name)
    {
        if (mb_strlen($name) < self::MIN_LENGTH) {
            throw new \InvalidArgumentException('Name must has at least ' . self::MIN_LENGTH . ' characters');
        }

        $this->name = $name;
    }

    public static function create(string $name): Name
    {
        return new static($name);
    }

    public function value()
    {
        return $this->name;
    }
}