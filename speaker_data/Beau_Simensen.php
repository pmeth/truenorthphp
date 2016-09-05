<?php

$speakers[] = array (
  'name' => 'Beau Simensen',
  'city' => 'Madison, WI',
  'country' => 'USA',
  'twitter' => 'beausimensen',
  'image' => 'http://cfp.truenorthphp.ca/uploads/9I3Q7hw0lhSrSZZbjdyHr9PCht1nKEyvPj66dnR9.jpeg',
  'bio' => 'Beau Simensen (<a href="https://beau.io">beau.io</a>) has been a professional polyglot programmer since 1998. He is co-host of <a href="http://thatpodcast.io">That Podcast</a>. An active open-sourcer, he created <a href="https://sculpin.io">Sculpin</a> and helped create <a href="http://stackphp.com">Stack PHP</a>. He is also the Sculpin representative to the PHP Framework Interoperability Group (PHP-FIG). Beau is a proponent of framework agnostic code. Unglue all the things!
',
  'talks' => array (
    array(
        'title' => 'Introduction to Event Sourcing and CQRS',
        'text' => 'Have you heard about event sourcing and wondered what it is all about? Have you looked into it and wondered what sort of sorcery is going on behind the scenes that makes this magical technology work? Are you convinced that you cannot possibly move your existing applications to be event sourced? Take a step back and learn how event sourcing can be applied to a simple database-backed object model with little to no fuss. From there, see how you can start adding read models and begin to see how event sourcing and CQRS (Command Query Responsibility Segregation) go hand in hand!'
    ),
    array(
        'title' => 'Learn to Stop Wiring and Love Laravel\'s Container',
        'text' => 'You\'ve heard about dependency injection and inversion of control. Everything seems easy at first and you\'ve found a container or two to help make your life easier. Until it isn\'t anymore. Suddenly you\'ve found yourself managing complicated YAML, XML, or PHP container configurations. Making any change to your classes dependencies seems like a chore and any time you add a new class to the system you dread the inevitable configuration container configuration wiring blues.

Life doesn\'t have to be this way! In fact, life isn\'t this way for anyone who uses an autowiring container like Laravel\'s. Far from the most publicly marketed component, Illuminate\\Container handles a lot of the magic that makes Laravel so much fun to use. Find out how you can use Laravel\'s container in almost any project! See how autowiring can free your mind from having to manually configure ever little dependency. Learn how you, too, can learn to stop wiring your dependency injection container and love Laravel\'s container!'
    )
  ),
);
