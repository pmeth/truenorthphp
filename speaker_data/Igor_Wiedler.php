<?php

$speakers[] = array (
  'name' => 'Igor Wiedler',
  'city' => 'Zurich',
  'country' => 'Switzerland',
  'twitter' => '',
  'image' => 'http://www.gravatar.com/avatar/5c3574f2bc642a635d09b000c8b3daf0?s=200&d=http://truenorthphp.ca/img/no-pic.jpg',
  'bio' => 'Independent Researcher.',
  'talks' => array (
    array (
      'title' => 'The HttpKernelInterface is a lie',
      'text' => 'This talk will explore the evolution of HTTP abstractions. We will take a look at inetd at the TCP level, CGI and FCGI at the HTTP level, language level abstractions like Rack for Ruby and WSGI for Python. Finally we will arrive at the Symfony2 HttpKernelInterface. The PHP community can take many ideas from Rack. We should be building composable stacks of re-usable middlewares.
Learn about unix philosophy, understand where PHP\'s CGI-like I/O mechanism ($_SERVER, header, echo) comes from, how it can be improved, and how the HTTP boundary allows for truly framework-agnostic code sharing!
Note to organizers:
I gave this talk at symfony live portland: https://joind.in/8666',
    ),
    array (
      'title' => 'Silex: An implementation detail',
      'text' => 'Your framework is holding you hostage, and you are suffering from Stockholm syndrome. Are you a PHP developer, a Symfony developer or a Drupal developer? You should be a web developer. Frameworks are just details, your business does not care about them.
Silex is a library with a narrow and well defined scope, that allows you to adapt it to work on top of your existing application and business logic, not within it. Most "full stack" frameworks make a lot of decisions for you, and changing them is usually quite hard. You should be telling your framework what to do, not the other way round.
I will show you some approaches to designing your application in a framework-agnostic way, followed by how you can ease the delivery of your application over the web with Silex using some custom event listeners and middlewares.',
    ),
  ),
);