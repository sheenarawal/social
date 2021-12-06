<?php

if (!function_exists('userStatus')){
    function userStatus($value=false)
    {
        switch ($value) {
            case "0":
                $data = ['badge' => 'warning', 'value' => 'Pending'];
                break;
            case "1":
                $data = ['badge' => 'success', 'value' => 'Active'];
                break;
            case "2":
                $data = ['badge' => 'danger', 'value' => 'Reject'];
                break;
            case "all":
                $data = [
                    '0' => 'Pending',
                    '1' => 'Active',
                    '2' => 'Reject',
                ];
                break;
            default:
                $data = ['badge' => 'warning', 'value' => 'Pending'];

        }
        return $data;
    }
}