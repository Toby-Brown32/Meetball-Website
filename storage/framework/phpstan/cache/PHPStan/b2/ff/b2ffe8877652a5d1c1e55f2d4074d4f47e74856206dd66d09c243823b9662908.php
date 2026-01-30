<?php declare(strict_types = 1);

// osfsl-C:/Users/tobyi/Herd/meetball-website/vendor/composer/../laravel/framework/src/Illuminate/Collections/Enumerable.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Enumerable
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-0a8210c11fbc01633f0f5cf084f6309544b0a9c2283037cdedebe1ecb8f84276-8.4.12-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Enumerable',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/vendor/composer/../laravel/framework/src/Illuminate/Collections/Enumerable.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support',
    'name' => 'Illuminate\\Support\\Enumerable',
    'shortName' => 'Enumerable',
    'isInterface' => true,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * @template TKey of array-key
 *
 * @template-covariant TValue
 *
 * @extends \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>
 * @extends \\IteratorAggregate<TKey, TValue>
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 21,
    'endLine' => 1328,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
      0 => 'Illuminate\\Contracts\\Support\\Arrayable',
      1 => 'Countable',
      2 => 'IteratorAggregate',
      3 => 'Illuminate\\Contracts\\Support\\Jsonable',
      4 => 'JsonSerializable',
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
    ),
    'immediateMethods' => 
    array (
      'make' => 
      array (
        'name' => 'make',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 32,
                'endLine' => 32,
                'startTokenPos' => 80,
                'startFilePos' => 884,
                'endTokenPos' => 81,
                'endFilePos' => 885,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 32,
            'endLine' => 32,
            'startColumn' => 33,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new collection instance if the value isn\'t one already.
 *
 * @template TMakeKey of array-key
 * @template TMakeValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TMakeKey, TMakeValue>|iterable<TMakeKey, TMakeValue>|null  $items
 * @return static<TMakeKey, TMakeValue>
 */',
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'times' => 
      array (
        'name' => 'times',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 41,
            'endLine' => 41,
            'startColumn' => 34,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 41,
                'endLine' => 41,
                'startTokenPos' => 105,
                'startFilePos' => 1146,
                'endTokenPos' => 105,
                'endFilePos' => 1149,
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
            'startLine' => 41,
            'endLine' => 41,
            'startColumn' => 43,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new instance by invoking the callback a given amount of times.
 *
 * @param  int  $number
 * @param  callable|null  $callback
 * @return static
 */',
        'startLine' => 41,
        'endLine' => 41,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'range' => 
      array (
        'name' => 'range',
        'parameters' => 
        array (
          'from' => 
          array (
            'name' => 'from',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 34,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'to' => 
          array (
            'name' => 'to',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 41,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'step' => 
          array (
            'name' => 'step',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 51,
                'endLine' => 51,
                'startTokenPos' => 129,
                'startFilePos' => 1377,
                'endTokenPos' => 129,
                'endFilePos' => 1377,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 51,
            'endLine' => 51,
            'startColumn' => 46,
            'endColumn' => 54,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a collection with the given range.
 *
 * @param  int  $from
 * @param  int  $to
 * @param  int  $step
 * @return static
 */',
        'startLine' => 51,
        'endLine' => 51,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'wrap' => 
      array (
        'name' => 'wrap',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 61,
            'endLine' => 61,
            'startColumn' => 33,
            'endColumn' => 38,
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
 * Wrap the given value in a collection if applicable.
 *
 * @template TWrapValue
 *
 * @param  iterable<array-key, TWrapValue>|TWrapValue  $value
 * @return static<array-key, TWrapValue>
 */',
        'startLine' => 61,
        'endLine' => 61,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'unwrap' => 
      array (
        'name' => 'unwrap',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 72,
            'endLine' => 72,
            'startColumn' => 35,
            'endColumn' => 40,
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
 * Get the underlying items from the given collection if applicable.
 *
 * @template TUnwrapKey of array-key
 * @template TUnwrapValue
 *
 * @param  array<TUnwrapKey, TUnwrapValue>|static<TUnwrapKey, TUnwrapValue>  $value
 * @return array<TUnwrapKey, TUnwrapValue>
 */',
        'startLine' => 72,
        'endLine' => 72,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'empty' => 
      array (
        'name' => 'empty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new instance with no items.
 *
 * @return static
 */',
        'startLine' => 79,
        'endLine' => 79,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'all' => 
      array (
        'name' => 'all',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get all items in the enumerable.
 *
 * @return array
 */',
        'startLine' => 86,
        'endLine' => 86,
        'startColumn' => 5,
        'endColumn' => 26,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'average' => 
      array (
        'name' => 'average',
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
                'startLine' => 94,
                'endLine' => 94,
                'startTokenPos' => 197,
                'startFilePos' => 2439,
                'endTokenPos' => 197,
                'endFilePos' => 2442,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 29,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias for the "avg" method.
 *
 * @param  (callable(TValue): float|int)|string|null  $callback
 * @return float|int|null
 */',
        'startLine' => 94,
        'endLine' => 94,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'median' => 
      array (
        'name' => 'median',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 102,
                'endLine' => 102,
                'startTokenPos' => 213,
                'startFilePos' => 2630,
                'endTokenPos' => 213,
                'endFilePos' => 2633,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 102,
            'endLine' => 102,
            'startColumn' => 28,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the median of a given key.
 *
 * @param  string|array<array-key, string>|null  $key
 * @return float|int|null
 */',
        'startLine' => 102,
        'endLine' => 102,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'mode' => 
      array (
        'name' => 'mode',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 110,
                'endLine' => 110,
                'startTokenPos' => 229,
                'startFilePos' => 2829,
                'endTokenPos' => 229,
                'endFilePos' => 2832,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 110,
            'endLine' => 110,
            'startColumn' => 26,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the mode of a given key.
 *
 * @param  string|array<array-key, string>|null  $key
 * @return array<int, float|int>|null
 */',
        'startLine' => 110,
        'endLine' => 110,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'collapse' => 
      array (
        'name' => 'collapse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Collapse the items into a single enumerable.
 *
 * @return static<int, mixed>
 */',
        'startLine' => 117,
        'endLine' => 117,
        'startColumn' => 5,
        'endColumn' => 31,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'some' => 
      array (
        'name' => 'some',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 26,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 127,
                'endLine' => 127,
                'startTokenPos' => 259,
                'startFilePos' => 3232,
                'endTokenPos' => 259,
                'endFilePos' => 3235,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 32,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 127,
                'endLine' => 127,
                'startTokenPos' => 266,
                'startFilePos' => 3247,
                'endTokenPos' => 266,
                'endFilePos' => 3250,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 127,
            'endLine' => 127,
            'startColumn' => 50,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Alias for the "contains" method.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 127,
        'endLine' => 127,
        'startColumn' => 5,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'containsStrict' => 
      array (
        'name' => 'containsStrict',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 36,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 136,
                'endLine' => 136,
                'startTokenPos' => 285,
                'startFilePos' => 3507,
                'endTokenPos' => 285,
                'endFilePos' => 3510,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 136,
            'endLine' => 136,
            'startColumn' => 42,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if an item exists, using strict comparison.
 *
 * @param  (callable(TValue): bool)|TValue|array-key  $key
 * @param  TValue|null  $value
 * @return bool
 */',
        'startLine' => 136,
        'endLine' => 136,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'avg' => 
      array (
        'name' => 'avg',
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
                'startLine' => 144,
                'endLine' => 144,
                'startTokenPos' => 301,
                'startFilePos' => 3717,
                'endTokenPos' => 301,
                'endFilePos' => 3720,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 144,
            'endLine' => 144,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the average value of a given key.
 *
 * @param  (callable(TValue): float|int)|string|null  $callback
 * @return float|int|null
 */',
        'startLine' => 144,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'contains' => 
      array (
        'name' => 'contains',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 30,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 154,
                'endLine' => 154,
                'startTokenPos' => 320,
                'startFilePos' => 3996,
                'endTokenPos' => 320,
                'endFilePos' => 3999,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 36,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 154,
                'endLine' => 154,
                'startTokenPos' => 327,
                'startFilePos' => 4011,
                'endTokenPos' => 327,
                'endFilePos' => 4014,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 154,
            'endLine' => 154,
            'startColumn' => 54,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if an item exists in the enumerable.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 154,
        'endLine' => 154,
        'startColumn' => 5,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'doesntContain' => 
      array (
        'name' => 'doesntContain',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 164,
                'endLine' => 164,
                'startTokenPos' => 346,
                'startFilePos' => 4266,
                'endTokenPos' => 346,
                'endFilePos' => 4269,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 164,
                'endLine' => 164,
                'startTokenPos' => 353,
                'startFilePos' => 4281,
                'endTokenPos' => 353,
                'endFilePos' => 4284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 164,
            'endLine' => 164,
            'startColumn' => 59,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if an item is not contained in the collection.
 *
 * @param  mixed  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 164,
        'endLine' => 164,
        'startColumn' => 5,
        'endColumn' => 73,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'crossJoin' => 
      array (
        'name' => 'crossJoin',
        'parameters' => 
        array (
          'lists' => 
          array (
            'name' => 'lists',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 175,
            'endLine' => 175,
            'startColumn' => 31,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Cross join with the given lists, returning all possible permutations.
 *
 * @template TCrossJoinKey
 * @template TCrossJoinValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TCrossJoinKey, TCrossJoinValue>|iterable<TCrossJoinKey, TCrossJoinValue>  ...$lists
 * @return static<int, array<int, TValue|TCrossJoinValue>>
 */',
        'startLine' => 175,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'dd' => 
      array (
        'name' => 'dd',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 24,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the collection and end the script.
 *
 * @param  mixed  ...$args
 * @return never
 */',
        'startLine' => 183,
        'endLine' => 183,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'dump' => 
      array (
        'name' => 'dump',
        'parameters' => 
        array (
          'args' => 
          array (
            'name' => 'args',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 191,
            'endLine' => 191,
            'startColumn' => 26,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Dump the collection.
 *
 * @param  mixed  ...$args
 * @return $this
 */',
        'startLine' => 191,
        'endLine' => 191,
        'startColumn' => 5,
        'endColumn' => 35,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'diff' => 
      array (
        'name' => 'diff',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 199,
            'endLine' => 199,
            'startColumn' => 26,
            'endColumn' => 31,
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
 * Get the items that are not present in the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @return static
 */',
        'startLine' => 199,
        'endLine' => 199,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'diffUsing' => 
      array (
        'name' => 'diffUsing',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 31,
            'endColumn' => 36,
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
            'startLine' => 208,
            'endLine' => 208,
            'startColumn' => 39,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the items that are not present in the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @param  callable(TValue, TValue): int  $callback
 * @return static
 */',
        'startLine' => 208,
        'endLine' => 208,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'diffAssoc' => 
      array (
        'name' => 'diffAssoc',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 216,
            'endLine' => 216,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Get the items whose keys and values are not present in the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
        'startLine' => 216,
        'endLine' => 216,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'diffAssocUsing' => 
      array (
        'name' => 'diffAssocUsing',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 225,
            'endLine' => 225,
            'startColumn' => 36,
            'endColumn' => 41,
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
            'startLine' => 225,
            'endLine' => 225,
            'startColumn' => 44,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the items whose keys and values are not present in the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @param  callable(TKey, TKey): int  $callback
 * @return static
 */',
        'startLine' => 225,
        'endLine' => 225,
        'startColumn' => 5,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'diffKeys' => 
      array (
        'name' => 'diffKeys',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 233,
            'endLine' => 233,
            'startColumn' => 30,
            'endColumn' => 35,
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
 * Get the items whose keys are not present in the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, mixed>|iterable<TKey, mixed>  $items
 * @return static
 */',
        'startLine' => 233,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'diffKeysUsing' => 
      array (
        'name' => 'diffKeysUsing',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 242,
            'endLine' => 242,
            'startColumn' => 35,
            'endColumn' => 40,
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
            'startLine' => 242,
            'endLine' => 242,
            'startColumn' => 43,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the items whose keys are not present in the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, mixed>|iterable<TKey, mixed>  $items
 * @param  callable(TKey, TKey): int  $callback
 * @return static
 */',
        'startLine' => 242,
        'endLine' => 242,
        'startColumn' => 5,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'duplicates' => 
      array (
        'name' => 'duplicates',
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
                'startLine' => 251,
                'endLine' => 251,
                'startTokenPos' => 495,
                'startFilePos' => 7042,
                'endTokenPos' => 495,
                'endFilePos' => 7045,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 32,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 251,
                'endLine' => 251,
                'startTokenPos' => 502,
                'startFilePos' => 7058,
                'endTokenPos' => 502,
                'endFilePos' => 7062,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 251,
            'endLine' => 251,
            'startColumn' => 50,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve duplicate items.
 *
 * @param  (callable(TValue): bool)|string|null  $callback
 * @param  bool  $strict
 * @return static
 */',
        'startLine' => 251,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'duplicatesStrict' => 
      array (
        'name' => 'duplicatesStrict',
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
                'startLine' => 259,
                'endLine' => 259,
                'startTokenPos' => 518,
                'startFilePos' => 7281,
                'endTokenPos' => 518,
                'endFilePos' => 7284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 259,
            'endLine' => 259,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Retrieve duplicate items using strict comparison.
 *
 * @param  (callable(TValue): bool)|string|null  $callback
 * @return static
 */',
        'startLine' => 259,
        'endLine' => 259,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
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
            'startLine' => 267,
            'endLine' => 267,
            'startColumn' => 26,
            'endColumn' => 43,
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
 * Execute a callback over each item.
 *
 * @param  callable(TValue, TKey): mixed  $callback
 * @return $this
 */',
        'startLine' => 267,
        'endLine' => 267,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'eachSpread' => 
      array (
        'name' => 'eachSpread',
        'parameters' => 
        array (
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
            'startLine' => 275,
            'endLine' => 275,
            'startColumn' => 32,
            'endColumn' => 49,
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
 * Execute a callback over each nested chunk of items.
 *
 * @param  callable  $callback
 * @return static
 */',
        'startLine' => 275,
        'endLine' => 275,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'every' => 
      array (
        'name' => 'every',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 27,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 285,
                'endLine' => 285,
                'startTokenPos' => 565,
                'startFilePos' => 7941,
                'endTokenPos' => 565,
                'endFilePos' => 7944,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 285,
                'endLine' => 285,
                'startTokenPos' => 572,
                'startFilePos' => 7956,
                'endTokenPos' => 572,
                'endFilePos' => 7959,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 285,
            'endLine' => 285,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if all items pass the given truth test.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return bool
 */',
        'startLine' => 285,
        'endLine' => 285,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'except' => 
      array (
        'name' => 'except',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 293,
            'endLine' => 293,
            'startColumn' => 28,
            'endColumn' => 32,
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
 * Get all items except for those with the specified keys.
 *
 * @param  \\Illuminate\\Support\\Enumerable<array-key, TKey>|array<array-key, TKey>  $keys
 * @return static
 */',
        'startLine' => 293,
        'endLine' => 293,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'filter' => 
      array (
        'name' => 'filter',
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
                'startLine' => 301,
                'endLine' => 301,
                'startTokenPos' => 603,
                'startFilePos' => 8395,
                'endTokenPos' => 603,
                'endFilePos' => 8398,
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
            'startLine' => 301,
            'endLine' => 301,
            'startColumn' => 28,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Run a filter over each of the items.
 *
 * @param  (callable(TValue): bool)|null  $callback
 * @return static
 */',
        'startLine' => 301,
        'endLine' => 301,
        'startColumn' => 5,
        'endColumn' => 55,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'when' => 
      array (
        'name' => 'when',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 26,
            'endColumn' => 31,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 313,
                'endLine' => 313,
                'startTokenPos' => 625,
                'startFilePos' => 8800,
                'endTokenPos' => 625,
                'endFilePos' => 8803,
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 34,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 313,
                'endLine' => 313,
                'startTokenPos' => 635,
                'startFilePos' => 8827,
                'endTokenPos' => 635,
                'endFilePos' => 8830,
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
            'startLine' => 313,
            'endLine' => 313,
            'startColumn' => 62,
            'endColumn' => 86,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the given "value" is (or resolves to) truthy.
 *
 * @template TWhenReturnType as null
 *
 * @param  bool  $value
 * @param  (callable($this): TWhenReturnType)|null  $callback
 * @param  (callable($this): TWhenReturnType)|null  $default
 * @return $this|TWhenReturnType
 */',
        'startLine' => 313,
        'endLine' => 313,
        'startColumn' => 5,
        'endColumn' => 88,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whenEmpty' => 
      array (
        'name' => 'whenEmpty',
        'parameters' => 
        array (
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
            'startLine' => 324,
            'endLine' => 324,
            'startColumn' => 31,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 324,
                'endLine' => 324,
                'startTokenPos' => 659,
                'startFilePos' => 9206,
                'endTokenPos' => 659,
                'endFilePos' => 9209,
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
            'startLine' => 324,
            'endLine' => 324,
            'startColumn' => 51,
            'endColumn' => 75,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the collection is empty.
 *
 * @template TWhenEmptyReturnType
 *
 * @param  (callable($this): TWhenEmptyReturnType)  $callback
 * @param  (callable($this): TWhenEmptyReturnType)|null  $default
 * @return $this|TWhenEmptyReturnType
 */',
        'startLine' => 324,
        'endLine' => 324,
        'startColumn' => 5,
        'endColumn' => 77,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whenNotEmpty' => 
      array (
        'name' => 'whenNotEmpty',
        'parameters' => 
        array (
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 34,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 335,
                'endLine' => 335,
                'startTokenPos' => 683,
                'startFilePos' => 9602,
                'endTokenPos' => 683,
                'endFilePos' => 9605,
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
            'startLine' => 335,
            'endLine' => 335,
            'startColumn' => 54,
            'endColumn' => 78,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the collection is not empty.
 *
 * @template TWhenNotEmptyReturnType
 *
 * @param  callable($this): TWhenNotEmptyReturnType  $callback
 * @param  (callable($this): TWhenNotEmptyReturnType)|null  $default
 * @return $this|TWhenNotEmptyReturnType
 */',
        'startLine' => 335,
        'endLine' => 335,
        'startColumn' => 5,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'unless' => 
      array (
        'name' => 'unless',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 28,
            'endColumn' => 33,
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
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 36,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 347,
                'endLine' => 347,
                'startTokenPos' => 710,
                'startFilePos' => 10022,
                'endTokenPos' => 710,
                'endFilePos' => 10025,
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
            'startLine' => 347,
            'endLine' => 347,
            'startColumn' => 56,
            'endColumn' => 80,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback if the given "value" is (or resolves to) falsy.
 *
 * @template TUnlessReturnType
 *
 * @param  bool  $value
 * @param  (callable($this): TUnlessReturnType)  $callback
 * @param  (callable($this): TUnlessReturnType)|null  $default
 * @return $this|TUnlessReturnType
 */',
        'startLine' => 347,
        'endLine' => 347,
        'startColumn' => 5,
        'endColumn' => 82,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'unlessEmpty' => 
      array (
        'name' => 'unlessEmpty',
        'parameters' => 
        array (
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
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 33,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 358,
                'endLine' => 358,
                'startTokenPos' => 734,
                'startFilePos' => 10413,
                'endTokenPos' => 734,
                'endFilePos' => 10416,
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
            'startLine' => 358,
            'endLine' => 358,
            'startColumn' => 53,
            'endColumn' => 77,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback unless the collection is empty.
 *
 * @template TUnlessEmptyReturnType
 *
 * @param  callable($this): TUnlessEmptyReturnType  $callback
 * @param  (callable($this): TUnlessEmptyReturnType)|null  $default
 * @return $this|TUnlessEmptyReturnType
 */',
        'startLine' => 358,
        'endLine' => 358,
        'startColumn' => 5,
        'endColumn' => 79,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'unlessNotEmpty' => 
      array (
        'name' => 'unlessNotEmpty',
        'parameters' => 
        array (
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
            'startLine' => 369,
            'endLine' => 369,
            'startColumn' => 36,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 369,
                'endLine' => 369,
                'startTokenPos' => 758,
                'startFilePos' => 10823,
                'endTokenPos' => 758,
                'endFilePos' => 10826,
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
            'startLine' => 369,
            'endLine' => 369,
            'startColumn' => 56,
            'endColumn' => 80,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Apply the callback unless the collection is not empty.
 *
 * @template TUnlessNotEmptyReturnType
 *
 * @param  callable($this): TUnlessNotEmptyReturnType  $callback
 * @param  (callable($this): TUnlessNotEmptyReturnType)|null  $default
 * @return $this|TUnlessNotEmptyReturnType
 */',
        'startLine' => 369,
        'endLine' => 369,
        'startColumn' => 5,
        'endColumn' => 82,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'where' => 
      array (
        'name' => 'where',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 379,
            'endLine' => 379,
            'startColumn' => 27,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 379,
                'endLine' => 379,
                'startTokenPos' => 777,
                'startFilePos' => 11058,
                'endTokenPos' => 777,
                'endFilePos' => 11061,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 379,
            'endLine' => 379,
            'startColumn' => 33,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 379,
                'endLine' => 379,
                'startTokenPos' => 784,
                'startFilePos' => 11073,
                'endTokenPos' => 784,
                'endFilePos' => 11076,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 379,
            'endLine' => 379,
            'startColumn' => 51,
            'endColumn' => 63,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */',
        'startLine' => 379,
        'endLine' => 379,
        'startColumn' => 5,
        'endColumn' => 65,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereNull' => 
      array (
        'name' => 'whereNull',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 387,
                'endLine' => 387,
                'startTokenPos' => 800,
                'startFilePos' => 11259,
                'endTokenPos' => 800,
                'endFilePos' => 11262,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 387,
            'endLine' => 387,
            'startColumn' => 31,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items where the value for the given key is null.
 *
 * @param  string|null  $key
 * @return static
 */',
        'startLine' => 387,
        'endLine' => 387,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereNotNull' => 
      array (
        'name' => 'whereNotNull',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 395,
                'endLine' => 395,
                'startTokenPos' => 816,
                'startFilePos' => 11452,
                'endTokenPos' => 816,
                'endFilePos' => 11455,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 395,
            'endLine' => 395,
            'startColumn' => 34,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items where the value for the given key is not null.
 *
 * @param  string|null  $key
 * @return static
 */',
        'startLine' => 395,
        'endLine' => 395,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereStrict' => 
      array (
        'name' => 'whereStrict',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 404,
            'endLine' => 404,
            'startColumn' => 33,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 404,
            'endLine' => 404,
            'startColumn' => 39,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return static
 */',
        'startLine' => 404,
        'endLine' => 404,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereIn' => 
      array (
        'name' => 'whereIn',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 29,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 414,
                'endLine' => 414,
                'startTokenPos' => 853,
                'startFilePos' => 11960,
                'endTokenPos' => 853,
                'endFilePos' => 11964,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 414,
            'endLine' => 414,
            'startColumn' => 44,
            'endColumn' => 58,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @param  bool  $strict
 * @return static
 */',
        'startLine' => 414,
        'endLine' => 414,
        'startColumn' => 5,
        'endColumn' => 60,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereInStrict' => 
      array (
        'name' => 'whereInStrict',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 423,
            'endLine' => 423,
            'startColumn' => 35,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 423,
            'endLine' => 423,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
        'startLine' => 423,
        'endLine' => 423,
        'startColumn' => 5,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereBetween' => 
      array (
        'name' => 'whereBetween',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 34,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 432,
            'endLine' => 432,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items such that the value of the given key is between the given values.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
        'startLine' => 432,
        'endLine' => 432,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereNotBetween' => 
      array (
        'name' => 'whereNotBetween',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 441,
            'endLine' => 441,
            'startColumn' => 37,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 441,
            'endLine' => 441,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items such that the value of the given key is not between the given values.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
        'startLine' => 441,
        'endLine' => 441,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereNotIn' => 
      array (
        'name' => 'whereNotIn',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 451,
            'endLine' => 451,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 451,
            'endLine' => 451,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 451,
                'endLine' => 451,
                'startTokenPos' => 920,
                'startFilePos' => 13090,
                'endTokenPos' => 920,
                'endFilePos' => 13094,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 451,
            'endLine' => 451,
            'startColumn' => 47,
            'endColumn' => 61,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items by the given key value pair.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @param  bool  $strict
 * @return static
 */',
        'startLine' => 451,
        'endLine' => 451,
        'startColumn' => 5,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereNotInStrict' => 
      array (
        'name' => 'whereNotInStrict',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 38,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 460,
            'endLine' => 460,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Filter items by the given key value pair using strict comparison.
 *
 * @param  string  $key
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable|iterable  $values
 * @return static
 */',
        'startLine' => 460,
        'endLine' => 460,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'whereInstanceOf' => 
      array (
        'name' => 'whereInstanceOf',
        'parameters' => 
        array (
          'type' => 
          array (
            'name' => 'type',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 37,
            'endColumn' => 41,
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
 * Filter the items, removing any items that don\'t match the given type(s).
 *
 * @template TWhereInstanceOf
 *
 * @param  class-string<TWhereInstanceOf>|array<array-key, class-string<TWhereInstanceOf>>  $type
 * @return static<TKey, TWhereInstanceOf>
 */',
        'startLine' => 470,
        'endLine' => 470,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'first' => 
      array (
        'name' => 'first',
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
                'startLine' => 481,
                'endLine' => 481,
                'startTokenPos' => 966,
                'startFilePos' => 14058,
                'endTokenPos' => 966,
                'endFilePos' => 14061,
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
            'startLine' => 481,
            'endLine' => 481,
            'startColumn' => 27,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 481,
                'endLine' => 481,
                'startTokenPos' => 973,
                'startFilePos' => 14075,
                'endTokenPos' => 973,
                'endFilePos' => 14078,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 481,
            'endLine' => 481,
            'startColumn' => 55,
            'endColumn' => 69,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the first item from the enumerable passing the given truth test.
 *
 * @template TFirstDefault
 *
 * @param  (callable(TValue,TKey): bool)|null  $callback
 * @param  TFirstDefault|(\\Closure(): TFirstDefault)  $default
 * @return TValue|TFirstDefault
 */',
        'startLine' => 481,
        'endLine' => 481,
        'startColumn' => 5,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'firstWhere' => 
      array (
        'name' => 'firstWhere',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 32,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 491,
                'endLine' => 491,
                'startTokenPos' => 992,
                'startFilePos' => 14326,
                'endTokenPos' => 992,
                'endFilePos' => 14329,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 38,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 491,
                'endLine' => 491,
                'startTokenPos' => 999,
                'startFilePos' => 14341,
                'endTokenPos' => 999,
                'endFilePos' => 14344,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 491,
            'endLine' => 491,
            'startColumn' => 56,
            'endColumn' => 68,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the first item by the given key value pair.
 *
 * @param  string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return TValue|null
 */',
        'startLine' => 491,
        'endLine' => 491,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'flatten' => 
      array (
        'name' => 'flatten',
        'parameters' => 
        array (
          'depth' => 
          array (
            'name' => 'depth',
            'default' => 
            array (
              'code' => 'INF',
              'attributes' => 
              array (
                'startLine' => 499,
                'endLine' => 499,
                'startTokenPos' => 1015,
                'startFilePos' => 14519,
                'endTokenPos' => 1015,
                'endFilePos' => 14521,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 499,
            'endLine' => 499,
            'startColumn' => 29,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a flattened array of the items in the collection.
 *
 * @param  int  $depth
 * @return static
 */',
        'startLine' => 499,
        'endLine' => 499,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'flip' => 
      array (
        'name' => 'flip',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Flip the values with their keys.
 *
 * @return static<TValue, TKey>
 */',
        'startLine' => 506,
        'endLine' => 506,
        'startColumn' => 5,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'get' => 
      array (
        'name' => 'get',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 517,
            'endLine' => 517,
            'startColumn' => 25,
            'endColumn' => 28,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 517,
                'endLine' => 517,
                'startTokenPos' => 1045,
                'startFilePos' => 14924,
                'endTokenPos' => 1045,
                'endFilePos' => 14927,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 517,
            'endLine' => 517,
            'startColumn' => 31,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get an item from the collection by key.
 *
 * @template TGetDefault
 *
 * @param  TKey  $key
 * @param  TGetDefault|(\\Closure(): TGetDefault)  $default
 * @return TValue|TGetDefault
 */',
        'startLine' => 517,
        'endLine' => 517,
        'startColumn' => 5,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'groupBy' => 
      array (
        'name' => 'groupBy',
        'parameters' => 
        array (
          'groupBy' => 
          array (
            'name' => 'groupBy',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 29,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'preserveKeys' => 
          array (
            'name' => 'preserveKeys',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 528,
                'endLine' => 528,
                'startTokenPos' => 1064,
                'startFilePos' => 15417,
                'endTokenPos' => 1064,
                'endFilePos' => 15421,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 528,
            'endLine' => 528,
            'startColumn' => 39,
            'endColumn' => 59,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Group an associative array by a field or using a callback.
 *
 * @template TGroupKey of array-key
 *
 * @param  (callable(TValue, TKey): TGroupKey)|array|string  $groupBy
 * @param  bool  $preserveKeys
 * @return static<($groupBy is string ? array-key : ($groupBy is array ? array-key : TGroupKey)), static<($preserveKeys is true ? TKey : int), ($groupBy is array ? mixed : TValue)>>
 */',
        'startLine' => 528,
        'endLine' => 528,
        'startColumn' => 5,
        'endColumn' => 61,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'keyBy' => 
      array (
        'name' => 'keyBy',
        'parameters' => 
        array (
          'keyBy' => 
          array (
            'name' => 'keyBy',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 538,
            'endLine' => 538,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Key an associative array by a field or using a callback.
 *
 * @template TNewKey of array-key
 *
 * @param  (callable(TValue, TKey): TNewKey)|array|string  $keyBy
 * @return static<($keyBy is string ? array-key : ($keyBy is array ? array-key : TNewKey)), TValue>
 */',
        'startLine' => 538,
        'endLine' => 538,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'has' => 
      array (
        'name' => 'has',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 546,
            'endLine' => 546,
            'startColumn' => 25,
            'endColumn' => 28,
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
 * Determine if an item exists in the collection by key.
 *
 * @param  TKey|array<array-key, TKey>  $key
 * @return bool
 */',
        'startLine' => 546,
        'endLine' => 546,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'hasAny' => 
      array (
        'name' => 'hasAny',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 554,
            'endLine' => 554,
            'startColumn' => 28,
            'endColumn' => 31,
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
 * Determine if any of the keys exist in the collection.
 *
 * @param  mixed  $key
 * @return bool
 */',
        'startLine' => 554,
        'endLine' => 554,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'implode' => 
      array (
        'name' => 'implode',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 29,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'glue' => 
          array (
            'name' => 'glue',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 563,
                'endLine' => 563,
                'startTokenPos' => 1119,
                'startFilePos' => 16358,
                'endTokenPos' => 1119,
                'endFilePos' => 16361,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 563,
            'endLine' => 563,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Concatenate values of a given key as a string.
 *
 * @param  (callable(TValue, TKey): mixed)|string  $value
 * @param  string|null  $glue
 * @return string
 */',
        'startLine' => 563,
        'endLine' => 563,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'intersect' => 
      array (
        'name' => 'intersect',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 571,
            'endLine' => 571,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Intersect the collection with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
        'startLine' => 571,
        'endLine' => 571,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'intersectUsing' => 
      array (
        'name' => 'intersectUsing',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 580,
            'endLine' => 580,
            'startColumn' => 36,
            'endColumn' => 41,
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
            'startLine' => 580,
            'endLine' => 580,
            'startColumn' => 44,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Intersect the collection with the given items, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @param  callable(TValue, TValue): int  $callback
 * @return static
 */',
        'startLine' => 580,
        'endLine' => 580,
        'startColumn' => 5,
        'endColumn' => 63,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'intersectAssoc' => 
      array (
        'name' => 'intersectAssoc',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 588,
            'endLine' => 588,
            'startColumn' => 36,
            'endColumn' => 41,
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
 * Intersect the collection with the given items with additional index check.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
        'startLine' => 588,
        'endLine' => 588,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'intersectAssocUsing' => 
      array (
        'name' => 'intersectAssocUsing',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 597,
            'endLine' => 597,
            'startColumn' => 41,
            'endColumn' => 46,
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
            'startLine' => 597,
            'endLine' => 597,
            'startColumn' => 49,
            'endColumn' => 66,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Intersect the collection with the given items with additional index check, using the callback.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TValue>|iterable<array-key, TValue>  $items
 * @param  callable(TValue, TValue): int  $callback
 * @return static
 */',
        'startLine' => 597,
        'endLine' => 597,
        'startColumn' => 5,
        'endColumn' => 68,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'intersectByKeys' => 
      array (
        'name' => 'intersectByKeys',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 605,
            'endLine' => 605,
            'startColumn' => 37,
            'endColumn' => 42,
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
 * Intersect the collection with the given items by key.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, mixed>|iterable<TKey, mixed>  $items
 * @return static
 */',
        'startLine' => 605,
        'endLine' => 605,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'isEmpty' => 
      array (
        'name' => 'isEmpty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the collection is empty or not.
 *
 * @return bool
 */',
        'startLine' => 612,
        'endLine' => 612,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'isNotEmpty' => 
      array (
        'name' => 'isNotEmpty',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the collection is not empty.
 *
 * @return bool
 */',
        'startLine' => 619,
        'endLine' => 619,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'containsOneItem' => 
      array (
        'name' => 'containsOneItem',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the collection contains a single item.
 *
 * @return bool
 */',
        'startLine' => 626,
        'endLine' => 626,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'containsManyItems' => 
      array (
        'name' => 'containsManyItems',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Determine if the collection contains multiple items.
 *
 * @return bool
 */',
        'startLine' => 633,
        'endLine' => 633,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'join' => 
      array (
        'name' => 'join',
        'parameters' => 
        array (
          'glue' => 
          array (
            'name' => 'glue',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 642,
            'endLine' => 642,
            'startColumn' => 26,
            'endColumn' => 30,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'finalGlue' => 
          array (
            'name' => 'finalGlue',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 642,
                'endLine' => 642,
                'startTokenPos' => 1252,
                'startFilePos' => 18660,
                'endTokenPos' => 1252,
                'endFilePos' => 18661,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 642,
            'endLine' => 642,
            'startColumn' => 33,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Join all items from the collection using a string. The final items can use a separate glue string.
 *
 * @param  string  $glue
 * @param  string  $finalGlue
 * @return string
 */',
        'startLine' => 642,
        'endLine' => 642,
        'startColumn' => 5,
        'endColumn' => 49,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'keys' => 
      array (
        'name' => 'keys',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the keys of the collection items.
 *
 * @return static<int, TKey>
 */',
        'startLine' => 649,
        'endLine' => 649,
        'startColumn' => 5,
        'endColumn' => 27,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'last' => 
      array (
        'name' => 'last',
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
                'startLine' => 660,
                'endLine' => 660,
                'startTokenPos' => 1282,
                'startFilePos' => 19111,
                'endTokenPos' => 1282,
                'endFilePos' => 19114,
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
            'startLine' => 660,
            'endLine' => 660,
            'startColumn' => 26,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'default' => 
          array (
            'name' => 'default',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 660,
                'endLine' => 660,
                'startTokenPos' => 1289,
                'startFilePos' => 19128,
                'endTokenPos' => 1289,
                'endFilePos' => 19131,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 660,
            'endLine' => 660,
            'startColumn' => 54,
            'endColumn' => 68,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the last item from the collection.
 *
 * @template TLastDefault
 *
 * @param  (callable(TValue, TKey): bool)|null  $callback
 * @param  TLastDefault|(\\Closure(): TLastDefault)  $default
 * @return TValue|TLastDefault
 */',
        'startLine' => 660,
        'endLine' => 660,
        'startColumn' => 5,
        'endColumn' => 70,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'map' => 
      array (
        'name' => 'map',
        'parameters' => 
        array (
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
            'startLine' => 670,
            'endLine' => 670,
            'startColumn' => 25,
            'endColumn' => 42,
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
 * Run a map over each of the items.
 *
 * @template TMapValue
 *
 * @param  callable(TValue, TKey): TMapValue  $callback
 * @return static<TKey, TMapValue>
 */',
        'startLine' => 670,
        'endLine' => 670,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'mapSpread' => 
      array (
        'name' => 'mapSpread',
        'parameters' => 
        array (
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
            'startLine' => 678,
            'endLine' => 678,
            'startColumn' => 31,
            'endColumn' => 48,
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
 * Run a map over each nested chunk of items.
 *
 * @param  callable  $callback
 * @return static
 */',
        'startLine' => 678,
        'endLine' => 678,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'mapToDictionary' => 
      array (
        'name' => 'mapToDictionary',
        'parameters' => 
        array (
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
            'startLine' => 691,
            'endLine' => 691,
            'startColumn' => 37,
            'endColumn' => 54,
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
 * Run a dictionary map over the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @template TMapToDictionaryKey of array-key
 * @template TMapToDictionaryValue
 *
 * @param  callable(TValue, TKey): array<TMapToDictionaryKey, TMapToDictionaryValue>  $callback
 * @return static<TMapToDictionaryKey, array<int, TMapToDictionaryValue>>
 */',
        'startLine' => 691,
        'endLine' => 691,
        'startColumn' => 5,
        'endColumn' => 56,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'mapToGroups' => 
      array (
        'name' => 'mapToGroups',
        'parameters' => 
        array (
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
            'startLine' => 704,
            'endLine' => 704,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * Run a grouping map over the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @template TMapToGroupsKey of array-key
 * @template TMapToGroupsValue
 *
 * @param  callable(TValue, TKey): array<TMapToGroupsKey, TMapToGroupsValue>  $callback
 * @return static<TMapToGroupsKey, static<int, TMapToGroupsValue>>
 */',
        'startLine' => 704,
        'endLine' => 704,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'mapWithKeys' => 
      array (
        'name' => 'mapWithKeys',
        'parameters' => 
        array (
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
            'startLine' => 717,
            'endLine' => 717,
            'startColumn' => 33,
            'endColumn' => 50,
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
 * Run an associative map over each of the items.
 *
 * The callback should return an associative array with a single key/value pair.
 *
 * @template TMapWithKeysKey of array-key
 * @template TMapWithKeysValue
 *
 * @param  callable(TValue, TKey): array<TMapWithKeysKey, TMapWithKeysValue>  $callback
 * @return static<TMapWithKeysKey, TMapWithKeysValue>
 */',
        'startLine' => 717,
        'endLine' => 717,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'flatMap' => 
      array (
        'name' => 'flatMap',
        'parameters' => 
        array (
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
            'startLine' => 728,
            'endLine' => 728,
            'startColumn' => 29,
            'endColumn' => 46,
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
 * Map a collection and flatten the result by a single level.
 *
 * @template TFlatMapKey of array-key
 * @template TFlatMapValue
 *
 * @param  callable(TValue, TKey): (\\Illuminate\\Support\\Collection<TFlatMapKey, TFlatMapValue>|array<TFlatMapKey, TFlatMapValue>)  $callback
 * @return static<TFlatMapKey, TFlatMapValue>
 */',
        'startLine' => 728,
        'endLine' => 728,
        'startColumn' => 5,
        'endColumn' => 48,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'mapInto' => 
      array (
        'name' => 'mapInto',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 738,
            'endLine' => 738,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Map the values into a new class.
 *
 * @template TMapIntoValue
 *
 * @param  class-string<TMapIntoValue>  $class
 * @return static<TKey, TMapIntoValue>
 */',
        'startLine' => 738,
        'endLine' => 738,
        'startColumn' => 5,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'merge' => 
      array (
        'name' => 'merge',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 746,
            'endLine' => 746,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Merge the collection with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
        'startLine' => 746,
        'endLine' => 746,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'mergeRecursive' => 
      array (
        'name' => 'mergeRecursive',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 756,
            'endLine' => 756,
            'startColumn' => 36,
            'endColumn' => 41,
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
 * Recursively merge the collection with the given items.
 *
 * @template TMergeRecursiveValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TMergeRecursiveValue>|iterable<TKey, TMergeRecursiveValue>  $items
 * @return static<TKey, TValue|TMergeRecursiveValue>
 */',
        'startLine' => 756,
        'endLine' => 756,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'combine' => 
      array (
        'name' => 'combine',
        'parameters' => 
        array (
          'values' => 
          array (
            'name' => 'values',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 766,
            'endLine' => 766,
            'startColumn' => 29,
            'endColumn' => 35,
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
 * Create a collection by using this collection for keys and another for its values.
 *
 * @template TCombineValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TCombineValue>|iterable<array-key, TCombineValue>  $values
 * @return static<TValue, TCombineValue>
 */',
        'startLine' => 766,
        'endLine' => 766,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'union' => 
      array (
        'name' => 'union',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 774,
            'endLine' => 774,
            'startColumn' => 27,
            'endColumn' => 32,
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
 * Union the collection with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
        'startLine' => 774,
        'endLine' => 774,
        'startColumn' => 5,
        'endColumn' => 34,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'min' => 
      array (
        'name' => 'min',
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
                'startLine' => 782,
                'endLine' => 782,
                'startTokenPos' => 1449,
                'startFilePos' => 22987,
                'endTokenPos' => 1449,
                'endFilePos' => 22990,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 782,
            'endLine' => 782,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the min value of a given key.
 *
 * @param  (callable(TValue):mixed)|string|null  $callback
 * @return mixed
 */',
        'startLine' => 782,
        'endLine' => 782,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'max' => 
      array (
        'name' => 'max',
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
                'startLine' => 790,
                'endLine' => 790,
                'startTokenPos' => 1465,
                'startFilePos' => 23179,
                'endTokenPos' => 1465,
                'endFilePos' => 23182,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 790,
            'endLine' => 790,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the max value of a given key.
 *
 * @param  (callable(TValue):mixed)|string|null  $callback
 * @return mixed
 */',
        'startLine' => 790,
        'endLine' => 790,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'nth' => 
      array (
        'name' => 'nth',
        'parameters' => 
        array (
          'step' => 
          array (
            'name' => 'step',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 799,
            'endLine' => 799,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'offset' => 
          array (
            'name' => 'offset',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 799,
                'endLine' => 799,
                'startTokenPos' => 1484,
                'startFilePos' => 23392,
                'endTokenPos' => 1484,
                'endFilePos' => 23392,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 799,
            'endLine' => 799,
            'startColumn' => 32,
            'endColumn' => 42,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a new collection consisting of every n-th element.
 *
 * @param  int  $step
 * @param  int  $offset
 * @return static
 */',
        'startLine' => 799,
        'endLine' => 799,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'only' => 
      array (
        'name' => 'only',
        'parameters' => 
        array (
          'keys' => 
          array (
            'name' => 'keys',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 807,
            'endLine' => 807,
            'startColumn' => 26,
            'endColumn' => 30,
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
 * Get the items with the specified keys.
 *
 * @param  \\Illuminate\\Support\\Enumerable<array-key, TKey>|array<array-key, TKey>|string  $keys
 * @return static
 */',
        'startLine' => 807,
        'endLine' => 807,
        'startColumn' => 5,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'forPage' => 
      array (
        'name' => 'forPage',
        'parameters' => 
        array (
          'page' => 
          array (
            'name' => 'page',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 29,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'perPage' => 
          array (
            'name' => 'perPage',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 816,
            'endLine' => 816,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * "Paginate" the collection by slicing it into a smaller collection.
 *
 * @param  int  $page
 * @param  int  $perPage
 * @return static
 */',
        'startLine' => 816,
        'endLine' => 816,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'partition' => 
      array (
        'name' => 'partition',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 826,
            'endLine' => 826,
            'startColumn' => 31,
            'endColumn' => 34,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 826,
                'endLine' => 826,
                'startTokenPos' => 1530,
                'startFilePos' => 24177,
                'endTokenPos' => 1530,
                'endFilePos' => 24180,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 826,
            'endLine' => 826,
            'startColumn' => 37,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 826,
                'endLine' => 826,
                'startTokenPos' => 1537,
                'startFilePos' => 24192,
                'endTokenPos' => 1537,
                'endFilePos' => 24195,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 826,
            'endLine' => 826,
            'startColumn' => 55,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Partition the collection into two arrays using the given callback or key.
 *
 * @param  (callable(TValue, TKey): bool)|TValue|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static<int<0, 1>, static<TKey, TValue>>
 */',
        'startLine' => 826,
        'endLine' => 826,
        'startColumn' => 5,
        'endColumn' => 69,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'concat' => 
      array (
        'name' => 'concat',
        'parameters' => 
        array (
          'source' => 
          array (
            'name' => 'source',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 837,
            'endLine' => 837,
            'startColumn' => 28,
            'endColumn' => 34,
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
 * Push all of the given items onto the collection.
 *
 * @template TConcatKey of array-key
 * @template TConcatValue
 *
 * @param  iterable<TConcatKey, TConcatValue>  $source
 * @return static<TKey|TConcatKey, TValue|TConcatValue>
 */',
        'startLine' => 837,
        'endLine' => 837,
        'startColumn' => 5,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'random' => 
      array (
        'name' => 'random',
        'parameters' => 
        array (
          'number' => 
          array (
            'name' => 'number',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 847,
                'endLine' => 847,
                'startTokenPos' => 1565,
                'startFilePos' => 24773,
                'endTokenPos' => 1565,
                'endFilePos' => 24776,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 847,
            'endLine' => 847,
            'startColumn' => 28,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get one or a specified number of items randomly from the collection.
 *
 * @param  int|null  $number
 * @return static<int, TValue>|TValue
 *
 * @throws \\InvalidArgumentException
 */',
        'startLine' => 847,
        'endLine' => 847,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'reduce' => 
      array (
        'name' => 'reduce',
        'parameters' => 
        array (
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
            'startLine' => 859,
            'endLine' => 859,
            'startColumn' => 28,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'initial' => 
          array (
            'name' => 'initial',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 859,
                'endLine' => 859,
                'startTokenPos' => 1586,
                'startFilePos' => 25174,
                'endTokenPos' => 1586,
                'endFilePos' => 25177,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 859,
            'endLine' => 859,
            'startColumn' => 48,
            'endColumn' => 62,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reduce the collection to a single value.
 *
 * @template TReduceInitial
 * @template TReduceReturnType
 *
 * @param  callable(TReduceInitial|TReduceReturnType, TValue, TKey): TReduceReturnType  $callback
 * @param  TReduceInitial  $initial
 * @return TReduceInitial|TReduceReturnType
 */',
        'startLine' => 859,
        'endLine' => 859,
        'startColumn' => 5,
        'endColumn' => 64,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'reduceSpread' => 
      array (
        'name' => 'reduceSpread',
        'parameters' => 
        array (
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
            'startLine' => 870,
            'endLine' => 870,
            'startColumn' => 34,
            'endColumn' => 51,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'initial' => 
          array (
            'name' => 'initial',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => true,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 870,
            'endLine' => 870,
            'startColumn' => 54,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reduce the collection to multiple aggregate values.
 *
 * @param  callable  $callback
 * @param  mixed  ...$initial
 * @return array
 *
 * @throws \\UnexpectedValueException
 */',
        'startLine' => 870,
        'endLine' => 870,
        'startColumn' => 5,
        'endColumn' => 66,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'replace' => 
      array (
        'name' => 'replace',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 878,
            'endLine' => 878,
            'startColumn' => 29,
            'endColumn' => 34,
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
 * Replace the collection items with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
        'startLine' => 878,
        'endLine' => 878,
        'startColumn' => 5,
        'endColumn' => 36,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'replaceRecursive' => 
      array (
        'name' => 'replaceRecursive',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 886,
            'endLine' => 886,
            'startColumn' => 38,
            'endColumn' => 43,
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
 * Recursively replace the collection items with the given items.
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<TKey, TValue>|iterable<TKey, TValue>  $items
 * @return static
 */',
        'startLine' => 886,
        'endLine' => 886,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'reverse' => 
      array (
        'name' => 'reverse',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reverse items order.
 *
 * @return static
 */',
        'startLine' => 893,
        'endLine' => 893,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'search' => 
      array (
        'name' => 'search',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 902,
            'endLine' => 902,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 902,
                'endLine' => 902,
                'startTokenPos' => 1658,
                'startFilePos' => 26353,
                'endTokenPos' => 1658,
                'endFilePos' => 26357,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 902,
            'endLine' => 902,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Search the collection for a given value and return the corresponding key if successful.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @param  bool  $strict
 * @return TKey|bool
 */',
        'startLine' => 902,
        'endLine' => 902,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'before' => 
      array (
        'name' => 'before',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 911,
            'endLine' => 911,
            'startColumn' => 28,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 911,
                'endLine' => 911,
                'startTokenPos' => 1677,
                'startFilePos' => 26589,
                'endTokenPos' => 1677,
                'endFilePos' => 26593,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 911,
            'endLine' => 911,
            'startColumn' => 36,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the item before the given item.
 *
 * @param  TValue|(callable(TValue,TKey): bool)  $value
 * @param  bool  $strict
 * @return TValue|null
 */',
        'startLine' => 911,
        'endLine' => 911,
        'startColumn' => 5,
        'endColumn' => 52,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'after' => 
      array (
        'name' => 'after',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 920,
            'endLine' => 920,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 920,
                'endLine' => 920,
                'startTokenPos' => 1696,
                'startFilePos' => 26823,
                'endTokenPos' => 1696,
                'endFilePos' => 26827,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 920,
            'endLine' => 920,
            'startColumn' => 35,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the item after the given item.
 *
 * @param  TValue|(callable(TValue,TKey): bool)  $value
 * @param  bool  $strict
 * @return TValue|null
 */',
        'startLine' => 920,
        'endLine' => 920,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'shuffle' => 
      array (
        'name' => 'shuffle',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Shuffle the items in the collection.
 *
 * @return static
 */',
        'startLine' => 927,
        'endLine' => 927,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sliding' => 
      array (
        'name' => 'sliding',
        'parameters' => 
        array (
          'size' => 
          array (
            'name' => 'size',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 936,
                'endLine' => 936,
                'startTokenPos' => 1723,
                'startFilePos' => 27189,
                'endTokenPos' => 1723,
                'endFilePos' => 27189,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 936,
            'endLine' => 936,
            'startColumn' => 29,
            'endColumn' => 37,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'step' => 
          array (
            'name' => 'step',
            'default' => 
            array (
              'code' => '1',
              'attributes' => 
              array (
                'startLine' => 936,
                'endLine' => 936,
                'startTokenPos' => 1730,
                'startFilePos' => 27200,
                'endTokenPos' => 1730,
                'endFilePos' => 27200,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 936,
            'endLine' => 936,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create chunks representing a "sliding window" view of the items in the collection.
 *
 * @param  int  $size
 * @param  int  $step
 * @return static<int, static>
 */',
        'startLine' => 936,
        'endLine' => 936,
        'startColumn' => 5,
        'endColumn' => 50,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'skip' => 
      array (
        'name' => 'skip',
        'parameters' => 
        array (
          'count' => 
          array (
            'name' => 'count',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 944,
            'endLine' => 944,
            'startColumn' => 26,
            'endColumn' => 31,
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
 * Skip the first {$count} items.
 *
 * @param  int  $count
 * @return static
 */',
        'startLine' => 944,
        'endLine' => 944,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'skipUntil' => 
      array (
        'name' => 'skipUntil',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 952,
            'endLine' => 952,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Skip items in the collection until the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
        'startLine' => 952,
        'endLine' => 952,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'skipWhile' => 
      array (
        'name' => 'skipWhile',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 960,
            'endLine' => 960,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Skip items in the collection while the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
        'startLine' => 960,
        'endLine' => 960,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'slice' => 
      array (
        'name' => 'slice',
        'parameters' => 
        array (
          'offset' => 
          array (
            'name' => 'offset',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 27,
            'endColumn' => 33,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 969,
                'endLine' => 969,
                'startTokenPos' => 1785,
                'startFilePos' => 27976,
                'endTokenPos' => 1785,
                'endFilePos' => 27979,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 969,
            'endLine' => 969,
            'startColumn' => 36,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a slice of items from the enumerable.
 *
 * @param  int  $offset
 * @param  int|null  $length
 * @return static
 */',
        'startLine' => 969,
        'endLine' => 969,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'split' => 
      array (
        'name' => 'split',
        'parameters' => 
        array (
          'numberOfGroups' => 
          array (
            'name' => 'numberOfGroups',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 977,
            'endLine' => 977,
            'startColumn' => 27,
            'endColumn' => 41,
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
 * Split a collection into a certain number of groups.
 *
 * @param  int  $numberOfGroups
 * @return static<int, static>
 */',
        'startLine' => 977,
        'endLine' => 977,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sole' => 
      array (
        'name' => 'sole',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 990,
                'endLine' => 990,
                'startTokenPos' => 1813,
                'startFilePos' => 28619,
                'endTokenPos' => 1813,
                'endFilePos' => 28622,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 990,
            'endLine' => 990,
            'startColumn' => 26,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 990,
                'endLine' => 990,
                'startTokenPos' => 1820,
                'startFilePos' => 28637,
                'endTokenPos' => 1820,
                'endFilePos' => 28640,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 990,
            'endLine' => 990,
            'startColumn' => 39,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 990,
                'endLine' => 990,
                'startTokenPos' => 1827,
                'startFilePos' => 28652,
                'endTokenPos' => 1827,
                'endFilePos' => 28655,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 990,
            'endLine' => 990,
            'startColumn' => 57,
            'endColumn' => 69,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the first item in the collection, but only if exactly one item exists. Otherwise, throw an exception.
 *
 * @param  (callable(TValue, TKey): bool)|string  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return TValue
 *
 * @throws \\Illuminate\\Support\\ItemNotFoundException
 * @throws \\Illuminate\\Support\\MultipleItemsFoundException
 */',
        'startLine' => 990,
        'endLine' => 990,
        'startColumn' => 5,
        'endColumn' => 71,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'firstOrFail' => 
      array (
        'name' => 'firstOrFail',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1002,
                'endLine' => 1002,
                'startTokenPos' => 1843,
                'startFilePos' => 29028,
                'endTokenPos' => 1843,
                'endFilePos' => 29031,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1002,
            'endLine' => 1002,
            'startColumn' => 33,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'operator' => 
          array (
            'name' => 'operator',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1002,
                'endLine' => 1002,
                'startTokenPos' => 1850,
                'startFilePos' => 29046,
                'endTokenPos' => 1850,
                'endFilePos' => 29049,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1002,
            'endLine' => 1002,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1002,
                'endLine' => 1002,
                'startTokenPos' => 1857,
                'startFilePos' => 29061,
                'endTokenPos' => 1857,
                'endFilePos' => 29064,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1002,
            'endLine' => 1002,
            'startColumn' => 64,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the first item in the collection but throw an exception if no matching items exist.
 *
 * @param  (callable(TValue, TKey): bool)|string|null  $key
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return TValue
 *
 * @throws \\Illuminate\\Support\\ItemNotFoundException
 */',
        'startLine' => 1002,
        'endLine' => 1002,
        'startColumn' => 5,
        'endColumn' => 78,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'chunk' => 
      array (
        'name' => 'chunk',
        'parameters' => 
        array (
          'size' => 
          array (
            'name' => 'size',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1010,
            'endLine' => 1010,
            'startColumn' => 27,
            'endColumn' => 31,
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
 * Chunk the collection into chunks of the given size.
 *
 * @param  int  $size
 * @return static<int, static>
 */',
        'startLine' => 1010,
        'endLine' => 1010,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'chunkWhile' => 
      array (
        'name' => 'chunkWhile',
        'parameters' => 
        array (
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
            'startLine' => 1018,
            'endLine' => 1018,
            'startColumn' => 32,
            'endColumn' => 49,
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
 * Chunk the collection into chunks with a callback.
 *
 * @param  callable(TValue, TKey, static<int, TValue>): bool  $callback
 * @return static<int, static<int, TValue>>
 */',
        'startLine' => 1018,
        'endLine' => 1018,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'splitIn' => 
      array (
        'name' => 'splitIn',
        'parameters' => 
        array (
          'numberOfGroups' => 
          array (
            'name' => 'numberOfGroups',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1026,
            'endLine' => 1026,
            'startColumn' => 29,
            'endColumn' => 43,
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
 * Split a collection into a certain number of groups, and fill the first groups completely.
 *
 * @param  int  $numberOfGroups
 * @return static<int, static>
 */',
        'startLine' => 1026,
        'endLine' => 1026,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sort' => 
      array (
        'name' => 'sort',
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
                'startLine' => 1034,
                'endLine' => 1034,
                'startTokenPos' => 1911,
                'startFilePos' => 29938,
                'endTokenPos' => 1911,
                'endFilePos' => 29941,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1034,
            'endLine' => 1034,
            'startColumn' => 26,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort through each item with a callback.
 *
 * @param  (callable(TValue, TValue): int)|null|int  $callback
 * @return static
 */',
        'startLine' => 1034,
        'endLine' => 1034,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sortDesc' => 
      array (
        'name' => 'sortDesc',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1042,
                'endLine' => 1042,
                'startTokenPos' => 1927,
                'startFilePos' => 30099,
                'endTokenPos' => 1927,
                'endFilePos' => 30110,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1042,
            'endLine' => 1042,
            'startColumn' => 30,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort items in descending order.
 *
 * @param  int  $options
 * @return static
 */',
        'startLine' => 1042,
        'endLine' => 1042,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sortBy' => 
      array (
        'name' => 'sortBy',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1052,
            'endLine' => 1052,
            'startColumn' => 28,
            'endColumn' => 36,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1052,
                'endLine' => 1052,
                'startTokenPos' => 1946,
                'startFilePos' => 30502,
                'endTokenPos' => 1946,
                'endFilePos' => 30513,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1052,
            'endLine' => 1052,
            'startColumn' => 39,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'descending' => 
          array (
            'name' => 'descending',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1052,
                'endLine' => 1052,
                'startTokenPos' => 1953,
                'startFilePos' => 30530,
                'endTokenPos' => 1953,
                'endFilePos' => 30534,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1052,
            'endLine' => 1052,
            'startColumn' => 64,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort the collection using the given callback.
 *
 * @param  array<array-key, (callable(TValue, TValue): mixed)|(callable(TValue, TKey): mixed)|string|array{string, string}>|(callable(TValue, TKey): mixed)|string  $callback
 * @param  int  $options
 * @param  bool  $descending
 * @return static
 */',
        'startLine' => 1052,
        'endLine' => 1052,
        'startColumn' => 5,
        'endColumn' => 84,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sortByDesc' => 
      array (
        'name' => 'sortByDesc',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 32,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1061,
                'endLine' => 1061,
                'startTokenPos' => 1972,
                'startFilePos' => 30917,
                'endTokenPos' => 1972,
                'endFilePos' => 30928,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1061,
            'endLine' => 1061,
            'startColumn' => 43,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort the collection in descending order using the given callback.
 *
 * @param  array<array-key, (callable(TValue, TValue): mixed)|(callable(TValue, TKey): mixed)|string|array{string, string}>|(callable(TValue, TKey): mixed)|string  $callback
 * @param  int  $options
 * @return static
 */',
        'startLine' => 1061,
        'endLine' => 1061,
        'startColumn' => 5,
        'endColumn' => 67,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sortKeys' => 
      array (
        'name' => 'sortKeys',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1070,
                'endLine' => 1070,
                'startTokenPos' => 1988,
                'startFilePos' => 31113,
                'endTokenPos' => 1988,
                'endFilePos' => 31124,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1070,
            'endLine' => 1070,
            'startColumn' => 30,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'descending' => 
          array (
            'name' => 'descending',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1070,
                'endLine' => 1070,
                'startTokenPos' => 1995,
                'startFilePos' => 31141,
                'endTokenPos' => 1995,
                'endFilePos' => 31145,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1070,
            'endLine' => 1070,
            'startColumn' => 55,
            'endColumn' => 73,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort the collection keys.
 *
 * @param  int  $options
 * @param  bool  $descending
 * @return static
 */',
        'startLine' => 1070,
        'endLine' => 1070,
        'startColumn' => 5,
        'endColumn' => 75,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sortKeysDesc' => 
      array (
        'name' => 'sortKeysDesc',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => 'SORT_REGULAR',
              'attributes' => 
              array (
                'startLine' => 1078,
                'endLine' => 1078,
                'startTokenPos' => 2011,
                'startFilePos' => 31321,
                'endTokenPos' => 2011,
                'endFilePos' => 31332,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1078,
            'endLine' => 1078,
            'startColumn' => 34,
            'endColumn' => 56,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Sort the collection keys in descending order.
 *
 * @param  int  $options
 * @return static
 */',
        'startLine' => 1078,
        'endLine' => 1078,
        'startColumn' => 5,
        'endColumn' => 58,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sortKeysUsing' => 
      array (
        'name' => 'sortKeysUsing',
        'parameters' => 
        array (
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
            'startLine' => 1086,
            'endLine' => 1086,
            'startColumn' => 35,
            'endColumn' => 52,
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
 * Sort the collection keys using a callback.
 *
 * @param  callable(TKey, TKey): int  $callback
 * @return static
 */',
        'startLine' => 1086,
        'endLine' => 1086,
        'startColumn' => 5,
        'endColumn' => 54,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'sum' => 
      array (
        'name' => 'sum',
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
                'startLine' => 1094,
                'endLine' => 1094,
                'startTokenPos' => 2041,
                'startFilePos' => 31724,
                'endTokenPos' => 2041,
                'endFilePos' => 31727,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1094,
            'endLine' => 1094,
            'startColumn' => 25,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the sum of the given values.
 *
 * @param  (callable(TValue): mixed)|string|null  $callback
 * @return mixed
 */',
        'startLine' => 1094,
        'endLine' => 1094,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'take' => 
      array (
        'name' => 'take',
        'parameters' => 
        array (
          'limit' => 
          array (
            'name' => 'limit',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1102,
            'endLine' => 1102,
            'startColumn' => 26,
            'endColumn' => 31,
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
 * Take the first or last {$limit} items.
 *
 * @param  int  $limit
 * @return static
 */',
        'startLine' => 1102,
        'endLine' => 1102,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'takeUntil' => 
      array (
        'name' => 'takeUntil',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1110,
            'endLine' => 1110,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Take items in the collection until the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
        'startLine' => 1110,
        'endLine' => 1110,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'takeWhile' => 
      array (
        'name' => 'takeWhile',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1118,
            'endLine' => 1118,
            'startColumn' => 31,
            'endColumn' => 36,
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
 * Take items in the collection while the given condition is met.
 *
 * @param  TValue|callable(TValue,TKey): bool  $value
 * @return static
 */',
        'startLine' => 1118,
        'endLine' => 1118,
        'startColumn' => 5,
        'endColumn' => 38,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'tap' => 
      array (
        'name' => 'tap',
        'parameters' => 
        array (
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
            'startLine' => 1126,
            'endLine' => 1126,
            'startColumn' => 25,
            'endColumn' => 42,
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
 * Pass the collection to the given callback and then return it.
 *
 * @param  callable(TValue): mixed  $callback
 * @return $this
 */',
        'startLine' => 1126,
        'endLine' => 1126,
        'startColumn' => 5,
        'endColumn' => 44,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'pipe' => 
      array (
        'name' => 'pipe',
        'parameters' => 
        array (
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
            'startLine' => 1136,
            'endLine' => 1136,
            'startColumn' => 26,
            'endColumn' => 43,
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
 * Pass the enumerable to the given callback and return the result.
 *
 * @template TPipeReturnType
 *
 * @param  callable($this): TPipeReturnType  $callback
 * @return TPipeReturnType
 */',
        'startLine' => 1136,
        'endLine' => 1136,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'pipeInto' => 
      array (
        'name' => 'pipeInto',
        'parameters' => 
        array (
          'class' => 
          array (
            'name' => 'class',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1146,
            'endLine' => 1146,
            'startColumn' => 30,
            'endColumn' => 35,
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
 * Pass the collection into a new class.
 *
 * @template TPipeIntoValue
 *
 * @param  class-string<TPipeIntoValue>  $class
 * @return TPipeIntoValue
 */',
        'startLine' => 1146,
        'endLine' => 1146,
        'startColumn' => 5,
        'endColumn' => 37,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'pipeThrough' => 
      array (
        'name' => 'pipeThrough',
        'parameters' => 
        array (
          'pipes' => 
          array (
            'name' => 'pipes',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1154,
            'endLine' => 1154,
            'startColumn' => 33,
            'endColumn' => 38,
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
 * Pass the collection through a series of callable pipes and return the result.
 *
 * @param  array<callable>  $pipes
 * @return mixed
 */',
        'startLine' => 1154,
        'endLine' => 1154,
        'startColumn' => 5,
        'endColumn' => 40,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'pluck' => 
      array (
        'name' => 'pluck',
        'parameters' => 
        array (
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1163,
            'endLine' => 1163,
            'startColumn' => 27,
            'endColumn' => 32,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1163,
                'endLine' => 1163,
                'startTokenPos' => 2148,
                'startFilePos' => 33460,
                'endTokenPos' => 2148,
                'endFilePos' => 33463,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1163,
            'endLine' => 1163,
            'startColumn' => 35,
            'endColumn' => 45,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the values of a given key.
 *
 * @param  string|array<array-key, string>  $value
 * @param  string|null  $key
 * @return static<array-key, mixed>
 */',
        'startLine' => 1163,
        'endLine' => 1163,
        'startColumn' => 5,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'reject' => 
      array (
        'name' => 'reject',
        'parameters' => 
        array (
          'callback' => 
          array (
            'name' => 'callback',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1171,
                'endLine' => 1171,
                'startTokenPos' => 2164,
                'startFilePos' => 33701,
                'endTokenPos' => 2164,
                'endFilePos' => 33704,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1171,
            'endLine' => 1171,
            'startColumn' => 28,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Create a collection of all elements that do not pass a given truth test.
 *
 * @param  (callable(TValue, TKey): bool)|bool|TValue  $callback
 * @return static
 */',
        'startLine' => 1171,
        'endLine' => 1171,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'undot' => 
      array (
        'name' => 'undot',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert a flatten "dot" notation array into an expanded array.
 *
 * @return static
 */',
        'startLine' => 1178,
        'endLine' => 1178,
        'startColumn' => 5,
        'endColumn' => 28,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'unique' => 
      array (
        'name' => 'unique',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1187,
                'endLine' => 1187,
                'startTokenPos' => 2191,
                'startFilePos' => 34086,
                'endTokenPos' => 2191,
                'endFilePos' => 34089,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1187,
            'endLine' => 1187,
            'startColumn' => 28,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'strict' => 
          array (
            'name' => 'strict',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1187,
                'endLine' => 1187,
                'startTokenPos' => 2198,
                'startFilePos' => 34102,
                'endTokenPos' => 2198,
                'endFilePos' => 34106,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1187,
            'endLine' => 1187,
            'startColumn' => 41,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return only unique items from the collection array.
 *
 * @param  (callable(TValue, TKey): mixed)|string|null  $key
 * @param  bool  $strict
 * @return static
 */',
        'startLine' => 1187,
        'endLine' => 1187,
        'startColumn' => 5,
        'endColumn' => 57,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'uniqueStrict' => 
      array (
        'name' => 'uniqueStrict',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1195,
                'endLine' => 1195,
                'startTokenPos' => 2214,
                'startFilePos' => 34344,
                'endTokenPos' => 2214,
                'endFilePos' => 34347,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1195,
            'endLine' => 1195,
            'startColumn' => 34,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Return only unique items from the collection array using strict comparison.
 *
 * @param  (callable(TValue, TKey): mixed)|string|null  $key
 * @return static
 */',
        'startLine' => 1195,
        'endLine' => 1195,
        'startColumn' => 5,
        'endColumn' => 46,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'values' => 
      array (
        'name' => 'values',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Reset the keys on the underlying array.
 *
 * @return static<int, TValue>
 */',
        'startLine' => 1202,
        'endLine' => 1202,
        'startColumn' => 5,
        'endColumn' => 29,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'pad' => 
      array (
        'name' => 'pad',
        'parameters' => 
        array (
          'size' => 
          array (
            'name' => 'size',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1213,
            'endLine' => 1213,
            'startColumn' => 25,
            'endColumn' => 29,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'value' => 
          array (
            'name' => 'value',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1213,
            'endLine' => 1213,
            'startColumn' => 32,
            'endColumn' => 37,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Pad collection to the specified length with a value.
 *
 * @template TPadValue
 *
 * @param  int  $size
 * @param  TPadValue  $value
 * @return static<int, TValue|TPadValue>
 */',
        'startLine' => 1213,
        'endLine' => 1213,
        'startColumn' => 5,
        'endColumn' => 39,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'getIterator' => 
      array (
        'name' => 'getIterator',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Traversable',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the values iterator.
 *
 * @return \\Traversable<TKey, TValue>
 */',
        'startLine' => 1220,
        'endLine' => 1220,
        'startColumn' => 5,
        'endColumn' => 47,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'count' => 
      array (
        'name' => 'count',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'int',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Count the number of items in the collection.
 *
 * @return int
 */',
        'startLine' => 1227,
        'endLine' => 1227,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'countBy' => 
      array (
        'name' => 'countBy',
        'parameters' => 
        array (
          'countBy' => 
          array (
            'name' => 'countBy',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1235,
                'endLine' => 1235,
                'startTokenPos' => 2284,
                'startFilePos' => 35281,
                'endTokenPos' => 2284,
                'endFilePos' => 35284,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1235,
            'endLine' => 1235,
            'startColumn' => 29,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Count the number of items in the collection by a field or using a callback.
 *
 * @param  (callable(TValue, TKey): array-key)|string|null  $countBy
 * @return static<array-key, int>
 */',
        'startLine' => 1235,
        'endLine' => 1235,
        'startColumn' => 5,
        'endColumn' => 45,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'zip' => 
      array (
        'name' => 'zip',
        'parameters' => 
        array (
          'items' => 
          array (
            'name' => 'items',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1248,
            'endLine' => 1248,
            'startColumn' => 25,
            'endColumn' => 30,
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
 * Zip the collection together with one or more arrays.
 *
 * e.g. new Collection([1, 2, 3])->zip([4, 5, 6]);
 *      => [[1, 4], [2, 5], [3, 6]]
 *
 * @template TZipValue
 *
 * @param  \\Illuminate\\Contracts\\Support\\Arrayable<array-key, TZipValue>|iterable<array-key, TZipValue>  ...$items
 * @return static<int, static<int, TValue|TZipValue>>
 */',
        'startLine' => 1248,
        'endLine' => 1248,
        'startColumn' => 5,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'collect' => 
      array (
        'name' => 'collect',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Collect the values into a collection.
 *
 * @return \\Illuminate\\Support\\Collection<TKey, TValue>
 */',
        'startLine' => 1255,
        'endLine' => 1255,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'toArray' => 
      array (
        'name' => 'toArray',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the collection of items as a plain array.
 *
 * @return array<TKey, mixed>
 */',
        'startLine' => 1262,
        'endLine' => 1262,
        'startColumn' => 5,
        'endColumn' => 30,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'jsonSerialize' => 
      array (
        'name' => 'jsonSerialize',
        'parameters' => 
        array (
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
 * Convert the object into something JSON serializable.
 *
 * @return mixed
 */',
        'startLine' => 1269,
        'endLine' => 1269,
        'startColumn' => 5,
        'endColumn' => 43,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'toJson' => 
      array (
        'name' => 'toJson',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 1277,
                'endLine' => 1277,
                'startTokenPos' => 2348,
                'startFilePos' => 36326,
                'endTokenPos' => 2348,
                'endFilePos' => 36326,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1277,
            'endLine' => 1277,
            'startColumn' => 28,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the collection of items as JSON.
 *
 * @param  int  $options
 * @return string
 */',
        'startLine' => 1277,
        'endLine' => 1277,
        'startColumn' => 5,
        'endColumn' => 41,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'toPrettyJson' => 
      array (
        'name' => 'toPrettyJson',
        'parameters' => 
        array (
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '0',
              'attributes' => 
              array (
                'startLine' => 1286,
                'endLine' => 1286,
                'startTokenPos' => 2366,
                'startFilePos' => 36527,
                'endTokenPos' => 2366,
                'endFilePos' => 36527,
              ),
            ),
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
            'startLine' => 1286,
            'endLine' => 1286,
            'startColumn' => 34,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the collection of items as pretty print formatted JSON.
 *
 *
 * @param  int  $options
 * @return string
 */',
        'startLine' => 1286,
        'endLine' => 1286,
        'startColumn' => 5,
        'endColumn' => 51,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'getCachingIterator' => 
      array (
        'name' => 'getCachingIterator',
        'parameters' => 
        array (
          'flags' => 
          array (
            'name' => 'flags',
            'default' => 
            array (
              'code' => '\\CachingIterator::CALL_TOSTRING',
              'attributes' => 
              array (
                'startLine' => 1294,
                'endLine' => 1294,
                'startTokenPos' => 2382,
                'startFilePos' => 36701,
                'endTokenPos' => 2384,
                'endFilePos' => 36730,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1294,
            'endLine' => 1294,
            'startColumn' => 40,
            'endColumn' => 78,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get a CachingIterator instance.
 *
 * @param  int  $flags
 * @return \\CachingIterator
 */',
        'startLine' => 1294,
        'endLine' => 1294,
        'startColumn' => 5,
        'endColumn' => 80,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      '__toString' => 
      array (
        'name' => '__toString',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the collection to its string representation.
 *
 * @return string
 */',
        'startLine' => 1301,
        'endLine' => 1301,
        'startColumn' => 5,
        'endColumn' => 33,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'escapeWhenCastingToString' => 
      array (
        'name' => 'escapeWhenCastingToString',
        'parameters' => 
        array (
          'escape' => 
          array (
            'name' => 'escape',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1309,
                'endLine' => 1309,
                'startTokenPos' => 2411,
                'startFilePos' => 37105,
                'endTokenPos' => 2411,
                'endFilePos' => 37108,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1309,
            'endLine' => 1309,
            'startColumn' => 47,
            'endColumn' => 60,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that the model\'s string representation should be escaped when __toString is invoked.
 *
 * @param  bool  $escape
 * @return $this
 */',
        'startLine' => 1309,
        'endLine' => 1309,
        'startColumn' => 5,
        'endColumn' => 62,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      'proxy' => 
      array (
        'name' => 'proxy',
        'parameters' => 
        array (
          'method' => 
          array (
            'name' => 'method',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1317,
            'endLine' => 1317,
            'startColumn' => 34,
            'endColumn' => 40,
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
 * Add a method to the list of proxied methods.
 *
 * @param  string  $method
 * @return void
 */',
        'startLine' => 1317,
        'endLine' => 1317,
        'startColumn' => 5,
        'endColumn' => 42,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
        'aliasName' => NULL,
      ),
      '__get' => 
      array (
        'name' => '__get',
        'parameters' => 
        array (
          'key' => 
          array (
            'name' => 'key',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1327,
            'endLine' => 1327,
            'startColumn' => 27,
            'endColumn' => 30,
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
 * Dynamically access collection proxies.
 *
 * @param  string  $key
 * @return mixed
 *
 * @throws \\Exception
 */',
        'startLine' => 1327,
        'endLine' => 1327,
        'startColumn' => 5,
        'endColumn' => 32,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Enumerable',
        'implementingClassName' => 'Illuminate\\Support\\Enumerable',
        'currentClassName' => 'Illuminate\\Support\\Enumerable',
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