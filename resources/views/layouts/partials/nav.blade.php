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
    @foreach($menu_categories as $menu)
    <li><a href="{{ route('catalog.index', ['slug_category' => $menu->slug_category]) }}">{{ $menu->name }}</a>
        <div class="menu__submenu">
            <ul>
                @foreach($menu->children as $child)
                    <div class="menu__submenu-list">
                        <a class="menu__submenu-title"
                           href="{{ route('catalog.category', ['slug_category' => $child->slug_category]) }}">{{ $child->name }}</a>
                            @foreach($child->children as $children)
                                <li>
                                    <a href="{{ route('catalog.category', ['slug_category' => $children->slug_category]) }}">{{ $children->name }}</a>
                                </li>
                            @endforeach
                    </div>
                @endforeach
            </ul>
        </div>
    </li>
    @endforeach
</ul>

