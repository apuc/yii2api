<?php

namespace api\models;

use common\models\db\City;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class CitySearch extends City
{
    public function scenarios()
    {
        return Model::scenarios();
    }
    /**
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = City::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $this->load($params);
        if (!$this->validate()) {
            return $dataProvider;
        }
        return $dataProvider;
    }
}