<?php
/**
 * Created by PhpStorm.
 * User: qwk
 * Date: 2019/4/11
 * Time: 17:00
 */

namespace app\index\model;

use app\index\model\baseModel;

class memberModel extends baseModel
{
    protected $pk = 'id';
    protected $table = 'wap_member';
}