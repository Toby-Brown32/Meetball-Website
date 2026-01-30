<?php declare(strict_types = 1);

// osfsl-C:/Users/tobyi/Herd/meetball-website/vendor/composer/../laravel/framework/src/Illuminate/Support/Str.php-PHPStan\BetterReflection\Reflection\ReflectionClass-Illuminate\Support\Str
return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => 'v2-548886754a0abd3dc55cd25e0b9ac628c0cfe9b3705c81fae7044394e5cdbec9-8.4.12-6.65.0.9',
   'data' => 
  array (
    'locatedSource' => 
    array (
      'class' => 'PHPStan\\BetterReflection\\SourceLocator\\Located\\LocatedSource',
      'data' => 
      array (
        'name' => 'Illuminate\\Support\\Str',
        'filename' => 'C:/Users/tobyi/Herd/meetball-website/vendor/composer/../laravel/framework/src/Illuminate/Support/Str.php',
      ),
    ),
    'namespace' => 'Illuminate\\Support',
    'name' => 'Illuminate\\Support\\Str',
    'shortName' => 'Str',
    'isInterface' => false,
    'isTrait' => false,
    'isEnum' => false,
    'isBackedEnum' => false,
    'modifiers' => 0,
    'docComment' => NULL,
    'attributes' => 
    array (
    ),
    'startLine' => 23,
    'endLine' => 2121,
    'startColumn' => 1,
    'endColumn' => 1,
    'parentClassName' => NULL,
    'implementsClassNames' => 
    array (
    ),
    'traitClassNames' => 
    array (
      0 => 'Illuminate\\Support\\Traits\\Macroable',
    ),
    'immediateConstants' => 
    array (
      'INVISIBLE_CHARACTERS' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'name' => 'INVISIBLE_CHARACTERS',
        'modifiers' => 1,
        'type' => NULL,
        'value' => 
        array (
          'code' => '\'\\x{0009}\\x{0020}\\x{00A0}\\x{00AD}\\x{034F}\\x{061C}\\x{115F}\\x{1160}\\x{17B4}\\x{17B5}\\x{180E}\\x{2000}\\x{2001}\\x{2002}\\x{2003}\\x{2004}\\x{2005}\\x{2006}\\x{2007}\\x{2008}\\x{2009}\\x{200A}\\x{200B}\\x{200C}\\x{200D}\\x{200E}\\x{200F}\\x{202F}\\x{205F}\\x{2060}\\x{2061}\\x{2062}\\x{2063}\\x{2064}\\x{2065}\\x{206A}\\x{206B}\\x{206C}\\x{206D}\\x{206E}\\x{206F}\\x{3000}\\x{2800}\\x{3164}\\x{FEFF}\\x{FFA0}\\x{1D159}\\x{1D173}\\x{1D174}\\x{1D175}\\x{1D176}\\x{1D177}\\x{1D178}\\x{1D179}\\x{1D17A}\\x{E0020}\'',
          'attributes' => 
          array (
            'startLine' => 32,
            'endLine' => 32,
            'startTokenPos' => 111,
            'startFilePos' => 869,
            'endTokenPos' => 111,
            'endFilePos' => 1328,
          ),
        ),
        'docComment' => '/**
 * The list of characters that are considered "invisible" in strings.
 *
 * @var string
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 32,
        'endLine' => 32,
        'startColumn' => 5,
        'endColumn' => 494,
      ),
    ),
    'immediateProperties' => 
    array (
      'snakeCache' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'name' => 'snakeCache',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 39,
            'endLine' => 39,
            'startTokenPos' => 124,
            'startFilePos' => 1463,
            'endTokenPos' => 125,
            'endFilePos' => 1464,
          ),
        ),
        'docComment' => '/**
 * The cache of snake-cased words.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 39,
        'endLine' => 39,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'camelCache' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'name' => 'camelCache',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 46,
            'endLine' => 46,
            'startTokenPos' => 138,
            'startFilePos' => 1599,
            'endTokenPos' => 139,
            'endFilePos' => 1600,
          ),
        ),
        'docComment' => '/**
 * The cache of camel-cased words.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 46,
        'endLine' => 46,
        'startColumn' => 5,
        'endColumn' => 38,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'studlyCache' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'name' => 'studlyCache',
        'modifiers' => 18,
        'type' => NULL,
        'default' => 
        array (
          'code' => '[]',
          'attributes' => 
          array (
            'startLine' => 53,
            'endLine' => 53,
            'startTokenPos' => 152,
            'startFilePos' => 1737,
            'endTokenPos' => 153,
            'endFilePos' => 1738,
          ),
        ),
        'docComment' => '/**
 * The cache of studly-cased words.
 *
 * @var array<string, string>
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 53,
        'endLine' => 53,
        'startColumn' => 5,
        'endColumn' => 39,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'uuidFactory' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'name' => 'uuidFactory',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The callback that should be used to generate UUIDs.
 *
 * @var (callable(): \\Ramsey\\Uuid\\UuidInterface)|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 60,
        'endLine' => 60,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'ulidFactory' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'name' => 'ulidFactory',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The callback that should be used to generate ULIDs.
 *
 * @var (callable(): \\Symfony\\Component\\Uid\\Ulid)|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 67,
        'endLine' => 67,
        'startColumn' => 5,
        'endColumn' => 34,
        'isPromoted' => false,
        'declaredAtCompileTime' => true,
        'immediateVirtual' => false,
        'immediateHooks' => 
        array (
        ),
      ),
      'randomStringFactory' => 
      array (
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'name' => 'randomStringFactory',
        'modifiers' => 18,
        'type' => NULL,
        'default' => NULL,
        'docComment' => '/**
 * The callback that should be used to generate random strings.
 *
 * @var (callable(int): string)|null
 */',
        'attributes' => 
        array (
        ),
        'startLine' => 74,
        'endLine' => 74,
        'startColumn' => 5,
        'endColumn' => 42,
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
      'of' => 
      array (
        'name' => 'of',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 82,
            'endLine' => 82,
            'startColumn' => 31,
            'endColumn' => 37,
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
 * Get a new stringable object from the given string.
 *
 * @param  string  $string
 * @return \\Illuminate\\Support\\Stringable
 */',
        'startLine' => 82,
        'endLine' => 85,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'after' => 
      array (
        'name' => 'after',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 94,
            'endLine' => 94,
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
 * Return the remainder of a string after the first occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
        'startLine' => 94,
        'endLine' => 97,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'afterLast' => 
      array (
        'name' => 'afterLast',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 38,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 106,
            'endLine' => 106,
            'startColumn' => 48,
            'endColumn' => 54,
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
 * Return the remainder of a string after the last occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
        'startLine' => 106,
        'endLine' => 119,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ascii' => 
      array (
        'name' => 'ascii',
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
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'language' => 
          array (
            'name' => 'language',
            'default' => 
            array (
              'code' => '\'en\'',
              'attributes' => 
              array (
                'startLine' => 128,
                'endLine' => 128,
                'startTokenPos' => 370,
                'startFilePos' => 3603,
                'endTokenPos' => 370,
                'endFilePos' => 3606,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 128,
            'endLine' => 128,
            'startColumn' => 42,
            'endColumn' => 57,
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
 * Transliterate a UTF-8 value to ASCII.
 *
 * @param  string  $value
 * @param  string  $language
 * @return string
 */',
        'startLine' => 128,
        'endLine' => 131,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'transliterate' => 
      array (
        'name' => 'transliterate',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'unknown' => 
          array (
            'name' => 'unknown',
            'default' => 
            array (
              'code' => '\'?\'',
              'attributes' => 
              array (
                'startLine' => 141,
                'endLine' => 141,
                'startTokenPos' => 415,
                'startFilePos' => 3991,
                'endTokenPos' => 415,
                'endFilePos' => 3993,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 51,
            'endColumn' => 64,
            'parameterIndex' => 1,
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
                'startLine' => 141,
                'endLine' => 141,
                'startTokenPos' => 422,
                'startFilePos' => 4006,
                'endTokenPos' => 422,
                'endFilePos' => 4010,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 141,
            'endLine' => 141,
            'startColumn' => 67,
            'endColumn' => 81,
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
 * Transliterate a string to its closest ASCII representation.
 *
 * @param  string  $string
 * @param  string|null  $unknown
 * @param  bool|null  $strict
 * @return string
 */',
        'startLine' => 141,
        'endLine' => 144,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'before' => 
      array (
        'name' => 'before',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 35,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 153,
            'endLine' => 153,
            'startColumn' => 45,
            'endColumn' => 51,
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
 * Get the portion of a string before the first occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
        'startLine' => 153,
        'endLine' => 162,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'beforeLast' => 
      array (
        'name' => 'beforeLast',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 39,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 171,
            'endLine' => 171,
            'startColumn' => 49,
            'endColumn' => 55,
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
 * Get the portion of a string before the last occurrence of a given value.
 *
 * @param  string  $subject
 * @param  string  $search
 * @return string
 */',
        'startLine' => 171,
        'endLine' => 184,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'between' => 
      array (
        'name' => 'between',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 46,
            'endColumn' => 50,
            'parameterIndex' => 1,
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
            'startLine' => 194,
            'endLine' => 194,
            'startColumn' => 53,
            'endColumn' => 55,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the portion of a string between two given values.
 *
 * @param  string  $subject
 * @param  string  $from
 * @param  string  $to
 * @return string
 */',
        'startLine' => 194,
        'endLine' => 201,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'betweenFirst' => 
      array (
        'name' => 'betweenFirst',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 41,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
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
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 51,
            'endColumn' => 55,
            'parameterIndex' => 1,
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
            'startLine' => 211,
            'endLine' => 211,
            'startColumn' => 58,
            'endColumn' => 60,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Get the smallest possible portion of a string between two given values.
 *
 * @param  string  $subject
 * @param  string  $from
 * @param  string  $to
 * @return string
 */',
        'startLine' => 211,
        'endLine' => 218,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'camel' => 
      array (
        'name' => 'camel',
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
            'startLine' => 226,
            'endLine' => 226,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Convert a value to camel case.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 226,
        'endLine' => 233,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'charAt' => 
      array (
        'name' => 'charAt',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
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
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
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
            'startColumn' => 45,
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
 * Get the character at the specified index.
 *
 * @param  string  $subject
 * @param  int  $index
 * @return string|false
 */',
        'startLine' => 242,
        'endLine' => 251,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'chopStart' => 
      array (
        'name' => 'chopStart',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 38,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needle' => 
          array (
            'name' => 'needle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 260,
            'endLine' => 260,
            'startColumn' => 48,
            'endColumn' => 54,
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
 * Remove the given string(s) if it exists at the start of the haystack.
 *
 * @param  string  $subject
 * @param  string|array  $needle
 * @return string
 */',
        'startLine' => 260,
        'endLine' => 269,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'chopEnd' => 
      array (
        'name' => 'chopEnd',
        'parameters' => 
        array (
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
            'startColumn' => 36,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needle' => 
          array (
            'name' => 'needle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 278,
            'endLine' => 278,
            'startColumn' => 46,
            'endColumn' => 52,
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
 * Remove the given string(s) if it exists at the end of the haystack.
 *
 * @param  string  $subject
 * @param  string|array  $needle
 * @return string
 */',
        'startLine' => 278,
        'endLine' => 287,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'contains' => 
      array (
        'name' => 'contains',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 297,
            'endLine' => 297,
            'startColumn' => 37,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needles' => 
          array (
            'name' => 'needles',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 297,
            'endLine' => 297,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'ignoreCase' => 
          array (
            'name' => 'ignoreCase',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 297,
                'endLine' => 297,
                'startTokenPos' => 1081,
                'startFilePos' => 7892,
                'endTokenPos' => 1081,
                'endFilePos' => 7896,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 297,
            'endLine' => 297,
            'startColumn' => 58,
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
 * Determine if a given string contains a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return bool
 */',
        'startLine' => 297,
        'endLine' => 322,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'containsAll' => 
      array (
        'name' => 'containsAll',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needles' => 
          array (
            'name' => 'needles',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 51,
            'endColumn' => 58,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'ignoreCase' => 
          array (
            'name' => 'ignoreCase',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 332,
                'endLine' => 332,
                'startTokenPos' => 1238,
                'startFilePos' => 8731,
                'endTokenPos' => 1238,
                'endFilePos' => 8735,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 332,
            'endLine' => 332,
            'startColumn' => 61,
            'endColumn' => 79,
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
 * Determine if a given string contains all array values.
 *
 * @param  string  $haystack
 * @param  iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return bool
 */',
        'startLine' => 332,
        'endLine' => 341,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'doesntContain' => 
      array (
        'name' => 'doesntContain',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 351,
            'endLine' => 351,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needles' => 
          array (
            'name' => 'needles',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 351,
            'endLine' => 351,
            'startColumn' => 53,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'ignoreCase' => 
          array (
            'name' => 'ignoreCase',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 351,
                'endLine' => 351,
                'startTokenPos' => 1312,
                'startFilePos' => 9242,
                'endTokenPos' => 1312,
                'endFilePos' => 9246,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 351,
            'endLine' => 351,
            'startColumn' => 63,
            'endColumn' => 81,
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
 * Determine if a given string doesn\'t contain a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @param  bool  $ignoreCase
 * @return bool
 */',
        'startLine' => 351,
        'endLine' => 354,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'convertCase' => 
      array (
        'name' => 'convertCase',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'mode' => 
          array (
            'name' => 'mode',
            'default' => 
            array (
              'code' => 'MB_CASE_FOLD',
              'attributes' => 
              array (
                'startLine' => 364,
                'endLine' => 364,
                'startTokenPos' => 1358,
                'startFilePos' => 9575,
                'endTokenPos' => 1358,
                'endFilePos' => 9586,
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
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 56,
            'endColumn' => 79,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'encoding' => 
          array (
            'name' => 'encoding',
            'default' => 
            array (
              'code' => '\'UTF-8\'',
              'attributes' => 
              array (
                'startLine' => 364,
                'endLine' => 364,
                'startTokenPos' => 1368,
                'startFilePos' => 9609,
                'endTokenPos' => 1368,
                'endFilePos' => 9615,
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
                      'name' => 'string',
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
            'startLine' => 364,
            'endLine' => 364,
            'startColumn' => 82,
            'endColumn' => 108,
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
 * Convert the case of a string.
 *
 * @param  string  $string
 * @param  int  $mode
 * @param  string|null  $encoding
 * @return string
 */',
        'startLine' => 364,
        'endLine' => 367,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'deduplicate' => 
      array (
        'name' => 'deduplicate',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 40,
            'endColumn' => 53,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'characters' => 
          array (
            'name' => 'characters',
            'default' => 
            array (
              'code' => '\' \'',
              'attributes' => 
              array (
                'startLine' => 376,
                'endLine' => 376,
                'startTokenPos' => 1412,
                'startFilePos' => 10000,
                'endTokenPos' => 1412,
                'endFilePos' => 10002,
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
            'startLine' => 376,
            'endLine' => 376,
            'startColumn' => 56,
            'endColumn' => 85,
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
 * Replace consecutive instances of a given character with a single character in the given string.
 *
 * @param  string  $string
 * @param  array<string>|string  $characters
 * @return string
 */',
        'startLine' => 376,
        'endLine' => 387,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'endsWith' => 
      array (
        'name' => 'endsWith',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 396,
            'endLine' => 396,
            'startColumn' => 37,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needles' => 
          array (
            'name' => 'needles',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 396,
            'endLine' => 396,
            'startColumn' => 48,
            'endColumn' => 55,
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
 * Determine if a given string ends with a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
        'startLine' => 396,
        'endLine' => 413,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'doesntEndWith' => 
      array (
        'name' => 'doesntEndWith',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 42,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needles' => 
          array (
            'name' => 'needles',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 422,
            'endLine' => 422,
            'startColumn' => 53,
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
 * Determine if a given string doesn\'t end with a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
        'startLine' => 422,
        'endLine' => 425,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'excerpt' => 
      array (
        'name' => 'excerpt',
        'parameters' => 
        array (
          'text' => 
          array (
            'name' => 'text',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 36,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'phrase' => 
          array (
            'name' => 'phrase',
            'default' => 
            array (
              'code' => '\'\'',
              'attributes' => 
              array (
                'startLine' => 435,
                'endLine' => 435,
                'startTokenPos' => 1666,
                'startFilePos' => 11578,
                'endTokenPos' => 1666,
                'endFilePos' => 11579,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
            'startColumn' => 43,
            'endColumn' => 54,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 435,
                'endLine' => 435,
                'startTokenPos' => 1673,
                'startFilePos' => 11593,
                'endTokenPos' => 1674,
                'endFilePos' => 11594,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 435,
            'endLine' => 435,
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
 * Extracts an excerpt from text that matches the first instance of a phrase.
 *
 * @param  string  $text
 * @param  string  $phrase
 * @param  array  $options
 * @return string|null
 */',
        'startLine' => 435,
        'endLine' => 461,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'finish' => 
      array (
        'name' => 'finish',
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
            'startLine' => 470,
            'endLine' => 470,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'cap' => 
          array (
            'name' => 'cap',
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
            'startColumn' => 43,
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
 * Cap a string with a single instance of a given value.
 *
 * @param  string  $value
 * @param  string  $cap
 * @return string
 */',
        'startLine' => 470,
        'endLine' => 475,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
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
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'before' => 
          array (
            'name' => 'before',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 485,
                'endLine' => 485,
                'startTokenPos' => 2018,
                'startFilePos' => 13110,
                'endTokenPos' => 2018,
                'endFilePos' => 13113,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 485,
            'endLine' => 485,
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
 * Wrap the string with the given strings.
 *
 * @param  string  $value
 * @param  string  $before
 * @param  string|null  $after
 * @return string
 */',
        'startLine' => 485,
        'endLine' => 488,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
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
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'before' => 
          array (
            'name' => 'before',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'after' => 
          array (
            'name' => 'after',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 498,
                'endLine' => 498,
                'startTokenPos' => 2060,
                'startFilePos' => 13430,
                'endTokenPos' => 2060,
                'endFilePos' => 13433,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 498,
            'endLine' => 498,
            'startColumn' => 52,
            'endColumn' => 64,
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
 * Unwrap the string with the given strings.
 *
 * @param  string  $value
 * @param  string  $before
 * @param  string|null  $after
 * @return string
 */',
        'startLine' => 498,
        'endLine' => 509,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'is' => 
      array (
        'name' => 'is',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 31,
            'endColumn' => 38,
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
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'ignoreCase' => 
          array (
            'name' => 'ignoreCase',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 519,
                'endLine' => 519,
                'startTokenPos' => 2176,
                'startFilePos' => 14025,
                'endTokenPos' => 2176,
                'endFilePos' => 14029,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 519,
            'endLine' => 519,
            'startColumn' => 49,
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
 * Determine if a given string matches a given pattern.
 *
 * @param  string|iterable<string>  $pattern
 * @param  string  $value
 * @param  bool  $ignoreCase
 * @return bool
 */',
        'startLine' => 519,
        'endLine' => 554,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isAscii' => 
      array (
        'name' => 'isAscii',
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
            'startLine' => 562,
            'endLine' => 562,
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
 * Determine if a given string is 7 bit ASCII.
 *
 * @param  string  $value
 * @return bool
 */',
        'startLine' => 562,
        'endLine' => 565,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isJson' => 
      array (
        'name' => 'isJson',
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
            'startLine' => 575,
            'endLine' => 575,
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
 * Determine if a given value is valid JSON.
 *
 * @param  mixed  $value
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
        'startLine' => 575,
        'endLine' => 582,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isUrl' => 
      array (
        'name' => 'isUrl',
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
            'startLine' => 593,
            'endLine' => 593,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'protocols' => 
          array (
            'name' => 'protocols',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 593,
                'endLine' => 593,
                'startTokenPos' => 2478,
                'startFilePos' => 16124,
                'endTokenPos' => 2479,
                'endFilePos' => 16125,
              ),
            ),
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
            'startLine' => 593,
            'endLine' => 593,
            'startColumn' => 42,
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
 * Determine if a given value is a valid URL.
 *
 * @param  mixed  $value
 * @param  array  $protocols
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
        'startLine' => 593,
        'endLine' => 627,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isUuid' => 
      array (
        'name' => 'isUuid',
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
            'startLine' => 638,
            'endLine' => 638,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'version' => 
          array (
            'name' => 'version',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 638,
                'endLine' => 638,
                'startTokenPos' => 2580,
                'startFilePos' => 22441,
                'endTokenPos' => 2580,
                'endFilePos' => 22444,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 638,
            'endLine' => 638,
            'startColumn' => 43,
            'endColumn' => 57,
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
 * Determine if a given value is a valid UUID.
 *
 * @param  mixed  $value
 * @param  int<0, 8>|\'nil\'|\'max\'|null  $version
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
        'startLine' => 638,
        'endLine' => 671,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isUlid' => 
      array (
        'name' => 'isUlid',
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
            'startLine' => 681,
            'endLine' => 681,
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
 * Determine if a given value is a valid ULID.
 *
 * @param  mixed  $value
 * @return bool
 *
 * @phpstan-assert-if-true =non-empty-string $value
 */',
        'startLine' => 681,
        'endLine' => 688,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'kebab' => 
      array (
        'name' => 'kebab',
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
            'startLine' => 696,
            'endLine' => 696,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Convert a string to kebab case.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 696,
        'endLine' => 699,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'length' => 
      array (
        'name' => 'length',
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
            'startLine' => 708,
            'endLine' => 708,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'encoding' => 
          array (
            'name' => 'encoding',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 708,
                'endLine' => 708,
                'startTokenPos' => 2873,
                'startFilePos' => 24032,
                'endTokenPos' => 2873,
                'endFilePos' => 24035,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 708,
            'endLine' => 708,
            'startColumn' => 43,
            'endColumn' => 58,
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
 * Return the length of the given string.
 *
 * @param  string  $value
 * @param  string|null  $encoding
 * @return int
 */',
        'startLine' => 708,
        'endLine' => 711,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'limit' => 
      array (
        'name' => 'limit',
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
            'startLine' => 722,
            'endLine' => 722,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 722,
                'endLine' => 722,
                'startTokenPos' => 2908,
                'startFilePos' => 24363,
                'endTokenPos' => 2908,
                'endFilePos' => 24365,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 722,
            'endLine' => 722,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'end' => 
          array (
            'name' => 'end',
            'default' => 
            array (
              'code' => '\'...\'',
              'attributes' => 
              array (
                'startLine' => 722,
                'endLine' => 722,
                'startTokenPos' => 2915,
                'startFilePos' => 24375,
                'endTokenPos' => 2915,
                'endFilePos' => 24379,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 722,
            'endLine' => 722,
            'startColumn' => 56,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'preserveWords' => 
          array (
            'name' => 'preserveWords',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 722,
                'endLine' => 722,
                'startTokenPos' => 2922,
                'startFilePos' => 24399,
                'endTokenPos' => 2922,
                'endFilePos' => 24403,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 722,
            'endLine' => 722,
            'startColumn' => 70,
            'endColumn' => 91,
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
 * Limit the number of characters in a string.
 *
 * @param  string  $value
 * @param  int  $limit
 * @param  string  $end
 * @param  bool  $preserveWords
 * @return string
 */',
        'startLine' => 722,
        'endLine' => 741,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'lower' => 
      array (
        'name' => 'lower',
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
            'startLine' => 749,
            'endLine' => 749,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Convert the given string to lower-case.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 749,
        'endLine' => 752,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'words' => 
      array (
        'name' => 'words',
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
            'startLine' => 762,
            'endLine' => 762,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'words' => 
          array (
            'name' => 'words',
            'default' => 
            array (
              'code' => '100',
              'attributes' => 
              array (
                'startLine' => 762,
                'endLine' => 762,
                'startTokenPos' => 3132,
                'startFilePos' => 25401,
                'endTokenPos' => 3132,
                'endFilePos' => 25403,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 762,
            'endLine' => 762,
            'startColumn' => 42,
            'endColumn' => 53,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'end' => 
          array (
            'name' => 'end',
            'default' => 
            array (
              'code' => '\'...\'',
              'attributes' => 
              array (
                'startLine' => 762,
                'endLine' => 762,
                'startTokenPos' => 3139,
                'startFilePos' => 25413,
                'endTokenPos' => 3139,
                'endFilePos' => 25417,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 762,
            'endLine' => 762,
            'startColumn' => 56,
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
 * Limit the number of words in a string.
 *
 * @param  string  $value
 * @param  int  $words
 * @param  string  $end
 * @return string
 */',
        'startLine' => 762,
        'endLine' => 771,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'markdown' => 
      array (
        'name' => 'markdown',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 781,
            'endLine' => 781,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 781,
                'endLine' => 781,
                'startTokenPos' => 3238,
                'startFilePos' => 25937,
                'endTokenPos' => 3239,
                'endFilePos' => 25938,
              ),
            ),
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
            'startLine' => 781,
            'endLine' => 781,
            'startColumn' => 46,
            'endColumn' => 64,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extensions' => 
          array (
            'name' => 'extensions',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 781,
                'endLine' => 781,
                'startTokenPos' => 3248,
                'startFilePos' => 25961,
                'endTokenPos' => 3249,
                'endFilePos' => 25962,
              ),
            ),
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
            'startLine' => 781,
            'endLine' => 781,
            'startColumn' => 67,
            'endColumn' => 88,
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
 * Converts GitHub flavored Markdown into HTML.
 *
 * @param  string  $string
 * @param  array  $options
 * @param  array  $extensions
 * @return string
 */',
        'startLine' => 781,
        'endLine' => 792,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'inlineMarkdown' => 
      array (
        'name' => 'inlineMarkdown',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 802,
            'endLine' => 802,
            'startColumn' => 43,
            'endColumn' => 49,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'options' => 
          array (
            'name' => 'options',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 802,
                'endLine' => 802,
                'startTokenPos' => 3332,
                'startFilePos' => 26516,
                'endTokenPos' => 3333,
                'endFilePos' => 26517,
              ),
            ),
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
            'startLine' => 802,
            'endLine' => 802,
            'startColumn' => 52,
            'endColumn' => 70,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'extensions' => 
          array (
            'name' => 'extensions',
            'default' => 
            array (
              'code' => '[]',
              'attributes' => 
              array (
                'startLine' => 802,
                'endLine' => 802,
                'startTokenPos' => 3342,
                'startFilePos' => 26540,
                'endTokenPos' => 3343,
                'endFilePos' => 26541,
              ),
            ),
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
            'startLine' => 802,
            'endLine' => 802,
            'startColumn' => 73,
            'endColumn' => 94,
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
 * Converts inline Markdown into HTML.
 *
 * @param  string  $string
 * @param  array  $options
 * @param  array  $extensions
 * @return string
 */',
        'startLine' => 802,
        'endLine' => 816,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'mask' => 
      array (
        'name' => 'mask',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'character' => 
          array (
            'name' => 'character',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 42,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'index' => 
          array (
            'name' => 'index',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 54,
            'endColumn' => 59,
            'parameterIndex' => 2,
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
                'startLine' => 828,
                'endLine' => 828,
                'startTokenPos' => 3455,
                'startFilePos' => 27306,
                'endTokenPos' => 3455,
                'endFilePos' => 27309,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 62,
            'endColumn' => 75,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'encoding' => 
          array (
            'name' => 'encoding',
            'default' => 
            array (
              'code' => '\'UTF-8\'',
              'attributes' => 
              array (
                'startLine' => 828,
                'endLine' => 828,
                'startTokenPos' => 3462,
                'startFilePos' => 27324,
                'endTokenPos' => 3462,
                'endFilePos' => 27330,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 828,
            'endLine' => 828,
            'startColumn' => 78,
            'endColumn' => 96,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Masks a portion of a string with a repeated character.
 *
 * @param  string  $string
 * @param  string  $character
 * @param  int  $index
 * @param  int|null  $length
 * @param  string  $encoding
 * @return string
 */',
        'startLine' => 828,
        'endLine' => 852,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'match' => 
      array (
        'name' => 'match',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 861,
            'endLine' => 861,
            'startColumn' => 34,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 861,
            'endLine' => 861,
            'startColumn' => 44,
            'endColumn' => 51,
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
 * Get the string matching the given pattern.
 *
 * @param  string  $pattern
 * @param  string  $subject
 * @return string
 */',
        'startLine' => 861,
        'endLine' => 870,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'isMatch' => 
      array (
        'name' => 'isMatch',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 879,
            'endLine' => 879,
            'startColumn' => 36,
            'endColumn' => 43,
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
            'startLine' => 879,
            'endLine' => 879,
            'startColumn' => 46,
            'endColumn' => 51,
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
 * Determine if a given string matches a given pattern.
 *
 * @param  string|iterable<string>  $pattern
 * @param  string  $value
 * @return bool
 */',
        'startLine' => 879,
        'endLine' => 896,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'matchAll' => 
      array (
        'name' => 'matchAll',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 37,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 905,
            'endLine' => 905,
            'startColumn' => 47,
            'endColumn' => 54,
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
 * Get the string matching the given pattern.
 *
 * @param  string  $pattern
 * @param  string  $subject
 * @return \\Illuminate\\Support\\Collection
 */',
        'startLine' => 905,
        'endLine' => 914,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'numbers' => 
      array (
        'name' => 'numbers',
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
            'startLine' => 922,
            'endLine' => 922,
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
 * Remove all non-numeric characters from a string.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 922,
        'endLine' => 925,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'padBoth' => 
      array (
        'name' => 'padBoth',
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
            'startLine' => 935,
            'endLine' => 935,
            'startColumn' => 36,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 935,
            'endLine' => 935,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'pad' => 
          array (
            'name' => 'pad',
            'default' => 
            array (
              'code' => '\' \'',
              'attributes' => 
              array (
                'startLine' => 935,
                'endLine' => 935,
                'startTokenPos' => 3956,
                'startFilePos' => 29899,
                'endTokenPos' => 3956,
                'endFilePos' => 29901,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 935,
            'endLine' => 935,
            'startColumn' => 53,
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
 * Pad both sides of a string with another.
 *
 * @param  string  $value
 * @param  int  $length
 * @param  string  $pad
 * @return string
 */',
        'startLine' => 935,
        'endLine' => 938,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'padLeft' => 
      array (
        'name' => 'padLeft',
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
            'startLine' => 948,
            'endLine' => 948,
            'startColumn' => 36,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 948,
            'endLine' => 948,
            'startColumn' => 44,
            'endColumn' => 50,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'pad' => 
          array (
            'name' => 'pad',
            'default' => 
            array (
              'code' => '\' \'',
              'attributes' => 
              array (
                'startLine' => 948,
                'endLine' => 948,
                'startTokenPos' => 4000,
                'startFilePos' => 30222,
                'endTokenPos' => 4000,
                'endFilePos' => 30224,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 948,
            'endLine' => 948,
            'startColumn' => 53,
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
 * Pad the left side of a string with another.
 *
 * @param  string  $value
 * @param  int  $length
 * @param  string  $pad
 * @return string
 */',
        'startLine' => 948,
        'endLine' => 951,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'padRight' => 
      array (
        'name' => 'padRight',
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
            'startLine' => 961,
            'endLine' => 961,
            'startColumn' => 37,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 961,
            'endLine' => 961,
            'startColumn' => 45,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'pad' => 
          array (
            'name' => 'pad',
            'default' => 
            array (
              'code' => '\' \'',
              'attributes' => 
              array (
                'startLine' => 961,
                'endLine' => 961,
                'startTokenPos' => 4044,
                'startFilePos' => 30547,
                'endTokenPos' => 4044,
                'endFilePos' => 30549,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 961,
            'endLine' => 961,
            'startColumn' => 54,
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
 * Pad the right side of a string with another.
 *
 * @param  string  $value
 * @param  int  $length
 * @param  string  $pad
 * @return string
 */',
        'startLine' => 961,
        'endLine' => 964,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'parseCallback' => 
      array (
        'name' => 'parseCallback',
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
            'startLine' => 973,
            'endLine' => 973,
            'startColumn' => 42,
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
                'startLine' => 973,
                'endLine' => 973,
                'startTokenPos' => 4085,
                'startFilePos' => 30893,
                'endTokenPos' => 4085,
                'endFilePos' => 30896,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 973,
            'endLine' => 973,
            'startColumn' => 53,
            'endColumn' => 67,
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
 * Parse a Class[@]method style callback into class and method.
 *
 * @param  string  $callback
 * @param  string|null  $default
 * @return array<int, string|null>
 */',
        'startLine' => 973,
        'endLine' => 987,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'plural' => 
      array (
        'name' => 'plural',
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
            'startLine' => 997,
            'endLine' => 997,
            'startColumn' => 35,
            'endColumn' => 40,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'count' => 
          array (
            'name' => 'count',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 997,
                'endLine' => 997,
                'startTokenPos' => 4223,
                'startFilePos' => 31607,
                'endTokenPos' => 4223,
                'endFilePos' => 31607,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 997,
            'endLine' => 997,
            'startColumn' => 43,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'prependCount' => 
          array (
            'name' => 'prependCount',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 997,
                'endLine' => 997,
                'startTokenPos' => 4230,
                'startFilePos' => 31626,
                'endTokenPos' => 4230,
                'endFilePos' => 31630,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 997,
            'endLine' => 997,
            'startColumn' => 55,
            'endColumn' => 75,
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
 * Get the plural form of an English word.
 *
 * @param  string  $value
 * @param  int|array|\\Countable  $count
 * @param  bool  $prependCount
 * @return string
 */',
        'startLine' => 997,
        'endLine' => 1004,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'pluralStudly' => 
      array (
        'name' => 'pluralStudly',
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
            'startLine' => 1013,
            'endLine' => 1013,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'count' => 
          array (
            'name' => 'count',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 1013,
                'endLine' => 1013,
                'startTokenPos' => 4309,
                'startFilePos' => 32077,
                'endTokenPos' => 4309,
                'endFilePos' => 32077,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1013,
            'endLine' => 1013,
            'startColumn' => 49,
            'endColumn' => 58,
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
 * Pluralize the last word of an English, studly caps case string.
 *
 * @param  string  $value
 * @param  int|array|\\Countable  $count
 * @return string
 */',
        'startLine' => 1013,
        'endLine' => 1020,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'pluralPascal' => 
      array (
        'name' => 'pluralPascal',
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
            'startLine' => 1029,
            'endLine' => 1029,
            'startColumn' => 41,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'count' => 
          array (
            'name' => 'count',
            'default' => 
            array (
              'code' => '2',
              'attributes' => 
              array (
                'startLine' => 1029,
                'endLine' => 1029,
                'startTokenPos' => 4384,
                'startFilePos' => 32535,
                'endTokenPos' => 4384,
                'endFilePos' => 32535,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1029,
            'endLine' => 1029,
            'startColumn' => 49,
            'endColumn' => 58,
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
 * Pluralize the last word of an English, Pascal caps case string.
 *
 * @param  string  $value
 * @param  int|array|\\Countable  $count
 * @return string
 */',
        'startLine' => 1029,
        'endLine' => 1032,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'password' => 
      array (
        'name' => 'password',
        'parameters' => 
        array (
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => '32',
              'attributes' => 
              array (
                'startLine' => 1044,
                'endLine' => 1044,
                'startTokenPos' => 4418,
                'startFilePos' => 32885,
                'endTokenPos' => 4418,
                'endFilePos' => 32886,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1044,
            'endLine' => 1044,
            'startColumn' => 37,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => true,
          ),
          'letters' => 
          array (
            'name' => 'letters',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1044,
                'endLine' => 1044,
                'startTokenPos' => 4425,
                'startFilePos' => 32900,
                'endTokenPos' => 4425,
                'endFilePos' => 32903,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1044,
            'endLine' => 1044,
            'startColumn' => 51,
            'endColumn' => 65,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'numbers' => 
          array (
            'name' => 'numbers',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1044,
                'endLine' => 1044,
                'startTokenPos' => 4432,
                'startFilePos' => 32917,
                'endTokenPos' => 4432,
                'endFilePos' => 32920,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1044,
            'endLine' => 1044,
            'startColumn' => 68,
            'endColumn' => 82,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'symbols' => 
          array (
            'name' => 'symbols',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1044,
                'endLine' => 1044,
                'startTokenPos' => 4439,
                'startFilePos' => 32934,
                'endTokenPos' => 4439,
                'endFilePos' => 32937,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1044,
            'endLine' => 1044,
            'startColumn' => 85,
            'endColumn' => 99,
            'parameterIndex' => 3,
            'isOptional' => true,
          ),
          'spaces' => 
          array (
            'name' => 'spaces',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1044,
                'endLine' => 1044,
                'startTokenPos' => 4446,
                'startFilePos' => 32950,
                'endTokenPos' => 4446,
                'endFilePos' => 32954,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1044,
            'endLine' => 1044,
            'startColumn' => 102,
            'endColumn' => 116,
            'parameterIndex' => 4,
            'isOptional' => true,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generate a random, secure password.
 *
 * @param  int  $length
 * @param  bool  $letters
 * @param  bool  $numbers
 * @param  bool  $symbols
 * @param  bool  $spaces
 * @return string
 */',
        'startLine' => 1044,
        'endLine' => 1075,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'position' => 
      array (
        'name' => 'position',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1086,
            'endLine' => 1086,
            'startColumn' => 37,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needle' => 
          array (
            'name' => 'needle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1086,
            'endLine' => 1086,
            'startColumn' => 48,
            'endColumn' => 54,
            'parameterIndex' => 1,
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
                'startLine' => 1086,
                'endLine' => 1086,
                'startTokenPos' => 4974,
                'startFilePos' => 34608,
                'endTokenPos' => 4974,
                'endFilePos' => 34608,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1086,
            'endLine' => 1086,
            'startColumn' => 57,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'encoding' => 
          array (
            'name' => 'encoding',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1086,
                'endLine' => 1086,
                'startTokenPos' => 4981,
                'startFilePos' => 34623,
                'endTokenPos' => 4981,
                'endFilePos' => 34626,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1086,
            'endLine' => 1086,
            'startColumn' => 70,
            'endColumn' => 85,
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
 * Find the multi-byte safe position of the first occurrence of a given substring in a string.
 *
 * @param  string  $haystack
 * @param  string  $needle
 * @param  int  $offset
 * @param  string|null  $encoding
 * @return int|false
 */',
        'startLine' => 1086,
        'endLine' => 1089,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'random' => 
      array (
        'name' => 'random',
        'parameters' => 
        array (
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => '16',
              'attributes' => 
              array (
                'startLine' => 1097,
                'endLine' => 1097,
                'startTokenPos' => 5021,
                'startFilePos' => 34894,
                'endTokenPos' => 5021,
                'endFilePos' => 34895,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1097,
            'endLine' => 1097,
            'startColumn' => 35,
            'endColumn' => 46,
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
 * Generate a more truly "random" alpha-numeric string.
 *
 * @param  int  $length
 * @return string
 */',
        'startLine' => 1097,
        'endLine' => 1114,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createRandomStringsUsing' => 
      array (
        'name' => 'createRandomStringsUsing',
        'parameters' => 
        array (
          'factory' => 
          array (
            'name' => 'factory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1122,
                'endLine' => 1122,
                'startTokenPos' => 5181,
                'startFilePos' => 35620,
                'endTokenPos' => 5181,
                'endFilePos' => 35623,
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
            'startLine' => 1122,
            'endLine' => 1122,
            'startColumn' => 53,
            'endColumn' => 77,
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
 * Set the callable that will be used to generate random strings.
 *
 * @param  (callable(int): string)|null  $factory
 * @return void
 */',
        'startLine' => 1122,
        'endLine' => 1125,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createRandomStringsUsingSequence' => 
      array (
        'name' => 'createRandomStringsUsingSequence',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
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
            'startLine' => 1134,
            'endLine' => 1134,
            'startColumn' => 61,
            'endColumn' => 75,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'whenMissing' => 
          array (
            'name' => 'whenMissing',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1134,
                'endLine' => 1134,
                'startTokenPos' => 5216,
                'startFilePos' => 35968,
                'endTokenPos' => 5216,
                'endFilePos' => 35971,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1134,
            'endLine' => 1134,
            'startColumn' => 78,
            'endColumn' => 96,
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
 * Set the sequence that will be used to generate random strings.
 *
 * @param  array  $sequence
 * @param  callable|null  $whenMissing
 * @return void
 */',
        'startLine' => 1134,
        'endLine' => 1159,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createRandomStringsNormally' => 
      array (
        'name' => 'createRandomStringsNormally',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that random strings should be created normally and not using a custom factory.
 *
 * @return void
 */',
        'startLine' => 1166,
        'endLine' => 1169,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'repeat' => 
      array (
        'name' => 'repeat',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
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
            'startLine' => 1178,
            'endLine' => 1178,
            'startColumn' => 35,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'times' => 
          array (
            'name' => 'times',
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
            'startLine' => 1178,
            'endLine' => 1178,
            'startColumn' => 51,
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
 * Repeat the given string.
 *
 * @param  string  $string
 * @param  int  $times
 * @return string
 */',
        'startLine' => 1178,
        'endLine' => 1181,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'replaceArray' => 
      array (
        'name' => 'replaceArray',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1191,
            'endLine' => 1191,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1191,
            'endLine' => 1191,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1191,
            'endLine' => 1191,
            'startColumn' => 60,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Replace a given value in the string sequentially with an array.
 *
 * @param  string  $search
 * @param  iterable<string>  $replace
 * @param  string  $subject
 * @return string
 */',
        'startLine' => 1191,
        'endLine' => 1206,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'toStringOr' => 
      array (
        'name' => 'toStringOr',
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
            'startLine' => 1215,
            'endLine' => 1215,
            'startColumn' => 40,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'fallback' => 
          array (
            'name' => 'fallback',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1215,
            'endLine' => 1215,
            'startColumn' => 48,
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
 * Convert the given value to a string or return the given fallback on failure.
 *
 * @param  mixed  $value
 * @param  string  $fallback
 * @return string
 */',
        'startLine' => 1215,
        'endLine' => 1222,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 20,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'replace' => 
      array (
        'name' => 'replace',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1233,
            'endLine' => 1233,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1233,
            'endLine' => 1233,
            'startColumn' => 45,
            'endColumn' => 52,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1233,
            'endLine' => 1233,
            'startColumn' => 55,
            'endColumn' => 62,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1233,
                'endLine' => 1233,
                'startTokenPos' => 5610,
                'startFilePos' => 38575,
                'endTokenPos' => 5610,
                'endFilePos' => 38578,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1233,
            'endLine' => 1233,
            'startColumn' => 65,
            'endColumn' => 85,
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
 * Replace the given value in the given string.
 *
 * @param  string|iterable<string>  $search
 * @param  string|iterable<string>  $replace
 * @param  string|iterable<string>  $subject
 * @param  bool  $caseSensitive
 * @return ($subject is string ? string : string[])
 */',
        'startLine' => 1233,
        'endLine' => 1250,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'replaceFirst' => 
      array (
        'name' => 'replaceFirst',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1260,
            'endLine' => 1260,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1260,
            'endLine' => 1260,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1260,
            'endLine' => 1260,
            'startColumn' => 60,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Replace the first occurrence of a given value in the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @param  string  $subject
 * @return string
 */',
        'startLine' => 1260,
        'endLine' => 1275,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'replaceStart' => 
      array (
        'name' => 'replaceStart',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1285,
            'endLine' => 1285,
            'startColumn' => 41,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1285,
            'endLine' => 1285,
            'startColumn' => 50,
            'endColumn' => 57,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1285,
            'endLine' => 1285,
            'startColumn' => 60,
            'endColumn' => 67,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Replace the first occurrence of the given value if it appears at the start of the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @param  string  $subject
 * @return string
 */',
        'startLine' => 1285,
        'endLine' => 1298,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'replaceLast' => 
      array (
        'name' => 'replaceLast',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1308,
            'endLine' => 1308,
            'startColumn' => 40,
            'endColumn' => 46,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1308,
            'endLine' => 1308,
            'startColumn' => 49,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1308,
            'endLine' => 1308,
            'startColumn' => 59,
            'endColumn' => 66,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Replace the last occurrence of a given value in the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @param  string  $subject
 * @return string
 */',
        'startLine' => 1308,
        'endLine' => 1323,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'replaceEnd' => 
      array (
        'name' => 'replaceEnd',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1333,
            'endLine' => 1333,
            'startColumn' => 39,
            'endColumn' => 45,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1333,
            'endLine' => 1333,
            'startColumn' => 48,
            'endColumn' => 55,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1333,
            'endLine' => 1333,
            'startColumn' => 58,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Replace the last occurrence of a given value if it appears at the end of the string.
 *
 * @param  string  $search
 * @param  string  $replace
 * @param  string  $subject
 * @return string
 */',
        'startLine' => 1333,
        'endLine' => 1346,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'replaceMatches' => 
      array (
        'name' => 'replaceMatches',
        'parameters' => 
        array (
          'pattern' => 
          array (
            'name' => 'pattern',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1357,
            'endLine' => 1357,
            'startColumn' => 43,
            'endColumn' => 50,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1357,
            'endLine' => 1357,
            'startColumn' => 53,
            'endColumn' => 60,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1357,
            'endLine' => 1357,
            'startColumn' => 63,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
            'default' => 
            array (
              'code' => '-1',
              'attributes' => 
              array (
                'startLine' => 1357,
                'endLine' => 1357,
                'startTokenPos' => 6135,
                'startFilePos' => 41756,
                'endTokenPos' => 6136,
                'endFilePos' => 41757,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1357,
            'endLine' => 1357,
            'startColumn' => 73,
            'endColumn' => 83,
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
 * Replace the patterns matching the given regular expression.
 *
 * @param  array|string  $pattern
 * @param  \\Closure|string[]|string  $replace
 * @param  array|string  $subject
 * @param  int  $limit
 * @return string|string[]|null
 */',
        'startLine' => 1357,
        'endLine' => 1364,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'remove' => 
      array (
        'name' => 'remove',
        'parameters' => 
        array (
          'search' => 
          array (
            'name' => 'search',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1374,
            'endLine' => 1374,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1374,
            'endLine' => 1374,
            'startColumn' => 44,
            'endColumn' => 51,
            'parameterIndex' => 1,
            'isOptional' => false,
          ),
          'caseSensitive' => 
          array (
            'name' => 'caseSensitive',
            'default' => 
            array (
              'code' => 'true',
              'attributes' => 
              array (
                'startLine' => 1374,
                'endLine' => 1374,
                'startTokenPos' => 6211,
                'startFilePos' => 42287,
                'endTokenPos' => 6211,
                'endFilePos' => 42290,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1374,
            'endLine' => 1374,
            'startColumn' => 54,
            'endColumn' => 74,
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
 * Remove any occurrence of the given string in the subject.
 *
 * @param  string|iterable<string>  $search
 * @param  string|iterable<string>  $subject
 * @param  bool  $caseSensitive
 * @return string
 */',
        'startLine' => 1374,
        'endLine' => 1383,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'reverse' => 
      array (
        'name' => 'reverse',
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
            'startLine' => 1391,
            'endLine' => 1391,
            'startColumn' => 36,
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
 * Reverse the given string.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1391,
        'endLine' => 1394,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'start' => 
      array (
        'name' => 'start',
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
            'startLine' => 1403,
            'endLine' => 1403,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'prefix' => 
          array (
            'name' => 'prefix',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1403,
            'endLine' => 1403,
            'startColumn' => 42,
            'endColumn' => 48,
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
 * Begin a string with a single instance of a given value.
 *
 * @param  string  $value
 * @param  string  $prefix
 * @return string
 */',
        'startLine' => 1403,
        'endLine' => 1408,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'upper' => 
      array (
        'name' => 'upper',
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
            'startLine' => 1416,
            'endLine' => 1416,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Convert the given string to upper-case.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1416,
        'endLine' => 1419,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'title' => 
      array (
        'name' => 'title',
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
            'startLine' => 1427,
            'endLine' => 1427,
            'startColumn' => 34,
            'endColumn' => 39,
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
 * Convert the given string to proper case.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1427,
        'endLine' => 1430,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'headline' => 
      array (
        'name' => 'headline',
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
            'startLine' => 1438,
            'endLine' => 1438,
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
 * Convert the given string to proper case for each word.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1438,
        'endLine' => 1449,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'apa' => 
      array (
        'name' => 'apa',
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
            'startLine' => 1459,
            'endLine' => 1459,
            'startColumn' => 32,
            'endColumn' => 37,
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
 * Convert the given string to APA-style title case.
 *
 * See: https://apastyle.apa.org/style-grammar-guidelines/capitalization/title-case
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1459,
        'endLine' => 1501,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'singular' => 
      array (
        'name' => 'singular',
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
            'startLine' => 1509,
            'endLine' => 1509,
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
 * Get the singular form of an English word.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1509,
        'endLine' => 1512,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'slug' => 
      array (
        'name' => 'slug',
        'parameters' => 
        array (
          'title' => 
          array (
            'name' => 'title',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1523,
            'endLine' => 1523,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'separator' => 
          array (
            'name' => 'separator',
            'default' => 
            array (
              'code' => '\'-\'',
              'attributes' => 
              array (
                'startLine' => 1523,
                'endLine' => 1523,
                'startTokenPos' => 7086,
                'startFilePos' => 46557,
                'endTokenPos' => 7086,
                'endFilePos' => 46559,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1523,
            'endLine' => 1523,
            'startColumn' => 41,
            'endColumn' => 56,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'language' => 
          array (
            'name' => 'language',
            'default' => 
            array (
              'code' => '\'en\'',
              'attributes' => 
              array (
                'startLine' => 1523,
                'endLine' => 1523,
                'startTokenPos' => 7093,
                'startFilePos' => 46574,
                'endTokenPos' => 7093,
                'endFilePos' => 46577,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1523,
            'endLine' => 1523,
            'startColumn' => 59,
            'endColumn' => 74,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'dictionary' => 
          array (
            'name' => 'dictionary',
            'default' => 
            array (
              'code' => '[\'@\' => \'at\']',
              'attributes' => 
              array (
                'startLine' => 1523,
                'endLine' => 1523,
                'startTokenPos' => 7100,
                'startFilePos' => 46594,
                'endTokenPos' => 7106,
                'endFilePos' => 46606,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1523,
            'endLine' => 1523,
            'startColumn' => 77,
            'endColumn' => 103,
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
 * Generate a URL friendly "slug" from a given string.
 *
 * @param  string  $title
 * @param  string  $separator
 * @param  string|null  $language
 * @param  array<string, string>  $dictionary
 * @return string
 */',
        'startLine' => 1523,
        'endLine' => 1546,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'snake' => 
      array (
        'name' => 'snake',
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
            'startLine' => 1555,
            'endLine' => 1555,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'delimiter' => 
          array (
            'name' => 'delimiter',
            'default' => 
            array (
              'code' => '\'_\'',
              'attributes' => 
              array (
                'startLine' => 1555,
                'endLine' => 1555,
                'startTokenPos' => 7319,
                'startFilePos' => 47745,
                'endTokenPos' => 7319,
                'endFilePos' => 47747,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1555,
            'endLine' => 1555,
            'startColumn' => 42,
            'endColumn' => 57,
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
 * Convert a string to snake case.
 *
 * @param  string  $value
 * @param  string  $delimiter
 * @return string
 */',
        'startLine' => 1555,
        'endLine' => 1570,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'trim' => 
      array (
        'name' => 'trim',
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
            'startLine' => 1579,
            'endLine' => 1579,
            'startColumn' => 33,
            'endColumn' => 38,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'charlist' => 
          array (
            'name' => 'charlist',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1579,
                'endLine' => 1579,
                'startTokenPos' => 7458,
                'startFilePos' => 48410,
                'endTokenPos' => 7458,
                'endFilePos' => 48413,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1579,
            'endLine' => 1579,
            'startColumn' => 41,
            'endColumn' => 56,
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
 * Remove all whitespace from both ends of a string.
 *
 * @param  string  $value
 * @param  string|null  $charlist
 * @return string
 */',
        'startLine' => 1579,
        'endLine' => 1588,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ltrim' => 
      array (
        'name' => 'ltrim',
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
            'startLine' => 1597,
            'endLine' => 1597,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'charlist' => 
          array (
            'name' => 'charlist',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1597,
                'endLine' => 1597,
                'startTokenPos' => 7551,
                'startFilePos' => 48981,
                'endTokenPos' => 7551,
                'endFilePos' => 48984,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1597,
            'endLine' => 1597,
            'startColumn' => 42,
            'endColumn' => 57,
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
 * Remove all whitespace from the beginning of a string.
 *
 * @param  string  $value
 * @param  string|null  $charlist
 * @return string
 */',
        'startLine' => 1597,
        'endLine' => 1606,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'rtrim' => 
      array (
        'name' => 'rtrim',
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
            'startLine' => 1615,
            'endLine' => 1615,
            'startColumn' => 34,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'charlist' => 
          array (
            'name' => 'charlist',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1615,
                'endLine' => 1615,
                'startTokenPos' => 7636,
                'startFilePos' => 49490,
                'endTokenPos' => 7636,
                'endFilePos' => 49493,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1615,
            'endLine' => 1615,
            'startColumn' => 42,
            'endColumn' => 57,
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
 * Remove all whitespace from the end of a string.
 *
 * @param  string  $value
 * @param  string|null  $charlist
 * @return string
 */',
        'startLine' => 1615,
        'endLine' => 1624,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'squish' => 
      array (
        'name' => 'squish',
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
            'startLine' => 1632,
            'endLine' => 1632,
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
 * Remove all "extra" blank space from the given string.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1632,
        'endLine' => 1635,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'startsWith' => 
      array (
        'name' => 'startsWith',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1644,
            'endLine' => 1644,
            'startColumn' => 39,
            'endColumn' => 47,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needles' => 
          array (
            'name' => 'needles',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1644,
            'endLine' => 1644,
            'startColumn' => 50,
            'endColumn' => 57,
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
 * Determine if a given string starts with a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
        'startLine' => 1644,
        'endLine' => 1661,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'doesntStartWith' => 
      array (
        'name' => 'doesntStartWith',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1670,
            'endLine' => 1670,
            'startColumn' => 44,
            'endColumn' => 52,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needles' => 
          array (
            'name' => 'needles',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1670,
            'endLine' => 1670,
            'startColumn' => 55,
            'endColumn' => 62,
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
 * Determine if a given string doesn\'t start with a given substring.
 *
 * @param  string  $haystack
 * @param  string|iterable<string>  $needles
 * @return bool
 */',
        'startLine' => 1670,
        'endLine' => 1673,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'studly' => 
      array (
        'name' => 'studly',
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
            'startLine' => 1681,
            'endLine' => 1681,
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
 * Convert a value to studly caps case.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1681,
        'endLine' => 1694,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'pascal' => 
      array (
        'name' => 'pascal',
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
            'startLine' => 1702,
            'endLine' => 1702,
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
 * Convert a value to Pascal case.
 *
 * @param  string  $value
 * @return string
 */',
        'startLine' => 1702,
        'endLine' => 1705,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'substr' => 
      array (
        'name' => 'substr',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1716,
            'endLine' => 1716,
            'startColumn' => 35,
            'endColumn' => 41,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'start' => 
          array (
            'name' => 'start',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1716,
            'endLine' => 1716,
            'startColumn' => 44,
            'endColumn' => 49,
            'parameterIndex' => 1,
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
                'startLine' => 1716,
                'endLine' => 1716,
                'startTokenPos' => 8058,
                'startFilePos' => 52060,
                'endTokenPos' => 8058,
                'endFilePos' => 52063,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1716,
            'endLine' => 1716,
            'startColumn' => 52,
            'endColumn' => 65,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'encoding' => 
          array (
            'name' => 'encoding',
            'default' => 
            array (
              'code' => '\'UTF-8\'',
              'attributes' => 
              array (
                'startLine' => 1716,
                'endLine' => 1716,
                'startTokenPos' => 8065,
                'startFilePos' => 52078,
                'endTokenPos' => 8065,
                'endFilePos' => 52084,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1716,
            'endLine' => 1716,
            'startColumn' => 68,
            'endColumn' => 86,
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
 * Returns the portion of the string specified by the start and length parameters.
 *
 * @param  string  $string
 * @param  int  $start
 * @param  int|null  $length
 * @param  string  $encoding
 * @return string
 */',
        'startLine' => 1716,
        'endLine' => 1719,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'substrCount' => 
      array (
        'name' => 'substrCount',
        'parameters' => 
        array (
          'haystack' => 
          array (
            'name' => 'haystack',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1730,
            'endLine' => 1730,
            'startColumn' => 40,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'needle' => 
          array (
            'name' => 'needle',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1730,
            'endLine' => 1730,
            'startColumn' => 51,
            'endColumn' => 57,
            'parameterIndex' => 1,
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
                'startLine' => 1730,
                'endLine' => 1730,
                'startTokenPos' => 8109,
                'startFilePos' => 52451,
                'endTokenPos' => 8109,
                'endFilePos' => 52451,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1730,
            'endLine' => 1730,
            'startColumn' => 60,
            'endColumn' => 70,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1730,
                'endLine' => 1730,
                'startTokenPos' => 8116,
                'startFilePos' => 52464,
                'endTokenPos' => 8116,
                'endFilePos' => 52467,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1730,
            'endLine' => 1730,
            'startColumn' => 73,
            'endColumn' => 86,
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
 * Returns the number of substring occurrences.
 *
 * @param  string  $haystack
 * @param  string  $needle
 * @param  int  $offset
 * @param  int|null  $length
 * @return int
 */',
        'startLine' => 1730,
        'endLine' => 1737,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'substrReplace' => 
      array (
        'name' => 'substrReplace',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1748,
            'endLine' => 1748,
            'startColumn' => 42,
            'endColumn' => 48,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'replace' => 
          array (
            'name' => 'replace',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1748,
            'endLine' => 1748,
            'startColumn' => 51,
            'endColumn' => 58,
            'parameterIndex' => 1,
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
                'startLine' => 1748,
                'endLine' => 1748,
                'startTokenPos' => 8189,
                'startFilePos' => 52985,
                'endTokenPos' => 8189,
                'endFilePos' => 52985,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1748,
            'endLine' => 1748,
            'startColumn' => 61,
            'endColumn' => 71,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'length' => 
          array (
            'name' => 'length',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1748,
                'endLine' => 1748,
                'startTokenPos' => 8196,
                'startFilePos' => 52998,
                'endTokenPos' => 8196,
                'endFilePos' => 53001,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1748,
            'endLine' => 1748,
            'startColumn' => 74,
            'endColumn' => 87,
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
 * Replace text within a portion of a string.
 *
 * @param  string|string[]  $string
 * @param  string|string[]  $replace
 * @param  int|int[]  $offset
 * @param  int|int[]|null  $length
 * @return string|string[]
 */',
        'startLine' => 1748,
        'endLine' => 1757,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'swap' => 
      array (
        'name' => 'swap',
        'parameters' => 
        array (
          'map' => 
          array (
            'name' => 'map',
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
            'startLine' => 1766,
            'endLine' => 1766,
            'startColumn' => 33,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'subject' => 
          array (
            'name' => 'subject',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1766,
            'endLine' => 1766,
            'startColumn' => 45,
            'endColumn' => 52,
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
 * Swap multiple keywords in a string with other keywords.
 *
 * @param  array  $map
 * @param  string  $subject
 * @return string
 */',
        'startLine' => 1766,
        'endLine' => 1769,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'take' => 
      array (
        'name' => 'take',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1778,
            'endLine' => 1778,
            'startColumn' => 33,
            'endColumn' => 39,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'limit' => 
          array (
            'name' => 'limit',
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
            'startLine' => 1778,
            'endLine' => 1778,
            'startColumn' => 42,
            'endColumn' => 51,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Take the first or last {$limit} characters of a string.
 *
 * @param  string  $string
 * @param  int  $limit
 * @return string
 */',
        'startLine' => 1778,
        'endLine' => 1785,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'toBase64' => 
      array (
        'name' => 'toBase64',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1793,
            'endLine' => 1793,
            'startColumn' => 37,
            'endColumn' => 43,
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
            'name' => 'string',
            'isIdentifier' => true,
          ),
        ),
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Convert the given string to Base64 encoding.
 *
 * @param  string  $string
 * @return string
 */',
        'startLine' => 1793,
        'endLine' => 1796,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'fromBase64' => 
      array (
        'name' => 'fromBase64',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1805,
            'endLine' => 1805,
            'startColumn' => 39,
            'endColumn' => 45,
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
                'startLine' => 1805,
                'endLine' => 1805,
                'startTokenPos' => 8405,
                'startFilePos' => 54327,
                'endTokenPos' => 8405,
                'endFilePos' => 54331,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1805,
            'endLine' => 1805,
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
 * Decode the given Base64 encoded string.
 *
 * @param  string  $string
 * @param  bool  $strict
 * @return string|false
 */',
        'startLine' => 1805,
        'endLine' => 1808,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'lcfirst' => 
      array (
        'name' => 'lcfirst',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1816,
            'endLine' => 1816,
            'startColumn' => 36,
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
 * Make a string\'s first character lowercase.
 *
 * @param  string  $string
 * @return string
 */',
        'startLine' => 1816,
        'endLine' => 1819,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ucfirst' => 
      array (
        'name' => 'ucfirst',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1827,
            'endLine' => 1827,
            'startColumn' => 36,
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
 * Make a string\'s first character uppercase.
 *
 * @param  string  $string
 * @return string
 */',
        'startLine' => 1827,
        'endLine' => 1830,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ucwords' => 
      array (
        'name' => 'ucwords',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1839,
            'endLine' => 1839,
            'startColumn' => 36,
            'endColumn' => 42,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'separators' => 
          array (
            'name' => 'separators',
            'default' => 
            array (
              'code' => '" \\t\\r\\n\\f\\v"',
              'attributes' => 
              array (
                'startLine' => 1839,
                'endLine' => 1839,
                'startTokenPos' => 8536,
                'startFilePos' => 55170,
                'endTokenPos' => 8536,
                'endFilePos' => 55182,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1839,
            'endLine' => 1839,
            'startColumn' => 45,
            'endColumn' => 71,
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
 * Capitalize the first character of each word in a string.
 *
 * @param  string  $string
 * @param  string  $separators
 * @return string
 */',
        'startLine' => 1839,
        'endLine' => 1846,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ucsplit' => 
      array (
        'name' => 'ucsplit',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1854,
            'endLine' => 1854,
            'startColumn' => 36,
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
 * Split a string into pieces by uppercase characters.
 *
 * @param  string  $string
 * @return string[]
 */',
        'startLine' => 1854,
        'endLine' => 1857,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'wordCount' => 
      array (
        'name' => 'wordCount',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1866,
            'endLine' => 1866,
            'startColumn' => 38,
            'endColumn' => 44,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'characters' => 
          array (
            'name' => 'characters',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1866,
                'endLine' => 1866,
                'startTokenPos' => 8650,
                'startFilePos' => 55915,
                'endTokenPos' => 8650,
                'endFilePos' => 55918,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1866,
            'endLine' => 1866,
            'startColumn' => 47,
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
 * Get the number of words a string contains.
 *
 * @param  string  $string
 * @param  string|null  $characters
 * @return int
 */',
        'startLine' => 1866,
        'endLine' => 1869,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'wordWrap' => 
      array (
        'name' => 'wordWrap',
        'parameters' => 
        array (
          'string' => 
          array (
            'name' => 'string',
            'default' => NULL,
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1880,
            'endLine' => 1880,
            'startColumn' => 37,
            'endColumn' => 43,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'characters' => 
          array (
            'name' => 'characters',
            'default' => 
            array (
              'code' => '75',
              'attributes' => 
              array (
                'startLine' => 1880,
                'endLine' => 1880,
                'startTokenPos' => 8688,
                'startFilePos' => 56276,
                'endTokenPos' => 8688,
                'endFilePos' => 56277,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1880,
            'endLine' => 1880,
            'startColumn' => 46,
            'endColumn' => 61,
            'parameterIndex' => 1,
            'isOptional' => true,
          ),
          'break' => 
          array (
            'name' => 'break',
            'default' => 
            array (
              'code' => '"\\n"',
              'attributes' => 
              array (
                'startLine' => 1880,
                'endLine' => 1880,
                'startTokenPos' => 8695,
                'startFilePos' => 56289,
                'endTokenPos' => 8695,
                'endFilePos' => 56292,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1880,
            'endLine' => 1880,
            'startColumn' => 64,
            'endColumn' => 76,
            'parameterIndex' => 2,
            'isOptional' => true,
          ),
          'cutLongWords' => 
          array (
            'name' => 'cutLongWords',
            'default' => 
            array (
              'code' => 'false',
              'attributes' => 
              array (
                'startLine' => 1880,
                'endLine' => 1880,
                'startTokenPos' => 8702,
                'startFilePos' => 56311,
                'endTokenPos' => 8702,
                'endFilePos' => 56315,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1880,
            'endLine' => 1880,
            'startColumn' => 79,
            'endColumn' => 99,
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
 * Wrap a string to a given number of characters.
 *
 * @param  string  $string
 * @param  int  $characters
 * @param  string  $break
 * @param  bool  $cutLongWords
 * @return string
 */',
        'startLine' => 1880,
        'endLine' => 1883,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'uuid' => 
      array (
        'name' => 'uuid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generate a UUID (version 4).
 *
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
        'startLine' => 1890,
        'endLine' => 1895,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'uuid7' => 
      array (
        'name' => 'uuid7',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1903,
                'endLine' => 1903,
                'startTokenPos' => 8780,
                'startFilePos' => 56853,
                'endTokenPos' => 8780,
                'endFilePos' => 56856,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1903,
            'endLine' => 1903,
            'startColumn' => 34,
            'endColumn' => 45,
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
 * Generate a UUID (version 7).
 *
 * @param  \\DateTimeInterface|null  $time
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
        'startLine' => 1903,
        'endLine' => 1908,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'orderedUuid' => 
      array (
        'name' => 'orderedUuid',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Generate a time-ordered UUID.
 *
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
        'startLine' => 1915,
        'endLine' => 1933,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createUuidsUsing' => 
      array (
        'name' => 'createUuidsUsing',
        'parameters' => 
        array (
          'factory' => 
          array (
            'name' => 'factory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1941,
                'endLine' => 1941,
                'startTokenPos' => 8930,
                'startFilePos' => 57828,
                'endTokenPos' => 8930,
                'endFilePos' => 57831,
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
            'startLine' => 1941,
            'endLine' => 1941,
            'startColumn' => 45,
            'endColumn' => 69,
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
 * Set the callable that will be used to generate UUIDs.
 *
 * @param  (callable(): \\Ramsey\\Uuid\\UuidInterface)|null  $factory
 * @return void
 */',
        'startLine' => 1941,
        'endLine' => 1944,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createUuidsUsingSequence' => 
      array (
        'name' => 'createUuidsUsingSequence',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
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
            'startLine' => 1953,
            'endLine' => 1953,
            'startColumn' => 53,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'whenMissing' => 
          array (
            'name' => 'whenMissing',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 1953,
                'endLine' => 1953,
                'startTokenPos' => 8965,
                'startFilePos' => 58183,
                'endTokenPos' => 8965,
                'endFilePos' => 58186,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 1953,
            'endLine' => 1953,
            'startColumn' => 70,
            'endColumn' => 88,
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
 * Set the sequence that will be used to generate UUIDs.
 *
 * @param  array  $sequence
 * @param  (callable(): \\Ramsey\\Uuid\\UuidInterface)|null  $whenMissing
 * @return void
 */',
        'startLine' => 1953,
        'endLine' => 1978,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'freezeUuids' => 
      array (
        'name' => 'freezeUuids',
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
                'startLine' => 1986,
                'endLine' => 1986,
                'startTokenPos' => 9124,
                'startFilePos' => 58986,
                'endTokenPos' => 9124,
                'endFilePos' => 58989,
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
                      'name' => 'Closure',
                      'isIdentifier' => false,
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
            'startLine' => 1986,
            'endLine' => 1986,
            'startColumn' => 40,
            'endColumn' => 64,
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
 * Always return the same UUID when generating new UUIDs.
 *
 * @param  \\Closure|null  $callback
 * @return \\Ramsey\\Uuid\\UuidInterface
 */',
        'startLine' => 1986,
        'endLine' => 2001,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createUuidsNormally' => 
      array (
        'name' => 'createUuidsNormally',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that UUIDs should be created normally and not using a custom factory.
 *
 * @return void
 */',
        'startLine' => 2008,
        'endLine' => 2011,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'ulid' => 
      array (
        'name' => 'ulid',
        'parameters' => 
        array (
          'time' => 
          array (
            'name' => 'time',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2019,
                'endLine' => 2019,
                'startTokenPos' => 9240,
                'startFilePos' => 59688,
                'endTokenPos' => 9240,
                'endFilePos' => 59691,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2019,
            'endLine' => 2019,
            'startColumn' => 33,
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
 * Generate a ULID.
 *
 * @param  \\DateTimeInterface|null  $time
 * @return \\Symfony\\Component\\Uid\\Ulid
 */',
        'startLine' => 2019,
        'endLine' => 2030,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createUlidsNormally' => 
      array (
        'name' => 'createUlidsNormally',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Indicate that ULIDs should be created normally and not using a custom factory.
 *
 * @return void
 */',
        'startLine' => 2037,
        'endLine' => 2040,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createUlidsUsing' => 
      array (
        'name' => 'createUlidsUsing',
        'parameters' => 
        array (
          'factory' => 
          array (
            'name' => 'factory',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2048,
                'endLine' => 2048,
                'startTokenPos' => 9349,
                'startFilePos' => 60400,
                'endTokenPos' => 9349,
                'endFilePos' => 60403,
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
            'startLine' => 2048,
            'endLine' => 2048,
            'startColumn' => 45,
            'endColumn' => 69,
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
 * Set the callable that will be used to generate ULIDs.
 *
 * @param  (callable(): \\Symfony\\Component\\Uid\\Ulid)|null  $factory
 * @return void
 */',
        'startLine' => 2048,
        'endLine' => 2051,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'createUlidsUsingSequence' => 
      array (
        'name' => 'createUlidsUsingSequence',
        'parameters' => 
        array (
          'sequence' => 
          array (
            'name' => 'sequence',
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
            'startLine' => 2060,
            'endLine' => 2060,
            'startColumn' => 53,
            'endColumn' => 67,
            'parameterIndex' => 0,
            'isOptional' => false,
          ),
          'whenMissing' => 
          array (
            'name' => 'whenMissing',
            'default' => 
            array (
              'code' => 'null',
              'attributes' => 
              array (
                'startLine' => 2060,
                'endLine' => 2060,
                'startTokenPos' => 9384,
                'startFilePos' => 60756,
                'endTokenPos' => 9384,
                'endFilePos' => 60759,
              ),
            ),
            'type' => NULL,
            'isVariadic' => false,
            'byRef' => false,
            'isPromoted' => false,
            'attributes' => 
            array (
            ),
            'startLine' => 2060,
            'endLine' => 2060,
            'startColumn' => 70,
            'endColumn' => 88,
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
 * Set the sequence that will be used to generate ULIDs.
 *
 * @param  array  $sequence
 * @param  (callable(): \\Symfony\\Component\\Uid\\Ulid)|null  $whenMissing
 * @return void
 */',
        'startLine' => 2060,
        'endLine' => 2085,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'freezeUlids' => 
      array (
        'name' => 'freezeUlids',
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
                'startLine' => 2093,
                'endLine' => 2093,
                'startTokenPos' => 9543,
                'startFilePos' => 61536,
                'endTokenPos' => 9543,
                'endFilePos' => 61539,
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
                      'name' => 'Closure',
                      'isIdentifier' => false,
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
            'startLine' => 2093,
            'endLine' => 2093,
            'startColumn' => 40,
            'endColumn' => 64,
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
 * Always return the same ULID when generating new ULIDs.
 *
 * @param  Closure|null  $callback
 * @return Ulid
 */',
        'startLine' => 2093,
        'endLine' => 2108,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
        'aliasName' => NULL,
      ),
      'flushCache' => 
      array (
        'name' => 'flushCache',
        'parameters' => 
        array (
        ),
        'returnsReference' => false,
        'returnType' => NULL,
        'attributes' => 
        array (
        ),
        'docComment' => '/**
 * Remove all strings from the casing caches.
 *
 * @return void
 */',
        'startLine' => 2115,
        'endLine' => 2120,
        'startColumn' => 5,
        'endColumn' => 5,
        'couldThrow' => false,
        'isClosure' => false,
        'isGenerator' => false,
        'isVariadic' => false,
        'modifiers' => 17,
        'namespace' => 'Illuminate\\Support',
        'declaringClassName' => 'Illuminate\\Support\\Str',
        'implementingClassName' => 'Illuminate\\Support\\Str',
        'currentClassName' => 'Illuminate\\Support\\Str',
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