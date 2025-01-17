<?php

namespace Twig\Tests\Node;

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Twig\Node\BlockReferenceNode;
use Twig\Test\NodeTestCase;

class BlockReferenceTest extends NodeTestCase
{
    public function testConstructor()
    {
        $node = new BlockReferenceNode('foo', 1);

        $this->assertEquals('foo', $node->getAttribute('name'));
    }

    public static function provideTests(): iterable
    {
        return [
            [new BlockReferenceNode('foo', 1), <<<'EOF'
// line 1
yield from $this->unwrap()->yieldBlock('foo', $context, $blocks);
EOF
            ],
        ];
    }
}
