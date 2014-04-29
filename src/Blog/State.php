<?php

namespace Liuggio\Blog;


class State {

    const STATE_DRAFT = 'draft';
    const STATE_PUBLIC = 'public';

    private $state;

    public function __construct($state)
    {
        if (!$this->isAValidState($state)) {
            throw new \Exception('Invalid state ...');
        }
        $this->state = $state;
    }

    public static function draft()
    {
       return new self(self::STATE_DRAFT);
    }

    public static function published()
    {
        return new self(self::STATE_PUBLIC);
    }

    public function isPublic()
    {
        return ($this->state == self::STATE_PUBLIC);
    }

    public function __toString()
    {
        return $this->state;
    }

    private function isAValidState($state)
    {
        if ($state !== self::STATE_PUBLIC && $state !== self::STATE_DRAFT)
        {
            return false;
        }

        return true;
    }
}