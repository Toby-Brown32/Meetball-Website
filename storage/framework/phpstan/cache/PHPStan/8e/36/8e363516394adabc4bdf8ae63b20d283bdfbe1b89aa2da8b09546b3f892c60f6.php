<?php declare(strict_types = 1);

// odsl-C:\Users\tobyi\Herd\meetball-website\app\Http\Requests\Auth\LoginRequest.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Requests\Auth\LoginRequest
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.12-f7ebc27bc5aa217844d5798193744478674e9aa0f9fe4ef919432f7d3e1c1675',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/app/Http/Requests/Auth/LoginRequest.php',
      ),
    ),
    'namespace' => 'App\\Http\\Requests\\Auth',
    'name' => 'App\\Http\\Requests\\Auth\\LoginRequest',
    'shortName' => 'LoginRequest',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 12,
    'endLine' => 85,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Foundation\\Http\\FormRequest',
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
    ),
    'immediateMethods' => 
    array (
      'authorize' => 
      array (
        'name' => 'authorize',
        'parameters' => 
        array (
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
 * Determine if the user is authorized to make this request.
 */',
        'startLine' => 17,
        'endLine' => 20,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Requests\\Auth',
        'declaringClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'implementingClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'currentClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'aliasName' => NULL,
      ),
      'rules' => 
      array (
        'name' => 'rules',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'array',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the validation rules that apply to the request.
 *
 * @return array<string, \\Illuminate\\Contracts\\Validation\\ValidationRule|array<mixed>|string>
 */',
        'startLine' => 27,
        'endLine' => 33,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Requests\\Auth',
        'declaringClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'implementingClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'currentClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'aliasName' => NULL,
      ),
      'authenticate' => 
      array (
        'name' => 'authenticate',
        'parameters' => 
        array (
          'guard' => 
          array (
            'name' => 'guard',
            'default' => 
            array (
              'code' => '\'web\'',
              'attributes' => 
              array (
                'startLine' => 40,
                'endLine' => 40,
                'startTokenPos' => 132,
                'startFilePos' => 1016,
                'endTokenPos' => 132,
                'endFilePos' => 1020,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 40,
            'endLine' => 40,
            'startColumn' => 34,
            'endColumn' => 47,
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
 * Attempt to authenticate the request\'s credentials.
 *
 * @throws \\Illuminate\\Validation\\ValidationException
 */',
        'startLine' => 40,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Requests\\Auth',
        'declaringClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'implementingClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'currentClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'aliasName' => NULL,
      ),
      'ensureIsNotRateLimited' => 
      array (
        'name' => 'ensureIsNotRateLimited',
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
 * Ensure the login request is not rate limited.
 *
 * @throws \\Illuminate\\Validation\\ValidationException
 */',
        'startLine' => 60,
        'endLine' => 76,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => true,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Requests\\Auth',
        'declaringClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'implementingClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'currentClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'aliasName' => NULL,
      ),
      'throttleKey' => 
      array (
        'name' => 'throttleKey',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the rate limiting throttle key for the request.
 */',
        'startLine' => 81,
        'endLine' => 84,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Requests\\Auth',
        'declaringClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'implementingClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
        'currentClassName' => 'App\\Http\\Requests\\Auth\\LoginRequest',
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