<?php
namespace ITRocks\Task;

use ITRocks\Framework\Tools\Date_Time;
use ITRocks\Planner\Task\Duration;
use ITRocks\Task\Year_Of_Weeks\Demo\Plank;
use ITRocks\Task\Year_Of_Weeks\Demo\Task;
use ITRocks\Ticket\Task\Type;

/**
 * A demonstration of what we can plan in a year of weeks containing tasks
 */
class Year_Of_Weeks
{

	//------------------------------------------------------------------------------------ $resources
	/**
	 * @var Resource[]
	 */
	public $resources;

	//---------------------------------------------------------------------------------------- $weeks
	/**
	 * @var integer[]
	 */
	public $weeks;

	//----------------------------------------------------------------------------------- __construct
	public function __construct()
	{
		$grow    = new Type('Grow');
		$harvest = new Type('Harvest');
		$plant   = new Type('Plant');
		$sow     = new Type('Sow');

		$sow_salad   = new Task('Semis salade', $sow, 0);
		$plant_salad = new Task('Plante salade', $plant, Duration::WEEK, $sow_salad, Duration::weeks(4));
		$grow_salad  = new Task('Pousse salade', $grow, Duration::weeks(7), $plant_salad);
		new Task('Récolte salade', $harvest, Duration::weeks(3), $grow_salad);
		$plank_task        = new Plank\Task($sow_salad, new Date_Time('2018-01-08'));
		$this->resources[] = new Plank('A1', [$plank_task]);

		for ($week = 1; $week <= 52; $week ++) {
			$this->weeks[$week] = $week;
		}
	}

}
