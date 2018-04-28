<?php

/**
 * This is the model class for table "Outbooks".
 *
 * The followings are the available columns in table 'Outbooks':
 * @property integer $Issued_ID
 * @property integer $Book_ID
 * @property integer $User_ID
 * @property string $Status
 * @property string $Issued_Date
 * @property string $Return_Date
 * @property integer $id
 */
class Outbooks extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'outbooks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Issued_ID, Book_ID, User_ID, Status, Issued_Date, Return_Date', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Issued_ID, Book_ID, User_ID, Status, Issued_Date, Return_Date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Issued_ID' => 'Issued ID',
			'Book_ID' => 'Book ID',
			'User_ID' => 'User ID',
			'Status' => 'Status',
			'Issued_Date' => 'Issued Date',
			'Return_Date' => 'Return Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	 
	
	 
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.


	$criteria=new CDbCriteria;
		

  
		$criteria->compare('Issued_ID',$this->Issued_ID);
		$criteria->compare('Book_ID',$this->Book_ID,true);
		$criteria->compare('User_ID',$this->User_ID,true);
		$criteria->compare('Status',$this->Status,true);
		$criteria->compare('Issued_Date',$this->Issued_Date,true);
		$criteria->compare('Return_Date',$this->Return_Date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getBook()
    {
		return $this->hasOne(Book::className(), ['id' => 'Book_ID']);
	}
	public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'User_ID']);
    }
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Outbooks the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
