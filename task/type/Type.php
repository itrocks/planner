<?php
namespace ITRocks\Planner\Task;

use ITRocks\Framework\Traits\Has_Name;

/**
 * A task type
 */
class Type
{
	use Has_Name;

	//----------------------------------------------------------------------------------- __construct
	/**
	 * @param $name string
	 */
	public function __construct($name = null)
	{
		if ($name) {
			$this->name = $name;
		}
	}

}
