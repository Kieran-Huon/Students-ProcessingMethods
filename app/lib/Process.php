<?php

namespace Library;

use Sourcecode\ProcessingMethod;

class Process
{
    protected $_name = '';
    protected $_action = '';
    protected $_size = null;
    protected $_processor = null;

    public function __construct(string $processName, string $action)
    {
        $this->_name = $processName;
        $this->_action = $action;
        $this->_size = strlen($this->_action);
    }

    public function run()
    {
        echo $this->_action;
        return $this;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getSize()
    {
        return $this->_size;
    }

    public function setProcessor(ProcessingMethod $processor)
    {
        $this->_processor = $processor;
        return $this;
    }

    public function getProcessor()
    {
        return $this->_processor;
    }
}
