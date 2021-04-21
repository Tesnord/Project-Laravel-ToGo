<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;

class Menu extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     * @param $rows
     * @param $id
     * @return bool
     * @var $menu_categories
     */
    public function run()
    {


        function has_children($rows, $id)
        {
            foreach ($rows as $row) {
                if ($row['parent_id'] == $id)
                    return true;
            }
            return false;
        }

        function build_menu($rows, $parent = 1, $level = 1)
        {
            $level++;

            if ($level === 1) {
                $result = '<div class="menu__submenu-list"><ul>';
            } else {
                $result = "<ul>";
            }


            foreach ($rows as $row) {
                if ($row['parent_id'] == $parent) {
                    $result .= "<li><a href='#'>{$row['name']} {$level}";
                    if (has_children($rows, $row['id'])) {
                        $result .= build_menu($rows, $row['id'], $level);
                    }
                    $result .= "</li>";
                }
            }

            if ($level === 1) {
                $result .= '</ul></div>';
            } else {
                $result .= "</ul>";
            }

            $level--;
            return $result;
        }

//        echo build_menu($menu_categories);

//        return view('home', [
//            'config' => $this->config,
//        ]);
    }
}
