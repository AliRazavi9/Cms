<?php
function createdUser($firstName, $lastName, $mobile, $password, $email, $role, $userName)
{
        global $tbl_user, $connect;

        $firstName = sanitize($firstName);
        $lastName = sanitize($lastName);
        $password = sanitize($password);
        $email = sanitize($email);
        $role = intval($role);
        $userName = sanitize($userName);
        $mobile = intval($mobile);
        $sql = <<<SQL
INSERT `$tbl_user` SET `userName`=?,`firstName`=?,`lastName`=?,`email`=?,`password`=?,`mobile`=?,`role`=?
SQL;
        $result = $connect->prepare($sql);
        $result->bindValue(1, $userName);
        $result->bindValue(2, $firstName);
        $result->bindValue(3, $lastName);
        $result->bindValue(4, $email);
        $result->bindValue(5, $password);
        $result->bindValue(6, $mobile);
        $result->bindValue(7, $role);
        $result->execute();
        return $result;
}