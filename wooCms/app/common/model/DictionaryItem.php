<?php
namespace app\common\model;

class DictionaryItem extends App
{
    public $display = 'value';
    public $parentModel = 'Dictionary';
    public $assoc = array(
        'Dictionary' => array(
            'type' => 'belongsTo',
            'counterCache' => true
        )
    );


    public function initialize()
    {
        $this->form = array(
            'id' => array(
                'type' => 'integer',
                'name' => 'ID',
                'elem' => 'hidden',
            ),
            'dictionary_id' => array(
                'type' => 'integer',
                'name' => '所属字典',
                'list' => 'assoc',
                'elem' => 'format',
                'prepare' => array(
                    'property' => 'options',
                    'type' => 'select',
                    'params' => array(
                        'where' => array()
                    )
                ),
                'foreign' => 'Dictionary.title',
            ),
            'key' => array(
                'type' => 'string',
                'name' => '键',
                'elem' => 'text',
                'info' => '为空，将使用ID',
            ),
            'value' => array(
                'type' => 'string',
                'name' => '值',
                'elem' => 'text',
            ),
            'list_order' => array(
                'type' => 'integer',
                'name' => '排序依据',
                'elem' => 'number',
            ),
            'created' => array(
                'type' => 'datetime',
                'name' => '添加时间',
                'elem' => 0,
                'list' => 'datetime'
            ),
            'modified' => array(
                'type' => 'datetime',
                'name' => '修改时间',
                'elem' => 0,
                'list' => 'datetime'
            ),
        );

        call_user_func_array(array('parent', __FUNCTION__), func_get_args());
    }

    protected $validate = array(
        'value' => array(
            'rule' => 'require',
            'message' => '请填写值'
        )
    );

    public function afterInsertCall()
    {
        $parent_rslt = call_user_func(array('parent', __FUNCTION__));
        if ($this['dictionary_id']) {
            model('Dictionary')->writeToFile($this['dictionary_id']);
        }
    }

    public function afterUpdateCall()
    {
        $parent_rslt = call_user_func(array('parent', __FUNCTION__));
        if ($this->oldData && $this->getData()) {
            $dictModel = model('Dictionary');
            
            if ($this->oldData['dictionary_id'] != $this['dictionary_id']) {
                $dictModel->writeToFile($this->oldData['dictionary_id']);
            }
            
            if ($this->oldData['key'] != $this['key'] || $this->oldData['value'] != $this['value'] || $this->oldData['dictionary_id'] != $this['dictionary_id']) {
                $dictModel->writeToFile($this['dictionary_id']);
            }
        }
        return $parent_rslt;
    }

    public function afterDeleteCall()
    {
        $parent_rslt = call_user_func(array('parent', __FUNCTION__));
        model('Dictionary')->writeToFile($this['dictionary_id']);
        return $parent_rslt;
    }
}
