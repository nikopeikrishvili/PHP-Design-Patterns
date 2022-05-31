<?php

namespace DesignPatterns\Structural\Adapter\test;

use DesignPatterns\Structural\Adapter\EbookAdapter;
use DesignPatterns\Structural\Adapter\Kindle;
use DesignPatterns\Structural\Adapter\PaperBook;

class AdapterTest extends \PHPUnit\Framework\TestCase
{
    public function testCatTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnEbookLikeOnNormalBook()
    {
        $ebook = new Kindle();
        $ebookAdapter = new EbookAdapter($ebook);
        $ebookAdapter->open();
        $ebookAdapter->turnPage();
        $this->assertSame(2, $ebookAdapter->getPage());
    }
}