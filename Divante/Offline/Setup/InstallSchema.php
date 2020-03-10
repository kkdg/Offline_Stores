<?php

namespace Divante\Offline\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * Function install
     * @param SchemaSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;
        $installer->startSetup();

        //START table setup;
        //Uncomment following code if your magento below 2.3
//                $table = $installer->getConnection()->newTable(
//                    $installer->getTable('divante_offline_stores')
//                )->addColumn(
//                    'id',
//                    \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
//                    null,
//                    ['identity' => true, 'nullable' => false, 'primary' => true, 'unsigned' => true,],
//                    'Entity ID'
//                )->addColumn(
//                    'name',
//                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                    255,
//                    ['nullable' => false,],
//                    'Store Name'
//                )->addColumn(
//                    'address',
//                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                    255,
//                    ['nullable' => true,],
//                    'Address'
//                )->addColumn(
//                    'phone',
//                    \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
//                    255,
//                    ['nullable' => true,],
//                    'Phone'
//                )->addColumn(
//                    'is_active',
//                    \Magento\Framework\DB\Ddl\Table::TYPE_SMALLINT,
//                    null,
//                    ['nullable' => false, 'default' => '1',],
//                    'Is Active'
//                );
//                $installer->getConnection()->createTable($table);
        //        //END   table setup
    }
}

