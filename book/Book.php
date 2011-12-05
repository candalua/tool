<?php
/**
* @author Thomas Pellissier Tanon
* @copyright 2011 Thomas Pellissier Tanon
* @licence http://www.gnu.org/licenses/gpl.html GNU General Public Licence
*/

/**
* container for all the data on a book
*/
class Book extends Page {

        /**
        * meatadata on the book
        * @see https://wikisource.org/wiki/Wikisource:Microformat
        */
        public $type = '';
        public $author = '';
        public $translator = '';
        public $school = '';
        public $publisher = '';
        public $year = '';
        public $place = '';
        public $key = '';
        public $progress = '';
        public $volume = '';
        public $summary = null;

        /**
        * list of the categories as string object like array('1859', 'France')
        */
        public $categories = array();

        /**
        * list of the chapters as Page object
        */
        public $chapters = array();
}