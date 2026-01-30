<?php declare(strict_types = 1);

// odsl-C:\Users\tobyi\Herd\meetball-website\app\Http\Kernel.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Kernel
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.12-fcf6e6eb95c9ba1dbc93dd3121b550f2b345935f2c39ec26ed57b4a96514e931',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Kernel',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/app/Http/Kernel.php',
      ),
    ),
    'namespace' => 'App\\Http',
    'name' => 'App\\Http\\Kernel',
    'shortName' => 'Kernel',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 7,
    'endLine' => 68,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Foundation\\Http\\Kernel',
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
      'middleware' => 
      array (
        'declaringClassName' => 'App\\Http\\Kernel',
        'implementingClassName' => 'App\\Http\\Kernel',
        'name' => 'middleware',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[
    // ...existing global middleware...
    \\Illuminate\\Http\\Middleware\\HandleCors::class,
    \\App\\Http\\Middleware\\TrustProxies::class,
    \\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize::class,
    \\App\\Http\\Middleware\\PreventRequestsDuringMaintenance::class,
    \\Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull::class,
    \\App\\Http\\Middleware\\TrimStrings::class,
]',
          'attributes' => 
          array (
            'startLine' => 16,
            'endLine' => 24,
            'startTokenPos' => 34,
            'startFilePos' => 347,
            'endTokenPos' => 68,
            'endFilePos' => 774,
          ),
        ),
        'docComment' => '/**
 * The application\'s global HTTP middleware stack.
 *
 * These middleware are run during every request to your application.
 *
 * @var array<int, class-string|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 16,
        'endLine' => 24,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middlewareGroups' => 
      array (
        'declaringClassName' => 'App\\Http\\Kernel',
        'implementingClassName' => 'App\\Http\\Kernel',
        'name' => 'middlewareGroups',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'web\' => [
    \\App\\Http\\Middleware\\EncryptCookies::class,
    \\Illuminate\\Cookie\\Middleware\\AddQueuedCookiesToResponse::class,
    \\Illuminate\\Session\\Middleware\\StartSession::class,
    // \\Illuminate\\Session\\Middleware\\AuthenticateSession::class,
    \\Illuminate\\View\\Middleware\\ShareErrorsFromSession::class,
    \\App\\Http\\Middleware\\VerifyCsrfToken::class,
    \\Illuminate\\Routing\\Middleware\\SubstituteBindings::class,
], \'api\' => [
    // \'throttle:api\',
    \\Illuminate\\Routing\\Middleware\\SubstituteBindings::class,
]]',
          'attributes' => 
          array (
            'startLine' => 31,
            'endLine' => 46,
            'startTokenPos' => 79,
            'startFilePos' => 944,
            'endTokenPos' => 138,
            'endFilePos' => 1581,
          ),
        ),
        'docComment' => '/**
 * The application\'s route middleware groups.
 *
 * @var array<string, array<int, class-string|string>>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 31,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'middlewareAliases' => 
      array (
        'declaringClassName' => 'App\\Http\\Kernel',
        'implementingClassName' => 'App\\Http\\Kernel',
        'name' => 'middlewareAliases',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'auth\' => \\App\\Http\\Middleware\\Authenticate::class, \'auth.basic\' => \\Illuminate\\Auth\\Middleware\\AuthenticateWithBasicAuth::class, \'cache.headers\' => \\Illuminate\\Http\\Middleware\\SetCacheHeaders::class, \'can\' => \\Illuminate\\Auth\\Middleware\\Authorize::class, \'guest\' => \\App\\Http\\Middleware\\RedirectIfAuthenticated::class, \'password.confirm\' => \\Illuminate\\Auth\\Middleware\\RequirePassword::class, \'signed\' => \\Illuminate\\Routing\\Middleware\\ValidateSignature::class, \'throttle\' => \\Illuminate\\Routing\\Middleware\\ThrottleRequests::class, \'verified\' => \\Illuminate\\Auth\\Middleware\\EnsureEmailIsVerified::class, \'admin.only\' => \\App\\Http\\Middleware\\AdminOnly::class]',
          'attributes' => 
          array (
            'startLine' => 55,
            'endLine' => 67,
            'startTokenPos' => 149,
            'startFilePos' => 1812,
            'endTokenPos' => 241,
            'endFilePos' => 2519,
          ),
        ),
        'docComment' => '/**
 * The application\'s route middleware.
 *
 * These middleware may be assigned to groups or used individually.
 *
 * @var array<string, class-string|string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 55,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 6,
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