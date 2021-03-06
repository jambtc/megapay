<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Blockchains;

/**
 * BlockchainsSearch represents the model behind the search form of `app\models\Blockchains`.
 */
class BlockchainsSearch extends Blockchains
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'zerogas', ], 'integer'],
            [['denomination', 'url', 'symbol', 'chain_id', 'url_block_explorer'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Blockchains::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'id_user' => $this->id_user,
            'zerogas' => $this->zerogas,
        ]);

        $query->andFilterWhere(['like', 'denomination', $this->denomination])
            ->andFilterWhere(['like', 'chain_id', $this->chain_id])
            ->andFilterWhere(['like', 'url_block_explorer', $this->url_block_explorer])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'symbol', $this->symbol]);

        return $dataProvider;
    }
}
