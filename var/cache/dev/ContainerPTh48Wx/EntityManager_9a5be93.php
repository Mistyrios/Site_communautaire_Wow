<?php

namespace ContainerPTh48Wx;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderd1436 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer317d0 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1df6f = [
        
    ];

    public function getConnection()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getConnection', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getMetadataFactory', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getExpressionBuilder', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'beginTransaction', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getCache', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getCache();
    }

    public function transactional($func)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'transactional', array('func' => $func), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->transactional($func);
    }

    public function commit()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'commit', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->commit();
    }

    public function rollback()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'rollback', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getClassMetadata', array('className' => $className), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'createQuery', array('dql' => $dql), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'createNamedQuery', array('name' => $name), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'createQueryBuilder', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'flush', array('entity' => $entity), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'clear', array('entityName' => $entityName), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->clear($entityName);
    }

    public function close()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'close', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->close();
    }

    public function persist($entity)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'persist', array('entity' => $entity), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'remove', array('entity' => $entity), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'refresh', array('entity' => $entity), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'detach', array('entity' => $entity), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'merge', array('entity' => $entity), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getRepository', array('entityName' => $entityName), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'contains', array('entity' => $entity), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getEventManager', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getConfiguration', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'isOpen', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getUnitOfWork', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getProxyFactory', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'initializeObject', array('obj' => $obj), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'getFilters', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'isFiltersStateClean', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'hasFilters', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return $this->valueHolderd1436->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer317d0 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderd1436) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderd1436 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderd1436->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, '__get', ['name' => $name], $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        if (isset(self::$publicProperties1df6f[$name])) {
            return $this->valueHolderd1436->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1436;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1436;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1436;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderd1436;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, '__isset', array('name' => $name), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1436;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderd1436;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, '__unset', array('name' => $name), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd1436;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderd1436;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, '__clone', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        $this->valueHolderd1436 = clone $this->valueHolderd1436;
    }

    public function __sleep()
    {
        $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, '__sleep', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;

        return array('valueHolderd1436');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer317d0 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer317d0;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer317d0 && ($this->initializer317d0->__invoke($valueHolderd1436, $this, 'initializeProxy', array(), $this->initializer317d0) || 1) && $this->valueHolderd1436 = $valueHolderd1436;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd1436;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd1436;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
