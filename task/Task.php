<?php
namespace ITRocks\Planner;

use ITRocks\Framework\Traits\Has_Name;
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
	use Has_Name;
	use Has_Type;

	//----------------------------------------------------------------------------------- __construct
	/**
	 * A task constructor with a lot of base data
	 *
	 * @param $name     string
	 * @param $type     Type
	 * @param $duration integer
	 * @param $follows  Task
	 * @param $delay    integer
	 */
	public function __construct(
		$name = null, Type $type = null, $duration = null, Task $follows = null, $delay = null
	) {
		if ($delay)    $this->delay    = $delay;
		if ($duration) $this->duration = $duration;
		if ($follows)  $this->follows  = $follows;
		if ($name)     $this->name     = $name;
		if ($type)     $this->type     = $type;
	}

}
