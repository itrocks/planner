<?php
namespace ITRocks\Planner\Task;

/**
 * For a task that has a planned duration
 *
 * @extends Task
 */
trait Has_Duration
{

	//------------------------------------------------------------------------------------- $duration
	/**
	 * The duration of the task, in seconds
	 *
	 * @var integer
	 */
	public $duration;

}
