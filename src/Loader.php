<?php

namespace SourceBroker\DeployerDatabaseTypo3;

use SourceBroker\DeployerLoader\Load;

class Loader
{
    public function __construct()
    {
        require_once 'recipe/common.php';
        new Load([
                ['path' => 'vendor/sourcebroker/deployer-instance/deployer'],
                ['path' => 'vendor/sourcebroker/deployer-extended-database/deployer'],
                ['path' => 'vendor/sourcebroker/deployer-database-typo3/deployer'],
            ]
        );
    }
}
