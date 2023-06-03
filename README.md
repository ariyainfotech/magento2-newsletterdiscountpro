# Mage2 Module AriyaInfoTech BackendOrderDelete

    ``ariyainfotech/module-backendorderdelete``

 - [Main Functionalities](#markdown-header-main-functionalities)
 - [Installation](#markdown-header-installation)
 - [Configuration](#markdown-header-configuration)
 - [Specifications](#markdown-header-specifications)
 - [Attributes](#markdown-header-attributes)


## Main Functionalities
Currently, Magento doesn't allow you to delete an order from your store. This extension will help you to do that, simple but helpful.

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/AriyaInfoTech`
 - Enable the module by running `php bin/magento module:enable AriyaInfoTech_BackendOrderDelete`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require ariyainfotech/module-backendorderdelete`
 - enable the module by running `php bin/magento module:enable AriyaInfoTech_BackendOrderDelete`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`


## Configuration




## Specifications




## Attributes



