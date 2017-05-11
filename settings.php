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
 * Contains settings used by logs report.
 *
 * @package    report_mobile
 * @copyright  2017 Juan Leyva
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if (!empty($CFG->enablemobilewebservice)) {
    $ADMIN->add('reports', new admin_externalpage('reportmobile', get_string('pluginname', 'report_mobile'),
        $CFG->wwwroot . "/report/mobile/index.php", 'report/mobile:view'));
    $ADMIN->add('reports', new admin_externalpage('userdevicesreport', get_string('userdevicesreport', 'report_mobile'),
        $CFG->wwwroot . "/report/mobile/devices.php", 'report/mobile:view'));
}

// No report settings.
$settings = null;
