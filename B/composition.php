<?php
    abstract class Lesson
    {
        protected $use;
        private $duration;
        private $costStrategy;

        const FIXED=1;
        const TIMED=2;
        private $course_type;

        public function __construct($duration, CostStrategy $costStrategy)
        {
            $this->duration=$duration;
            $this->costStrategy=$costStrategy;
        }

        public function cost()
        {
            return $this->costStrategy->cost($this);
        }

        public function chargeType()
        {
            return $this->costStrategy->chargeType();
        }

        public function getDuration()
        {
            return $this->duration;
        }



    }

abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);
    abstract function chargeType();
}

class TimeStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        return ($lesson->getDuration() * 5);
        // TODO: Implement cost() method.
    }

    public function chargeType()
    {
        return 'Погодинна оплата';
    }

}

class FixedStrategy extends CostStrategy
{
    public function cost(Lesson $lesson)
    {
        // TODO: Implement cost() method.
    }

    public function chargeType()
    {
        return 'Оплата за весь період';
    }

}

class Lecture extends FixedStrategy
{
    public function result()
    {
        return $this->chargeType();
    }
}