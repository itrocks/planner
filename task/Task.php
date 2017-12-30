<?php
namespace ITRocks\Planner;

use ITRocks\Framework\Traits\Has_Object;
use ITRocks\Planner\Task\Chained_With_Delay;
use ITRocks\Planner\Task\Has_Duration;
use ITRocks\Planner\Task\Type;
use ITRocks\Planner\Task\Type\Has_Type;

/**
 * A task is something you have to do
 */
class Task
{
	use Chained_With_Delay;
	use Has_Duration;
	use Has_Object { __toString as private hasObjectToString; }
	use Has_Type;

	//----------------------------------------------------------------------------------- __construct
	/**
	 * A task constructor with a lot of base data
	 *
	 * @param $object   object
	 * @param $type     Type
	 * @param $duration integer
	 * @param $follows  Task
	 * @param $delay    integer
	 */
	public function __construct(
		$object = null, Type $type = null, $duration = null, Task $follows = null, $delay = null
	) {
		if (isset($delay))    $this->delay    = $delay;
		if (isset($duration)) $this->duration = $duration;
		if (isset($follows))  $this->follows  = $follows;
		if (isset($object))   $this->object   = $object;
		if (isset($type))     $this->type     = $type;
	}

	//------------------------------------------------------------------------------------ __toString
	/**
	 * @return string
	 */
	public function __toString()
	{
		return $this->type . SP . $this->object;
	}

}
