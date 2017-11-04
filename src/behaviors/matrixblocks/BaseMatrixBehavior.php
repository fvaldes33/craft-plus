<?php
namespace fvaldes33\plus\behaviors\matrixblocks;

use Craft;
use yii\base\Behavior;
use fvaldes33\plus\Plugin;
use fvaldes33\plus\behaviors\traits\AssetTrait;

class BaseMatrixBehavior extends Behavior
{
    use AssetTrait;
    
    public function _test()
    {
        return 'this is a test';
    }

    public function _link()
    {
        $model = $this->owner;

        switch($model->type) {
            case 'page':
                $link = $model->page->one()->getUrl();
                break;
            case 'anchor':
                $link = $model->page->one()->getUrl() . '#' . $model->anchor;
                break;
            case 'custom':
                $link = $model->page;
        }

        return $link;
    }
}