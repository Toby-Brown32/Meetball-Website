<?php declare(strict_types = 1);

// osfsl-C:/Users/tobyi/Herd/meetball-website/vendor/composer/../pestphp/pest/src/Expectation.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Pest\Expectation
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-7838f3a008dcfa249945e2013e754faf28a890652f32dcfcfa30c7088f09ae5f-8.4.12-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Pest\\Expectation',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/vendor/composer/../pestphp/pest/src/Expectation.php',
      ),
    ),
    'namespace' => 'Pest',
    'name' => 'Pest\\Expectation',
    'shortName' => 'Expectation',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 32,
    'docComment' => '/**
 * @template TValue
 *
 * @property OppositeExpectation $not Creates the opposite expectation.
 * @property EachExpectation $each Creates an expectation on each element on the traversable value.
 * @property PendingArchExpectation $classes
 * @property PendingArchExpectation $traits
 * @property PendingArchExpectation $interfaces
 * @property PendingArchExpectation $enums
 *
 * @mixin Mixins\\Expectation<TValue>
 * @mixin PendingArchExpectation
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 53,
    'endLine' => 1126,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Pest\\Concerns\\Extendable',
      1 => 'Pest\\Concerns\\Pipeable',
      2 => 'Pest\\Concerns\\Retrievable',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'value' => 
      array (
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'name' => 'value',
        'modifiers' => 1,
        'type' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'default' => NULL,
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 65,
        'endLine' => 65,
        'startColumn' => 9,
        'endColumn' => 27,
        'isPromoted' => true,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
    ),
    'immediateMethods' => 
    array (
      '__construct' => 
      array (
        'name' => '__construct',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => true,
            'attributes' => 
            array (
            ),
            'startLine' => 65,
            'endLine' => 65,
            'startColumn' => 9,
            'endColumn' => 27,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new expectation.
 *
 * @param  TValue  $value
 */',
        'startLine' => 64,
        'endLine' => 68,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'and' => 
      array (
        'name' => 'and',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 78,
            'endLine' => 78,
            'startColumn' => 25,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new expectation.
 *
 * @template TAndValue
 *
 * @param  TAndValue  $value
 * @return self<TAndValue>
 */',
        'startLine' => 78,
        'endLine' => 81,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'json' => 
      array (
        'name' => 'json',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new expectation with the decoded JSON value.
 *
 * @return self<array<int|string, mixed>|bool>
 */',
        'startLine' => 88,
        'endLine' => 100,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 107,
            'endLine' => 107,
            'startColumn' => 26,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the expectation value.
 *
 * @return self<TValue>
 */',
        'startLine' => 107,
        'endLine' => 116,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'dd' => 
      array (
        'name' => 'dd',
        'parameters' => 
        array (
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 123,
            'endLine' => 123,
            'startColumn' => 24,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the expectation value and end the script.
 *
 * @return never
 */',
        'startLine' => 123,
        'endLine' => 132,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'ddWhen' => 
      array (
        'name' => 'ddWhen',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Closure',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'bool',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 28,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 140,
            'endLine' => 140,
            'startColumn' => 53,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the expectation value when the result of the condition is truthy.
 *
 * @param  (\\Closure(TValue): bool)|bool  $condition
 * @return self<TValue>
 */',
        'startLine' => 140,
        'endLine' => 149,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'ddUnless' => 
      array (
        'name' => 'ddUnless',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'Closure',
                      'isIdentifier' => false,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'bool',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 30,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 157,
            'endLine' => 157,
            'startColumn' => 55,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the expectation value when the result of the condition is falsy.
 *
 * @param  (\\Closure(TValue): bool)|bool  $condition
 * @return self<TValue>
 */',
        'startLine' => 157,
        'endLine' => 166,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'ray' => 
      array (
        'name' => 'ray',
        'parameters' => 
        array (
          'arguments' => 
          array (
            'name' => 'arguments',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 173,
            'endLine' => 173,
            'startColumn' => 25,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Send the expectation value to Ray along with all given arguments.
 *
 * @return self<TValue>
 */',
        'startLine' => 173,
        'endLine' => 180,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'not' => 
      array (
        'name' => 'not',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectations\\OppositeExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates the opposite expectation for the value.
 *
 * @return OppositeExpectation<TValue>
 */',
        'startLine' => 187,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'each' => 
      array (
        'name' => 'each',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 197,
                'endLine' => 197,
                'startTokenPos' => 719,
                'startFilePos' => 4949,
                'endTokenPos' => 719,
                'endFilePos' => 4952,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'null',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 197,
            'endLine' => 197,
            'startColumn' => 26,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectations\\EachExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates an expectation on each item of the iterable "value".
 *
 * @return EachExpectation<TValue>
 */',
        'startLine' => 197,
        'endLine' => 210,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'sequence' => 
      array (
        'name' => 'sequence',
        'parameters' => 
        array (
          'callbacks' => 
          array (
            'name' => 'callbacks',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 220,
            'endLine' => 220,
            'startColumn' => 30,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Allows you to specify a sequential set of expectations for each item in a iterable "value".
 *
 * @template TSequenceValue
 *
 * @param  (callable(self<TValue>, self<string|int>): void)|TSequenceValue  ...$callbacks
 * @return self<TValue>
 */',
        'startLine' => 220,
        'endLine' => 249,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'match' => 
      array (
        'name' => 'match',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'mixed',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 27,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'expressions' => 
          array (
            'name' => 'expressions',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 43,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * If the subject matches one of the given "expressions", the expression callback will run.
 *
 * @template TMatchSubject of array-key
 *
 * @param  (callable(): TMatchSubject)|TMatchSubject  $subject
 * @param  array<TMatchSubject, (callable(self<TValue>): mixed)|TValue>  $expressions
 * @return self<TValue>
 */',
        'startLine' => 260,
        'endLine' => 289,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'unless' => 
      array (
        'name' => 'unless',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'bool',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 298,
            'endLine' => 298,
            'startColumn' => 28,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 298,
            'endLine' => 298,
            'startColumn' => 54,
            'endColumn' => 71,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Expectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the given "condition" is falsy.
 *
 * @param  (callable(): bool)|bool  $condition
 * @param  callable(Expectation<TValue>): mixed  $callback
 * @return self<TValue>
 */',
        'startLine' => 298,
        'endLine' => 305,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'when' => 
      array (
        'name' => 'when',
        'parameters' => 
        array (
          'condition' => 
          array (
            'name' => 'condition',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'callable',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'bool',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 314,
            'endLine' => 314,
            'startColumn' => 26,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'callable',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 314,
            'endLine' => 314,
            'startColumn' => 52,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the given "condition" is truthy.
 *
 * @param  (callable(): bool)|bool  $condition
 * @param  callable(self<TValue>): mixed  $callback
 * @return self<TValue>
 */',
        'startLine' => 314,
        'endLine' => 325,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      '__call' => 
      array (
        'name' => '__call',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 28,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'parameters' => 
          array (
            'name' => 'parameters',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 333,
            'endLine' => 333,
            'startColumn' => 44,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
          'data' => 
          array (
            'types' => 
            array (
              0 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Pest\\Expectation',
                  'isIdentifier' => false,
                ),
              ),
              1 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Pest\\Expectations\\HigherOrderExpectation',
                  'isIdentifier' => false,
                ),
              ),
              2 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Pest\\Arch\\PendingArchExpectation',
                  'isIdentifier' => false,
                ),
              ),
              3 => 
              array (
                'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                'data' => 
                array (
                  'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
                  'isIdentifier' => false,
                ),
              ),
            ),
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dynamically calls methods on the class or creates a new higher order expectation.
 *
 * @param  array<int, mixed>  $parameters
 * @return Expectation<TValue>|HigherOrderExpectation<Expectation<TValue>, TValue>
 */',
        'startLine' => 333,
        'endLine' => 370,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'getExpectationClosure' => 
      array (
        'name' => 'getExpectationClosure',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 377,
            'endLine' => 377,
            'startColumn' => 44,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Closure',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Creates a new expectation closure from the given name.
 *
 * @throws ExpectationNotFound
 */',
        'startLine' => 377,
        'endLine' => 393,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 400,
            'endLine' => 400,
            'startColumn' => 27,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'mixed',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dynamically calls methods on the class without any arguments or creates a new higher order expectation.
 *
 * @return Expectation<TValue>|OppositeExpectation<TValue>|EachExpectation<TValue>|HigherOrderExpectation<Expectation<TValue>, TValue|null>|TValue
 */',
        'startLine' => 400,
        'endLine' => 414,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'hasMethod' => 
      array (
        'name' => 'hasMethod',
        'parameters' => 
        array (
          'name' => 
          array (
            'name' => 'name',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 419,
            'endLine' => 419,
            'startColumn' => 38,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'bool',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Checks if the given expectation method exists.
 */',
        'startLine' => 419,
        'endLine' => 424,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'any' => 
      array (
        'name' => 'any',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Matchers\\Any',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Matches any value.
 */',
        'startLine' => 429,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toUse' => 
      array (
        'name' => 'toUse',
        'parameters' => 
        array (
          'targets' => 
          array (
            'name' => 'targets',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 439,
            'endLine' => 439,
            'startColumn' => 27,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target use the given dependencies.
 *
 * @param  array<int, string>|string  $targets
 */',
        'startLine' => 439,
        'endLine' => 442,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveFileSystemPermissions' => 
      array (
        'name' => 'toHaveFileSystemPermissions',
        'parameters' => 
        array (
          'permissions' => 
          array (
            'name' => 'permissions',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 447,
            'endLine' => 447,
            'startColumn' => 49,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target does have the given permissions
 */',
        'startLine' => 447,
        'endLine' => 455,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveLineCountLessThan' => 
      array (
        'name' => 'toHaveLineCountLessThan',
        'parameters' => 
        array (
          'lines' => 
          array (
            'name' => 'lines',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'int',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 45,
            'endColumn' => 54,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to have line count less than the given number.
 */',
        'startLine' => 460,
        'endLine' => 468,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveMethodsDocumented' => 
      array (
        'name' => 'toHaveMethodsDocumented',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target have all methods documented.
 */',
        'startLine' => 473,
        'endLine' => 487,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHavePropertiesDocumented' => 
      array (
        'name' => 'toHavePropertiesDocumented',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target have all properties documented.
 */',
        'startLine' => 492,
        'endLine' => 507,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toUseStrictTypes' => 
      array (
        'name' => 'toUseStrictTypes',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target use the "declare(strict_types=1)" declaration.
 */',
        'startLine' => 512,
        'endLine' => 520,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toUseStrictEquality' => 
      array (
        'name' => 'toUseStrictEquality',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target uses strict equality.
 */',
        'startLine' => 525,
        'endLine' => 533,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeFinal' => 
      array (
        'name' => 'toBeFinal',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is final.
 */',
        'startLine' => 538,
        'endLine' => 546,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeReadonly' => 
      array (
        'name' => 'toBeReadonly',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is readonly.
 */',
        'startLine' => 551,
        'endLine' => 559,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeTrait' => 
      array (
        'name' => 'toBeTrait',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is trait.
 */',
        'startLine' => 564,
        'endLine' => 572,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeTraits' => 
      array (
        'name' => 'toBeTraits',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation targets are traits.
 */',
        'startLine' => 577,
        'endLine' => 580,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeAbstract' => 
      array (
        'name' => 'toBeAbstract',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is abstract.
 */',
        'startLine' => 585,
        'endLine' => 593,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveMethod' => 
      array (
        'name' => 'toHaveMethod',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 600,
            'endLine' => 600,
            'startColumn' => 34,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target has a specific method.
 *
 * @param  array<int, string>|string  $method
 */',
        'startLine' => 600,
        'endLine' => 610,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveMethods' => 
      array (
        'name' => 'toHaveMethods',
        'parameters' => 
        array (
          'methods' => 
          array (
            'name' => 'methods',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'array',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 617,
            'endLine' => 617,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target has a specific methods.
 *
 * @param  array<int, string>  $methods
 */',
        'startLine' => 617,
        'endLine' => 620,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHavePublicMethodsBesides' => 
      array (
        'name' => 'toHavePublicMethodsBesides',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Not supported.
 */',
        'startLine' => 625,
        'endLine' => 628,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHavePublicMethods' => 
      array (
        'name' => 'toHavePublicMethods',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Not supported.
 */',
        'startLine' => 633,
        'endLine' => 636,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveProtectedMethodsBesides' => 
      array (
        'name' => 'toHaveProtectedMethodsBesides',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Not supported.
 */',
        'startLine' => 641,
        'endLine' => 644,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveProtectedMethods' => 
      array (
        'name' => 'toHaveProtectedMethods',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Not supported.
 */',
        'startLine' => 649,
        'endLine' => 652,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHavePrivateMethodsBesides' => 
      array (
        'name' => 'toHavePrivateMethodsBesides',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Not supported.
 */',
        'startLine' => 657,
        'endLine' => 660,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHavePrivateMethods' => 
      array (
        'name' => 'toHavePrivateMethods',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Not supported.
 */',
        'startLine' => 665,
        'endLine' => 668,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeEnum' => 
      array (
        'name' => 'toBeEnum',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is enum.
 */',
        'startLine' => 673,
        'endLine' => 681,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeEnums' => 
      array (
        'name' => 'toBeEnums',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation targets are enums.
 */',
        'startLine' => 686,
        'endLine' => 689,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeClass' => 
      array (
        'name' => 'toBeClass',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is a class.
 */',
        'startLine' => 694,
        'endLine' => 702,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeClasses' => 
      array (
        'name' => 'toBeClasses',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation targets are classes.
 */',
        'startLine' => 707,
        'endLine' => 710,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeInterface' => 
      array (
        'name' => 'toBeInterface',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is interface.
 */',
        'startLine' => 715,
        'endLine' => 723,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeInterfaces' => 
      array (
        'name' => 'toBeInterfaces',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation targets are interfaces.
 */',
        'startLine' => 728,
        'endLine' => 731,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toExtend' => 
      array (
        'name' => 'toExtend',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 736,
            'endLine' => 736,
            'startColumn' => 30,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to be subclass of the given class.
 */',
        'startLine' => 736,
        'endLine' => 744,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toExtendNothing' => 
      array (
        'name' => 'toExtendNothing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to be have a parent class.
 */',
        'startLine' => 749,
        'endLine' => 757,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toUseTrait' => 
      array (
        'name' => 'toUseTrait',
        'parameters' => 
        array (
          'trait' => 
          array (
            'name' => 'trait',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 762,
            'endLine' => 762,
            'startColumn' => 32,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to use the given trait.
 */',
        'startLine' => 762,
        'endLine' => 765,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toUseTraits' => 
      array (
        'name' => 'toUseTraits',
        'parameters' => 
        array (
          'traits' => 
          array (
            'name' => 'traits',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 772,
            'endLine' => 772,
            'startColumn' => 33,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to use the given traits.
 *
 * @param  array<int, string>|string  $traits
 */',
        'startLine' => 772,
        'endLine' => 794,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toImplementNothing' => 
      array (
        'name' => 'toImplementNothing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to not implement any interfaces.
 */',
        'startLine' => 799,
        'endLine' => 807,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toOnlyImplement' => 
      array (
        'name' => 'toOnlyImplement',
        'parameters' => 
        array (
          'interfaces' => 
          array (
            'name' => 'interfaces',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 814,
            'endLine' => 814,
            'startColumn' => 37,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to only implement the given interfaces.
 *
 * @param  array<int, string>|string  $interfaces
 */',
        'startLine' => 814,
        'endLine' => 826,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHavePrefix' => 
      array (
        'name' => 'toHavePrefix',
        'parameters' => 
        array (
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 831,
            'endLine' => 831,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to have the given prefix.
 */',
        'startLine' => 831,
        'endLine' => 839,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveSuffix' => 
      array (
        'name' => 'toHaveSuffix',
        'parameters' => 
        array (
          'suffix' => 
          array (
            'name' => 'suffix',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 844,
            'endLine' => 844,
            'startColumn' => 34,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to have the given suffix.
 */',
        'startLine' => 844,
        'endLine' => 852,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toImplement' => 
      array (
        'name' => 'toImplement',
        'parameters' => 
        array (
          'interfaces' => 
          array (
            'name' => 'interfaces',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 859,
            'endLine' => 859,
            'startColumn' => 33,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to implement the given interfaces.
 *
 * @param  array<int, string>|string  $interfaces
 */',
        'startLine' => 859,
        'endLine' => 877,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toOnlyUse' => 
      array (
        'name' => 'toOnlyUse',
        'parameters' => 
        array (
          'targets' => 
          array (
            'name' => 'targets',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 884,
            'endLine' => 884,
            'startColumn' => 31,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target "only" use on the given dependencies.
 *
 * @param  array<int, string>|string  $targets
 */',
        'startLine' => 884,
        'endLine' => 887,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toUseNothing' => 
      array (
        'name' => 'toUseNothing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target does not use any dependencies.
 */',
        'startLine' => 892,
        'endLine' => 895,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveSuspiciousCharacters' => 
      array (
        'name' => 'toHaveSuspiciousCharacters',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the source code of the given expectation target does not include suspicious characters.
 */',
        'startLine' => 900,
        'endLine' => 903,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeUsed' => 
      array (
        'name' => 'toBeUsed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'void',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Not supported.
 */',
        'startLine' => 908,
        'endLine' => 911,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeUsedIn' => 
      array (
        'name' => 'toBeUsedIn',
        'parameters' => 
        array (
          'targets' => 
          array (
            'name' => 'targets',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 918,
            'endLine' => 918,
            'startColumn' => 32,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation dependency is used by the given targets.
 *
 * @param  array<int, string>|string  $targets
 */',
        'startLine' => 918,
        'endLine' => 921,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toOnlyBeUsedIn' => 
      array (
        'name' => 'toOnlyBeUsedIn',
        'parameters' => 
        array (
          'targets' => 
          array (
            'name' => 'targets',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionUnionType',
              'data' => 
              array (
                'types' => 
                array (
                  0 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'array',
                      'isIdentifier' => true,
                    ),
                  ),
                  1 => 
                  array (
                    'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
                    'data' => 
                    array (
                      'name' => 'string',
                      'isIdentifier' => true,
                    ),
                  ),
                ),
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 928,
            'endLine' => 928,
            'startColumn' => 36,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation dependency is "only" used by the given targets.
 *
 * @param  array<int, string>|string  $targets
 */',
        'startLine' => 928,
        'endLine' => 931,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeUsedInNothing' => 
      array (
        'name' => 'toBeUsedInNothing',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation dependency is not used.
 */',
        'startLine' => 936,
        'endLine' => 939,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeInvokable' => 
      array (
        'name' => 'toBeInvokable',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation dependency is an invokable class.
 */',
        'startLine' => 944,
        'endLine' => 952,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveSnakeCaseKeys' => 
      array (
        'name' => 'toHaveSnakeCaseKeys',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 959,
                'endLine' => 959,
                'startTokenPos' => 5381,
                'startFilePos' => 30741,
                'endTokenPos' => 5381,
                'endFilePos' => 30742,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 959,
            'endLine' => 959,
            'startColumn' => 41,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation is iterable and contains snake_case keys.
 *
 * @return self<TValue>
 */',
        'startLine' => 959,
        'endLine' => 976,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveKebabCaseKeys' => 
      array (
        'name' => 'toHaveKebabCaseKeys',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 983,
                'endLine' => 983,
                'startTokenPos' => 5507,
                'startFilePos' => 31371,
                'endTokenPos' => 5507,
                'endFilePos' => 31372,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 983,
            'endLine' => 983,
            'startColumn' => 41,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation is iterable and contains kebab-case keys.
 *
 * @return self<TValue>
 */',
        'startLine' => 983,
        'endLine' => 1000,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveCamelCaseKeys' => 
      array (
        'name' => 'toHaveCamelCaseKeys',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1007,
                'endLine' => 1007,
                'startTokenPos' => 5633,
                'startFilePos' => 32000,
                'endTokenPos' => 5633,
                'endFilePos' => 32001,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1007,
            'endLine' => 1007,
            'startColumn' => 41,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation is iterable and contains camelCase keys.
 *
 * @return self<TValue>
 */',
        'startLine' => 1007,
        'endLine' => 1024,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveStudlyCaseKeys' => 
      array (
        'name' => 'toHaveStudlyCaseKeys',
        'parameters' => 
        array (
          'message' => 
          array (
            'name' => 'message',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 1031,
                'endLine' => 1031,
                'startTokenPos' => 5759,
                'startFilePos' => 32631,
                'endTokenPos' => 5759,
                'endFilePos' => 32632,
              ),
            ),
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1031,
            'endLine' => 1031,
            'startColumn' => 42,
            'endColumn' => 61,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'self',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation is iterable and contains StudlyCase keys.
 *
 * @return self<TValue>
 */',
        'startLine' => 1031,
        'endLine' => 1048,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveAttribute' => 
      array (
        'name' => 'toHaveAttribute',
        'parameters' => 
        array (
          'attribute' => 
          array (
            'name' => 'attribute',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1053,
            'endLine' => 1053,
            'startColumn' => 37,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target to have the given attribute.
 */',
        'startLine' => 1053,
        'endLine' => 1061,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveConstructor' => 
      array (
        'name' => 'toHaveConstructor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target has a constructor method.
 */',
        'startLine' => 1066,
        'endLine' => 1069,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toHaveDestructor' => 
      array (
        'name' => 'toHaveDestructor',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target has a destructor method.
 */',
        'startLine' => 1074,
        'endLine' => 1077,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeBackedEnum' => 
      array (
        'name' => 'toBeBackedEnum',
        'parameters' => 
        array (
          'backingType' => 
          array (
            'name' => 'backingType',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'string',
                'isIdentifier' => true,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1082,
            'endLine' => 1082,
            'startColumn' => 37,
            'endColumn' => 55,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is a backed enum of given type.
 */',
        'startLine' => 1082,
        'endLine' => 1093,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeStringBackedEnums' => 
      array (
        'name' => 'toBeStringBackedEnums',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation targets are string backed enums.
 */',
        'startLine' => 1098,
        'endLine' => 1101,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeIntBackedEnums' => 
      array (
        'name' => 'toBeIntBackedEnums',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation targets are int backed enums.
 */',
        'startLine' => 1106,
        'endLine' => 1109,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeStringBackedEnum' => 
      array (
        'name' => 'toBeStringBackedEnum',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is a string backed enum.
 */',
        'startLine' => 1114,
        'endLine' => 1117,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
      'toBeIntBackedEnum' => 
      array (
        'name' => 'toBeIntBackedEnum',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Pest\\Arch\\Contracts\\ArchExpectation',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Asserts that the given expectation target is an int backed enum.
 */',
        'startLine' => 1122,
        'endLine' => 1125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Pest',
        'declaringClassName' => 'Pest\\Expectation',
        'implementingClassName' => 'Pest\\Expectation',
        'currentClassName' => 'Pest\\Expectation',
        'aliasName' => NULL,
      ),
    ),
    'traitsData' => 
    array (
      'aliases' => 
      array (
      ),
      'modifiers' => 
      array (
      ),
      'precedences' => 
      array (
      ),
      'hashes' => 
      array (
      ),
    ),
  ),
));