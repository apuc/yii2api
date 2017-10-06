<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 05.10.17
 * Time: 13:17
 */

namespace backend\modules\city\models;

class City extends \common\models\db\City
{
    public function rules()
    {
        $rules = parent::rules();
        $rules['name'] = ['name', 'unique'];
        return $rules;
    }
}