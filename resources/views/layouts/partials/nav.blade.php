<?php
///**
// * @param $rows
// * @param $id
// * @return bool
// * @var $menu_categories
// */
//
//function has_children($rows, $id)
//{
//    foreach ($rows as $row) {
//        if ($row['parent_id'] == $id)
//            return true;
//    }
//    return false;
//}
//
//function build_menu($rows, $parent = 1, $level = 1)
//{
//    $level++;
//
//    if ($level === 1) {
//        $result = '<div class="menu__submenu-list"><ul>';
//    } else {
//        $result = "<ul>";
//    }
//
//
//    foreach ($rows as $row) {
//        if ($row['parent_id'] == $parent) {
//            $result .= "<li><a href='#'>{$row['name']} {$level}";
//            if (has_children($rows, $row['id'])) {
//                $result .= build_menu($rows, $row['id'], $level);
//            }
//            $result .= "</li>";
//        }
//    }
//
//    if ($level === 1) {
//        $result .= '</ul></div>';
//    } else {
//        $result .= "</ul>";
//    }
//
//    $level--;
//    return $result;
//}
//
//echo build_menu($menu_categories);
//
// ?>
<ul>
    @foreach($menu_categories as $level_1)
    <li><a href="{{ route('catalog.index', ['path' => $level_1->getPath()]) }}">{{ $level_1->name }}</a>
        <div class="menu__submenu">
            <ul>
                @foreach($level_1->children as $level_2)
                    <div class="menu__submenu-list">
                        <a class="menu__submenu-title"
                           href="{{ route('catalog.index', ['path' => $level_2->getPath()]) }}">{{ $level_2->name }}</a>
                            @foreach($level_2->children as $level_3)
                                <li>
                                    <a href="{{ route('catalog.index', ['path' => $level_3->getPath()]) }}">{{ $level_3->name }}</a>
                                </li>
                            @endforeach
                    </div>
                @endforeach
            </ul>
        </div>
    </li>
    @endforeach
</ul>

