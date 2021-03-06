<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.

class LocaleTest extends TestCase
{

    public function testGet()
    {
        $locales = static::$_client->locale()->get();
        $this->assertGreaterThan(0, count($locales));

        $locale = $locales['en-US'];
        $this->assertEquals('en-US', $locale->id);
    }

    public function testGetById()
    {
        $locale = static::$_client->locale()->get('en-US');
        $this->assertEquals('en-US', $locale->id);
    }

}
