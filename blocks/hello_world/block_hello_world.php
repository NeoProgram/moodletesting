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
 * Block displaying information about current logged-in user.
 *
 * This block can be used as anti cheating measure, you
 * can easily check the logged-in user matches the person
 * operating the computer.
 *
 * @package    block_hello_world
 * @copyright  2021 Rafael Sarmiento
 * @author     Rafael Sarmiento
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

/**
 * Displays the current user's profile information.
 *
 * @copyright  2021 Rafael Sarmiento
 * @author     Rafael Sarmiento
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class block_hello_world extends block_base {
    /**
     * block initializations
     */
    public function init() {
        $this->title = get_string('pluginname', 'block_hello_world');
    }

    public function get_content() {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content         = new stdClass;
        $this->content->items  = array();
        $this->content->icons  = array();
        $this->content->text = 'The content of our Hello World block';
        $this->content->footer = 'Footer here...';

        $this->content->items[] = html_writer::tag('a', 'Menu Option 1', array('href' => 'some_file.php'));
        $this->content->icons[] = html_writer::empty_tag('img', array('src' => 'images/icons/1.gif', 'class' => 'icon'));

        // Add more list items here

        return $this->content;
    }
}
