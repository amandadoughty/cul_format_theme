<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Format culcourse event handler definition.
 *
 * @package   format_culcourse
 * @copyright 2018 Amanda Doughty
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = [
    [
        'eventname'   => '\core\event\course_content_deleted',
        'callback'    => 'format_culcourse_observer::course_content_deleted',
    ],
    [
        'eventname'   => '\core\event\course_updated',
        'callback'    => 'format_culcourse_observer::course_updated',
    ],
    [
        'eventname'   => '\core\event\course_section_created',
        'callback'    => 'format_culcourse_observer::course_section_created',
    ],
    [
        'eventname'   => '\core\event\course_section_deleted',
        'callback'    => 'format_culcourse_observer::course_section_deleted',
    ]
];
