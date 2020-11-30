<?php

function return_msg($code, $msg = '', $data = [])
{
    $return_data['code'] = $code;
    $return_data['msg'] = $msg;
    $return_data['data'] = $data;
    echo json_encode($return_data,256);
    die;
}
