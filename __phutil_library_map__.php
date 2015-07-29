<?php

/**
 * This file is automatically generated. Use 'arc liberate' to rebuild it.
 *
 * @generated
 * @phutil-library-version 2
 */
phutil_register_library_map(array(
  '__library_version__' => 2,
  'class' => array(
    'ArcanistCSharpASTLinter' => 'arcanist/lint/linter/ArcanistCSharpASTLinter.php',
    'ArcanistCSharpASTLinterTestCase' => 'arcanist/lint/linter/__tests__/ArcanistCSharpASTLinterTestCase.php',
    'BracePlacementCSharpLintPolicy' => 'arcanist/lint/linter/csharp/BracePlacementCSharpLintPolicy.php',
    'CSharpClass' => 'arcanist/lint/linter/csharp/structure/CSharpClass.php',
    'CSharpField' => 'arcanist/lint/linter/csharp/structure/CSharpField.php',
    'CSharpLintPolicy' => 'arcanist/lint/linter/csharp/CSharpLintPolicy.php',
    'CSharpMethod' => 'arcanist/lint/linter/csharp/structure/CSharpMethod.php',
    'CSharpProperty' => 'arcanist/lint/linter/csharp/structure/CSharpProperty.php',
    'CSharpVisibility' => 'arcanist/lint/linter/csharp/structure/CSharpVisibility.php',
    'IndentationLintPolicy' => 'arcanist/lint/linter/csharp/IndentationLintPolicy.php',
    'PrivateFieldNameCSharpLintPolicy' => 'arcanist/lint/linter/csharp/PrivateFieldNameCSharpLintPolicy.php',
    'RefactoringCSharpLintPolicy' => 'arcanist/lint/linter/csharp/RefactoringCSharpLintPolicy.php',
    'WhitespaceBeforeAfterParenthesisLintPolicy' => 'arcanist/lint/linter/csharp/WhitespaceBeforeAfterParenthesisLintPolicy.php',
  ),
  'function' => array(),
  'xmap' => array(
    'ArcanistCSharpASTLinter' => 'ArcanistLinter',
    'ArcanistCSharpASTLinterTestCase' => 'ArcanistLinterTestCase',
    'BracePlacementCSharpLintPolicy' => 'CSharpLintPolicy',
    'CSharpClass' => 'Phobject',
    'CSharpField' => 'Phobject',
    'CSharpLintPolicy' => 'Phobject',
    'CSharpMethod' => 'Phobject',
    'CSharpProperty' => 'Phobject',
    'CSharpVisibility' => 'Phobject',
    'IndentationLintPolicy' => 'CSharpLintPolicy',
    'PrivateFieldNameCSharpLintPolicy' => 'RefactoringCSharpLintPolicy',
    'RefactoringCSharpLintPolicy' => 'CSharpLintPolicy',
    'WhitespaceBeforeAfterParenthesisLintPolicy' => 'CSharpLintPolicy',
  ),
));
