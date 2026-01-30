<?php declare(strict_types = 1);

// odsl-C:\Users\tobyi\Herd\meetball-website\app\Http\Controllers\AdminController.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Http\Controllers\AdminController
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.12-7bde30c398875d4c16d8a51106e950db3b98cc63f0d5dda284a947665b800569',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Http\\Controllers\\AdminController',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/app/Http/Controllers/AdminController.php',
      ),
    ),
    'namespace' => 'App\\Http\\Controllers',
    'name' => 'App\\Http\\Controllers\\AdminController',
    'shortName' => 'AdminController',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => '/**
 * Controller for admin functionalities.
 */',
    'attributes' => 
    array (
    ),
    'startLine' => 22,
    'endLine' => 218,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'App\\Http\\Controllers\\Controller',
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
      'weeklyDraw' => 
      array (
        'name' => 'weeklyDraw',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'Illuminate\\Http\\Request',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 29,
            'endLine' => 29,
            'startColumn' => 32,
            'endColumn' => 47,
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
 * Show the weekly draw page and handle team drawing.
 * @param \\Illuminate\\Http\\Request $request
 * @return \\Illuminate\\View\\View
 */',
        'startLine' => 29,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'drawBalancedTeams' => 
      array (
        'name' => 'drawBalancedTeams',
        'parameters' => 
        array (
          'players' => 
          array (
            'name' => 'players',
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
            'startColumn' => 40,
            'endColumn' => 47,
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
 * Draw balanced teams from selected players.
 *
 * @param \\Illuminate\\Support\\Collection $players
 * @return array
 */',
        'startLine' => 61,
        'endLine' => 75,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 4,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'statsInputter' => 
      array (
        'name' => 'statsInputter',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Show the stats inputter page.
 *
 * @return \\Illuminate\\View\\View
 */',
        'startLine' => 82,
        'endLine' => 87,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'storeMatchPlayerStats' => 
      array (
        'name' => 'storeMatchPlayerStats',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Http\\Requests\\Admin\\StoreMatchPlayerStatsRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 95,
            'endLine' => 95,
            'startColumn' => 43,
            'endColumn' => 79,
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
 * Store match player stats.
 *
 * @param \\App\\Http\\Requests\\Admin\\StoreMatchPlayerStatsRequest $request
 * @return \\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 95,
        'endLine' => 138,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'addPlayers' => 
      array (
        'name' => 'addPlayers',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Show the add players page.
 *
 * @return \\Illuminate\\View\\View
 */',
        'startLine' => 145,
        'endLine' => 148,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'storePlayer' => 
      array (
        'name' => 'storePlayer',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Http\\Requests\\Admin\\StorePlayerRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 156,
            'endLine' => 156,
            'startColumn' => 33,
            'endColumn' => 59,
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
 * Store a new player.
 *
 * @param \\App\\Http\\Requests\\Admin\\StorePlayerRequest $request
 * @return \\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 156,
        'endLine' => 165,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'newSeason' => 
      array (
        'name' => 'newSeason',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Show the new season page.
 *
 * @return \\Illuminate\\View\\View
 */',
        'startLine' => 172,
        'endLine' => 175,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'createSeason' => 
      array (
        'name' => 'createSeason',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Http\\Requests\\Admin\\CreateSeasonRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 183,
            'endLine' => 183,
            'startColumn' => 34,
            'endColumn' => 61,
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
 * Create a new season.
 *
 * @param \\App\\Http\\Requests\\Admin\\CreateSeasonRequest $request
 * @return \\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 183,
        'endLine' => 190,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'matchPlayed' => 
      array (
        'name' => 'matchPlayed',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Show the match played page.
 *
 * @return \\Illuminate\\View\\View
 */',
        'startLine' => 197,
        'endLine' => 202,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
        'aliasName' => NULL,
      ),
      'storeMatch' => 
      array (
        'name' => 'storeMatch',
        'parameters' => 
        array (
          'request' => 
          array (
            'name' => 'request',
            'default' => NULL,
            'type' => 
            array (
              'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
              'data' => 
              array (
                'name' => 'App\\Http\\Requests\\Admin\\StoreMatchRequest',
                'isIdentifier' => false,
              ),
            ),
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 210,
            'endLine' => 210,
            'startColumn' => 32,
            'endColumn' => 57,
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
 * Store a new match.
 *
 * @param \\App\\Http\\Requests\\Admin\\StoreMatchRequest $request
 * @return \\Illuminate\\Http\\RedirectResponse
 */',
        'startLine' => 210,
        'endLine' => 217,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Http\\Controllers',
        'declaringClassName' => 'App\\Http\\Controllers\\AdminController',
        'implementingClassName' => 'App\\Http\\Controllers\\AdminController',
        'currentClassName' => 'App\\Http\\Controllers\\AdminController',
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