<?php
namespace Craft;

class CraftPlus_LogRecord extends BaseRecord
{
    public function getTableName()
    {
        return 'craftplus_log';
    }

    protected function defineAttributes()
    {   
        return [
            'key' => AttributeType::String,
            'data' => [
                AttributeType::String, 
                'column' => ColumnType::Text
            ],
            'request_uri' => AttributeType::String,
            'referer' => AttributeType::String,
            'ip_address' => AttributeType::String,
            'user_agent' => AttributeType::String,
        ];
    }
}