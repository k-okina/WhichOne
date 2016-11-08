<?php

/**
 * ラッピングしてないやつ
 * @param  obj or array
 * @return array
 */
function notWrap($data_) : array
{
    return array_merge((array)$data_,[
        'status'  => 'success',
        'code'    => 200,
        'message' => 'success get datas'
    ]);
}

/**
 * ラッピングした奴
 * @param  mixed
 * @return array
 */
function wrap($data_) : array
{
    return [
        'status'  => 'success',
        'code'    => 200,
        'data'    => $data_,
        'message' => 'success get datas'
    ];
}
