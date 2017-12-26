<?php
namespace ITRocks\Planner\Task;

use ITRocks\Planner\Task;

/**
 * For a task that follows another task
 *
 * @extends Task
 */
trait Chained
{

	//-------------------------------------------------------------------------------------- $follows
	/**
	 * @link Object
	 * @setter
	 * @var Task
	 */
	public $follows;

	//------------------------------------------------------------------------------------- $precedes
	/**
	 * @link Object
	 * @setter
	 * @var Task
	 */
	public $precedes;

	//------------------------------------------------------------------------------------ setFollows
	/**
	 * @param $follows Task|static|null
	 */
	protected function setFollows(Task $follows = null)
	{
		$this->follows = $follows;
		if ($follows) {
			$follows->precedes = $this;
		}
	}

	//----------------------------------------------------------------------------------- setPrecedes
	/**
	 * @param $precedes Task|static|null
	 */
	protected function setPrecedes(Task $precedes = null)
	{
		$this->precedes = $precedes;
		if ($precedes) {
			$precedes->follows = $this;
		}
	}

}
