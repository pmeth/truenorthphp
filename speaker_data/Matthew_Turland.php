<?php

$speakers[] = array (
  'name' => 'Matthew Turland',
  'city' => 'Lafayette, LA',
  'country' => 'USA',
  'twitter' => '',
  'image' => 'http://www.gravatar.com/avatar/7caf389a35b6950e83294f0ac4b70f6a?s=200&d=http://truenorthphp.ca/img/no-pic.jpg',
  'bio' => 'Matthew Turland has been working with PHP since 2002. He has been both an author and technical editor for php|architect Magazine, spoken at multiple conferences, served as an instructor for php|architect training courses, and is a past contributor to Zend Framework. He holds the PHP 5 and Zend Framework ZCE certifications and is the author of "php|architect\'s Guide to Web Scraping with PHP" and co-author of SitePoint\'s "PHP Master: Write Cutting-Edge Code." He currently works as a Senior Engineer for Synacor. In his spare time, he likes to bend PHP to his will to scrape web pages and run IRC bots. To contact him, check out http://matthewturland.com/contact.',
  'talks' => array (
    array (
      'title' => 'Database Testing for Fun and Profit',
      'text' => 'You\'ve built unit tests for your project complete with mock objects for dependencies like database connections. You know that your code is running the right database queries... or do you? Updating your unit tests in tandem with your database schema really isn\'t enough. To be certain that the queries executed by your code really work, you need to run them against a real database. Enter database testing. This presentation will introduce you to the Database extension for PHPUnit, the de facto unit testing framework for PHP applications. You\'ll learn about everything from generating various types of test data sets to writing tests that prove your code does what you think it does to the database.',
    ),
    array (
      'title' => 'Unit Testing JavaScript with QUnit and Sinon',
      'text' => 'The importance of quality assurance and best practices is only increasing in web applications, especially on the evermore prominent client side. As the complexity of client code grows, so too does the important of ensuring that it is thoroughly tested across major browsers. This presentation will cover the QUnit JavaScript unit testing framework developed by lead jQuery developer John Resig and the complementary Sinon mocking framework. It will include best practices for implementing testable code, supplementing native QUnit functions with a data provider implementation inspired by PHPUnit, and related pitfalls such as testing asynchronous and time-dependent code and mocking native browser and jQuery functionality.',
    ),
  ),
);