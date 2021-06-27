<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "divisi".
 *
 * @property int $id
 * @property string $nama_divisi
 *
 * @property Cyber[] $cybers
 */
class Divisi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'divisi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_divisi'], 'required'],
            [['nama_divisi'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_divisi' => 'Nama Divisi',
        ];
    }

    /**
     * Gets query for [[Cybers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCybers()
    {
        return $this->hasMany(Cyber::className(), ['id_divisi' => 'id']);
    }
}
