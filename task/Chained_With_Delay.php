<?php
namespace ITRocks\Planner\Task;

/**
 * For a task that follows another task, with a delay
 */
trait Chained_With_Delay
{
	use Chained;

	//---------------------------------------------------------------------------------------- $delay
	/**
	 * The delay between two tasks is in seconds
	 *
	 * @var integer
	 */
	public $delay;

}
