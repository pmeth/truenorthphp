<?php

$speakers[] = array(
  'name' =>  "Andrew Cassell",
  'city' => '',
  'country' => 'USA',
  'twitter' => 'alc277',
  'image' => 'http://cfp.truenorthphp.ca/uploads/57tcyBEzI018z06Ftzvdsl3CX438PqEQfMwP5OG5.png',
  'bio' => "Andy Cassell is a full-stack web application developer in Herndon, Virginia who designs and builds user experiences that are delightful on any device. Andy is an employee of the non-profit Marine Spill Response Corporation, the largest dedicated oil spill and emergency response organization. He works on their website and internal web applications.",
  'talks' => array(
      array(
          'title' => "Manage Private Internal Dependencies With Composer and Satis",
          "text" => "In this talk we'll discuss how to set up and use Composer to pull open-source packages from public repositories on packagist.org. Then we'll learn how to create your own private/corporate package management server using Satis. And we'll go through an example of how to integrate your own private code packaging server into your daily development workflow.",
      ),
      array(
          "title" => "Domain-driven Design Deconstructred",
          "text" => "Once you try domain-driven design (DDD), you will never design software in the same way again. We will start by discussing what it means to use a ubiquitous language, encapsulate logic in value objects, and use bounded contexts, entities, and aggregate roots to manage state and protect invariants. We will also cover more-advanced topics in the DDD world, such as event sourcing and command query responsibility segregation."
      )
  )
);
