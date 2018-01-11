<?php

if (!function_exists('typeIsUuid'))
{
    function typeIsUuid($uuid)
    {
        assert(valid_num_args());

        if (is_string($uuid)) {
            $uuid = trim($uuid);
            if (preg_match("/^(\{)?[a-f\d]{8}(-[a-f\d]{4}){4}[a-f\d]{8}(?(1)\})$/i", $uuid)) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('typeUuidToBin'))
{
    function typeUuidToBin($uuid)
    {
        if (typeIsUuid($uuid)) {
            $uuid = trim($uuid);
            $uuid = str_replace('-', '', $uuid);
            return hex2bin($uuid);
        }

        throw new \Exception(409, "The given value was not a valid uuid");
    }
}
