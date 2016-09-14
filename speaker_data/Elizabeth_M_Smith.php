<?php

$speakers[] = array(
  'name' => 'Elizabeth Smith',
  'city' => '',
  'country' => 'USA',
  'twitter' => 'auroraeosrose',
  'image' => 'https://cfp.truenorthphp.ca/uploads/6EuuaxYXzBBsAEv6MnfGcYmBKOEWjJ2iV1J6n1qz.jpeg',
  'bio' => 'Elizabeth has been using PHP since time immemorial (PHP 4 beta), but has used PHP 5.6 for so long now that she’s forgotten how she ever got by without traits and namespaces. She also plays far too much with C based languages and has the superpower of breaking things, like valgrind and gdb, on the same day. She went to college for dance which quickly became an English major after the first baby. If you see her in person, ask how she wound up with a career in computers.',
  'talks' => array(
      array(
          'title' => 'PHP Extensions Tutorial',
          'text' => 'Ever had a need for some library in C in your PHP code? Or want to hook into the engine to do evil? Or maybe you just want to make some part of PHP better. And then you say “but I don\'t know enough C”. PHP extensions are actually quite easy to write, even for those with only the smallest amount of C knowledge, if you know the secret incantations, places to find help, and where to get your tribal knowledge.

Write your own extension in this step by step tutorial which assumes you know nothing of PHP internals, the very basics of C syntax and little more, and have the ability to type “./configure && make && make install && make test”

We\'ll also touch on recognizing and fixing non PHP7 compatible extensions.'
      ),
      array(
          'title' => 'Taming the Resource Tiger',
          'text' => 'No matter how many virtual machines you throw at a problem you always have the physical limitations of hardware. Memory, CPU, and even your NIC\'s throughput have finite limits. Are you trying to load that 5 GB csv into memory to process it? No really, you shouldn\'t!

PHP has many built in features to deal with data in more efficient ways that pumping everything into an array or object. Using PHP stream and stream filtering mechanisms you can work with chunked data in an efficient matter, with sockets and processes you can farm out work efficiently and still keep track of what your application is doing. These features can help with memory, CPU, and other physical system limitations to help you scale without the giant AWS bill.'
      ),
      array(
          "title" => "Modern SQL",
          "text" => "Everyone knows that SQL is an outdated tool with a standard written in 1992 that isn't webscale. Who needs consistency or isolation or even atomicity with your data. Just shove it in a document store!

And then that transaction is suddenly missing for your user...

SQL is not a dirty word, and if you're processing data you should know how to use the right tool for the job. Learn about modern SQL dialect features including CTEs, aggregate filters, with clauses and more. We'll look at database support for these features, and use Postgresql for examples. We'll also look at features that many traditionally relational databases are adding and play with Postgresql's jsonb features."
      )
  )
);
