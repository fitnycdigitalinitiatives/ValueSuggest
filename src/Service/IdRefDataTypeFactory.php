<?php
namespace ValueSuggest\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class IdRefDataTypeFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $name = ucfirst(strtolower(substr($requestedName, strrpos($requestedName, ':') + 1)));
        $dataType = sprintf('ValueSuggest\DataType\IdRef\%s', $name);
        return new $dataType($services);
    }
}