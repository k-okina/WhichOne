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
