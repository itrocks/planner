<?php
namespace ITRocks\Planner\Task;

/**
 * Duration constants and data
 */
class Duration
{

	//---------------------------------------------------------------------------- Duration constants
	const DAY    = self::HOUR * 24;
	const HOUR   = self::MINUTE * 60;
	const MINUTE = 60;
	const MONTH  = self::DAY * 30;
	const WEEK   = self::DAY * 7;

	//--------------------------------------------------------------------------------------- toWeeks
	/**
	 * Gets the duration from seconds to weeks
	 *
	 * @param $duration integer
	 * @return integer
	 */
	public static function toWeeks($duration)
	{
		return round($duration / self::WEEK);
	}

	//----------------------------------------------------------------------------------------- weeks
	/**
	 * Gets the duration of $weeks weeks
	 *
	 * @param $weeks integer
	 * @return integer
	 */
	public static function weeks($weeks)
	{
		return self::WEEK * $weeks;
	}

}
