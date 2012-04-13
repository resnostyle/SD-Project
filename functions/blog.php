<?php
require('simplepie.inc');

$feed = new SimplePie();

$feed->set_feed_url('http://www.schooldude.com/blog/category/energy/feed/');

$feed->init();

$feed->handle_content_type();


