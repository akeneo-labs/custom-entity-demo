<?php

namespace Acme\Bundle\CustomBundle;

use Akeneo\Bundle\StorageUtilsBundle\AkeneoStorageUtilsBundle;
use Oro\Bundle\EntityBundle\DependencyInjection\Compiler\DoctrineOrmMappingsPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Romain Monceau <romain@akeneo.com>
 */
class AcmeCustomBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $productMappings = array(
            realpath(__DIR__ . '/Resources/config/model/doctrine') => 'Acme\Bundle\CustomBundle\Model'
        );

        $container->addCompilerPass(
            DoctrineOrmMappingsPass::createYamlMappingDriver(
                $productMappings,
                ['doctrine.orm.entity_manager'],
                'akeneo_storage_utils.storage_driver.doctrine/orm'
            )
        );

        if (class_exists(AkeneoStorageUtilsBundle::DOCTRINE_MONGODB)) {
            $mongoDBClass = AkeneoStorageUtilsBundle::DOCTRINE_MONGODB;
            $container->addCompilerPass(
                $mongoDBClass::createYamlMappingDriver(
                    $productMappings,
                    ['doctrine.odm.mongodb.document_manager'],
                    'akeneo_storage_utils.storage_driver.doctrine/mongodb-odm'
                )
            );
        }
    }
}
