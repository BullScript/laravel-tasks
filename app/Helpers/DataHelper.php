<?php
namespace App\Helpers;

class DataHelper
{

    public static function clientTypes()
    {
        return [
            'Free-Trial',
            'Test',
            'Subscriber',
            'Enterprise'
        ];
    }

    public static function taskPriorityTypes()
    {
        return [
            'Normal',
            'High',
            'Urgent'
        ];
    }

    public static function taskStatusTypes()
    {
        return [
            'Open',
            'Dev in Progress',
            'In Review',
            'QA Ready',
            'QA in Progress',
            'Ready for Deployment',
            'Released',
            'Dev Ready',
            'Hold',
            'Cancelled',
            'Closed'
        ];
    }

    public static function taskTypes()
    {
        return [
            'Feature',
            'Improvement',
            'Bug',
            'Todo'
        ];
    }
}
