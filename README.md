# Offline_Stores
Example Magento 2 Module for VSF Custom Entity Type example

## How to install
1. Clone this repo, open the directory you will see _Divante_ folder. 
2. Copy _Divante_ folder into your magento project under `app/code/` directory.
3. Run the magento command at the magento root folder `bin/magento setup:update`

## Note
- It uses declarative schema by default so you need to have Magento 2 above 2.3 
- But don't worry if your Magento 2 version less than 2.3, uncomment `Offline/Setup/InstallSchema.php` file

## How to use
Once the module is installed successfully, visit http://localhost/rest/default/V1/offline-stores/

Then you should see a screen like below

![rest](rest.png)


## More 
Read more about building custom entity for your shop at : 
### building new model and its siblings
- https://www.codilar.com/blog/magento-2-models-resource-models-and-collections/
- https://bsscommerce.com/confluence/magento-2-eav-model-things-you-may-not-know/
- http://techjeffyu.com/blog/magento-2-creating-new-eav-entity-and-model
### install schema in a declarative way
- https://inchoo.net/magento-2/declarative-schema/
