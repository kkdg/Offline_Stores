<?php

namespace Divante\Offline\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Divante\Offline\Model\StoresFactory;

class InstallData implements InstallDataInterface
{
    /**
     * @var StoresFactory
     */
    protected $storesFactory;

    public function __construct(
        StoresFactory $stores
    )
    {
        $this->storesFactory = $stores;
    }

    /**
     * Function install
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            [
                'name' => 'Warszawa',
                'address' => 'Koci pw. w. Michaa Archanioa',
                'phone' => '+48 22 845 46 04',
                'is_active' => 1
            ],
            [
                'name' => 'Wroclaw',
                'address' => 'Ulica Romana Dmowskiego 17, 50-203 Wrocaw, Poland',
                'phone' => '+48 577 032 500',
                'is_active' => 1
            ],
            [
                'name' => 'Seoul',
                'address' => 'Seoul GangNam Street 1st 12',
                'phone' => '+82 10 2364 3330',
                'is_active' => 1
            ]
        ];

        foreach( $data as $datum ) {
            $stores = $this->storesFactory->create();
            $stores->setData($datum)->save();
        }
    }
}