<?php declare(strict_types = 1);

// odsl-C:\Users\tobyi\Herd\meetball-website\app\Models\MatchPlayer.php-PHPStan\BetterReflection\Reflection\ReflectionClass-App\Models\MatchPlayer
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-6.65.0.9-8.4.12-bd949fe6324cb1d5f1b2c19591581613ef2ef7329b409e6251c7ed7528f8f5fc',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'App\\Models\\MatchPlayer',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/app/Models/MatchPlayer.php',
      ),
    ),
    'namespace' => 'App\\Models',
    'name' => 'App\\Models\\MatchPlayer',
    'shortName' => 'MatchPlayer',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 9,
    'endLine' => 58,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => 'Illuminate\\Database\\Eloquent\\Model',
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Database\\Eloquent\\Factories\\HasFactory',
    ),
    'immediateConstants' => 
    array (
    ),
    'immediateProperties' => 
    array (
      'table' => 
      array (
        'declaringClassName' => 'App\\Models\\MatchPlayer',
        'implementingClassName' => 'App\\Models\\MatchPlayer',
        'name' => 'table',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '\'match_player\'',
          'attributes' => 
          array (
            'startLine' => 13,
            'endLine' => 13,
            'startTokenPos' => 43,
            'startFilePos' => 270,
            'endTokenPos' => 43,
            'endFilePos' => 283,
          ),
        ),
        'docComment' => NULL,
        'attributes' => 
        array (
        ),
        'startLine' => 13,
        'endLine' => 13,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'fillable' => 
      array (
        'declaringClassName' => 'App\\Models\\MatchPlayer',
        'implementingClassName' => 'App\\Models\\MatchPlayer',
        'name' => 'fillable',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'match_id\', \'player_id\', \'season_id\', \'team\', \'played\', \'reserve\', \'goals\', \'assists\', \'player_of_match\']',
          'attributes' => 
          array (
            'startLine' => 18,
            'endLine' => 28,
            'startTokenPos' => 54,
            'startFilePos' => 359,
            'endTokenPos' => 83,
            'endFilePos' => 553,
          ),
        ),
        'docComment' => '/**
 * @var list<string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 18,
        'endLine' => 28,
        'startColumn' => 5,
        'endColumn' => 6,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'casts' => 
      array (
        'declaringClassName' => 'App\\Models\\MatchPlayer',
        'implementingClassName' => 'App\\Models\\MatchPlayer',
        'name' => 'casts',
        'modifiers' => 2,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[\'played\' => \'bool\', \'reserve\' => \'bool\', \'player_of_match\' => \'bool\', \'goals\' => \'int\', \'assists\' => \'int\', \'match_id\' => \'int\', \'player_id\' => \'int\', \'season_id\' => \'int\']',
          'attributes' => 
          array (
            'startLine' => 33,
            'endLine' => 42,
            'startTokenPos' => 94,
            'startFilePos' => 635,
            'endTokenPos' => 152,
            'endFilePos' => 887,
          ),
        ),
        'docComment' => '/**
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 33,
        'endLine' => 42,
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
      'match' => 
      array (
        'name' => 'match',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 44,
        'endLine' => 47,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\MatchPlayer',
        'implementingClassName' => 'App\\Models\\MatchPlayer',
        'currentClassName' => 'App\\Models\\MatchPlayer',
        'aliasName' => NULL,
      ),
      'player' => 
      array (
        'name' => 'player',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 49,
        'endLine' => 52,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\MatchPlayer',
        'implementingClassName' => 'App\\Models\\MatchPlayer',
        'currentClassName' => 'App\\Models\\MatchPlayer',
        'aliasName' => NULL,
      ),
      'season' => 
      array (
        'name' => 'season',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => 
        array (
          'class' => 'PHPStan\\BetterReflection\\Reflection\\ReflectionNamedType',
          'data' => 
          array (
            'name' => 'Illuminate\\Database\\Eloquent\\Relations\\BelongsTo',
            'isIdentifier' => false,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => NULL,
        'startLine' => 54,
        'endLine' => 57,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 1,
        'namespace' => 'App\\Models',
        'declaringClassName' => 'App\\Models\\MatchPlayer',
        'implementingClassName' => 'App\\Models\\MatchPlayer',
        'currentClassName' => 'App\\Models\\MatchPlayer',
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