<?php
function setName()
{
    $page = basename($_SERVER['REQUEST_URI']);
    $pageClean = explode(".", $page);
    $title = array_shift($pageClean);
    switch ($title) {
        case 'course':
            echo "دوره های -  فایولرن";
            break;

        case 'all-post':
            echo "تمامی مطالب - فایو لرن";
            break;

        case 'login-registration':
            echo "صفحه ورود و ثبت نام کاربری - فایو لرن";
            break;

        case 'profile':
            echo "صفحه کاربری - فایو لرن";
            break;

        case 'single':
            echo "صفحه مطالب دوره - فایو لرن";
            break;
        default:
            echo "وب سایت فایو لرن - مرجعه آموزش وب ";
            break;
    }
}

function sanitize($value){
    if(isset($value)){
        $level1=trim($value);
        $level2=strip_tags($level1);
    }
    return $level2;
}