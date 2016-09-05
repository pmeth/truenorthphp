<?php

$speakers[] = array (
  'name' => 'Derick Rethans',
  'city' => 'London',
  'country' => 'UK',
  'twitter' => '',
  'image' => 'http://cfp.truenorthphp.ca/uploads/NBhLTNMUkovBN4ZvuHFwSvxiYlW3v7lCMpa9fb4F.jpeg',
  'bio' => ' Derick Rethans is a PHP internals expert, author of Xdebug and an OpenStreetMap and mapping enthusiast.
He has contributed in a number of ways to the PHP project, including the Xdebug debugging tool, and various extensions and additions. He\'s a frequent lecturer at conferences, the author of php|architect\'s Guide to Date and Time Programming, and the co-author of PHP 5 Power Programming. He is now working at MongoDB to work on the PHP driver for MongoDB. ',
  'talks' => array (
    array (
      'title' => 'Grown-up MongoDB: Schema Design',
      'text' => 'Although MongoDB is a non-relational database, it is still very important that
you store your data in an optimal way. This presentation make you grow up from
just starting with MongoDB, to a seasoned user, by teaching you how to design
your data schema according to your application\'s needs. This requires a
different mind set than designing for a relational database.

Besides schema design techniques, I will also cover how to pick indexes,
different types of indexes, and way to find out why queries are potentially not
as fast as they could be.'
    ),
    array(
        'title' => 'Locate all the things',
        'text' => 'n this talk you will learn how to effectively store, retrieve and display
geospatial data, such as roads, points of interests and more.

First we will be importing an OpenStreetMap dataset covering Toronto into
MongoDB. This is not trivial due to the amount of data.

After importing, we will look at which types of queries we can
run to find things. Either by predicates, or with geospatial queries.

And last we will have a look at how to display the data that we\'ve requested,
through a website using the Leaflet mapping library.'
    )
  ),
);
