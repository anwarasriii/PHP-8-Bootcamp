<?php

enum dayOfWeeks{
    case MONDAY;
    case TUESDAY;
    case WEDNESDAY;
    case THURSDAY;
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}

$today = dayOfWeeks::SUNDAY;

if($today === dayOfWeeks::SUNDAY){
    echo "Today is Sunday\n";
}

enum Colour: string{
    case RED = "#FF0000";
    CASE GREEN = "#00FF00";
}

echo Colour::RED->value;

function isWeekend(dayOfWeeks $day) : bool {
    return $day === dayOfWeeks::SATURDAY || $day ===dayOfWeeks::SUNDAY;
}

echo isWeekend(dayOfWeeks::SUNDAY)? 'yes' : 'no';