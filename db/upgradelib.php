<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin upgrade helper functions are defined here.
 *
 * @package     local_suap
 * @category    upgrade
 * @copyright   2022 Kelson Medeiros <kelsoncm@gmail.com>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @see         https://docs.moodle.org/dev/Data_definition_API
 * @see         https://docs.moodle.org/dev/XMLDB_creating_new_DDL_functions
 * @see         https://docs.moodle.org/dev/Upgrade_API
 */

defined('MOODLE_INTERNAL') || die();


require_once($CFG->dirroot . '/local/suap/locallib.php');


function block_multiprogress_bulk_course_custom_field()
{
    global $DB;
    $cat = \local_suap\save_course_custom_field_category('customfield_category', 'Multi progress');

    \local_suap\save_course_custom_field($cat->id, 'multiprogress_course_alias', 'Aélido do curso');
    \local_suap\save_course_custom_field($cat->id, 'multiprogress_course_subtitle', 'Subtítulo do curso');
    \local_suap\save_course_custom_field($cat->id, 'multiprogress_course_image_url', 'URL da imagem do curso');
}
