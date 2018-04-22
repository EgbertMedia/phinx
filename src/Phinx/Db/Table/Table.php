<?php
namespace Phinx\Db\Table;

use InvalidArgumentException;

class Table
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name The table name
     */
    public function __construct($name, array $options = [])
    {
        if (empty($name)) {
            throw new InvalidArgumentException('Cannot use an empty table name');
        }

        $this->name = $name;
        $this->options = $options;
    }

    /**
     * Sets the table name.
     *
     * @param string $name
     * @return \Phinx\Db\Table\Table
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the table name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Gets the table options
     *
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Sets the table options
     *
     * @return array
     */
    public function setOptions(array $options)
    {
        $this->options = $options;
    }
}
