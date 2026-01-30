<?php declare(strict_types = 1);

// osfsl-C:/Users/tobyi/Herd/meetball-website/vendor/composer/../laravel/framework/src/Illuminate/Auth/Middleware/AuthenticateWithBasicAuth.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Auth\Middleware\AuthenticateWithBasicAuth
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-c887b01d37c05720b3f046e63b73ac4225b4b7b2bdb196f64edbcc5ec734698e-8.4.12-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/vendor/composer/../laravel/framework/src/Illuminate/Auth/Middleware/AuthenticateWithBasicAuth.php',
      ),
    ),
    'namespace' => 'Illuminate\\Auth\\Middleware',
    'name' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
    'shortName' => 'AuthenticateWithBasicAuth',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 8,
    'endLine' => 58,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'auth' => 
      array (
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'name' => 'auth',
        'modifiers' => 2,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The guard factory instance.
 *
 * @var \\Illuminate\\Contracts\\Auth\\Factory
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 15,
        'endLine' => 15,
        'startColumn' => 5,
        'endColumn' => 20,
        'isPromoted' => false,
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
          'auth' => 
          array (
            'name' => 'auth',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Contracts\\Auth\\Factory',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 22,
            'endLine' => 22,
            'startColumn' => 33,
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
 * Create a new middleware instance.
 *
 * @param  \\Illuminate\\Contracts\\Auth\\Factory  $auth
 */',
        'startLine' => 22,
        'endLine' => 25,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'aliasName' => NULL,
      ),
      'using' => 
      array (
        'name' => 'using',
        'parameters' => 
        array (
          'guard' => 
          array (
            'name' => 'guard',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 36,
                'endLine' => 36,
                'startTokenPos' => 74,
                'startFilePos' => 742,
                'endTokenPos' => 74,
                'endFilePos' => 745,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 34,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'field' => 
          array (
            'name' => 'field',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 36,
                'endLine' => 36,
                'startTokenPos' => 81,
                'startFilePos' => 757,
                'endTokenPos' => 81,
                'endFilePos' => 760,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 36,
            'endLine' => 36,
            'startColumn' => 49,
            'endColumn' => 61,
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
 * Specify the guard and field for the middleware.
 *
 * @param  string|null  $guard
 * @param  string|null  $field
 * @return string
 *
 * @named-arguments-supported
 */',
        'startLine' => 36,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => true,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'aliasName' => NULL,
      ),
      'handle' => 
      array (
        'name' => 'handle',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 28,
            'endColumn' => 35,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'next' => 
          array (
            'name' => 'next',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Closure',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 38,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'guard' => 
          array (
            'name' => 'guard',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 52,
                'endLine' => 52,
                'startTokenPos' => 127,
                'startFilePos' => 1219,
                'endTokenPos' => 127,
                'endFilePos' => 1222,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 53,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'field' => 
          array (
            'name' => 'field',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 52,
                'endLine' => 52,
                'startTokenPos' => 134,
                'startFilePos' => 1234,
                'endTokenPos' => 134,
                'endFilePos' => 1237,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 52,
            'endLine' => 52,
            'startColumn' => 68,
            'endColumn' => 80,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Handle an incoming request.
 *
 * @param  \\Illuminate\\Http\\Request  $request
 * @param  \\Closure  $next
 * @param  string|null  $guard
 * @param  string|null  $field
 * @return mixed
 *
 * @throws \\Symfony\\Component\\HttpKernel\\Exception\\UnauthorizedHttpException
 */',
        'startLine' => 52,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'Illuminate\\Auth\\Middleware',
        'declaringClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'implementingClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
        'currentClassName' => 'Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth',
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