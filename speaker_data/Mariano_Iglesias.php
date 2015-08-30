<?php

$speakers[] = array (
  'name' => 'Mariano Iglesias',
  'city' => 'Miramar',
  'country' => 'Argentina',
  'twitter' => '',
  'image' => 'http://www.gravatar.com/avatar/2a4f4f2259921a89fbb16f44034f395a?s=200&d=http://truenorthphp.ca/img/no-pic.jpg',
  'bio' => 'Mariano is the co-founder of Workana, a leading platform for remote work in Latin America, and one of the largest marketplaces of its kind in the world. He is a published author who leads several open source projects, and participates on the development of widely popular open source libraries and frameworks.',
  'talks' => array (
    array (
      'title' => 'Payment processing: you are DOING IT WRONG',
      'text' => 'This talk is not only about the technology behind payment processing, but most importantly about the do-don\'ts that you learn after processing millions of dollars through your webapp.
We will learn how to process payments using a wide variety of payment gateways, including the very popular Paypal, Stripe, Authorize.net, and Worldpay, and several others, but we won\'t stop there. After learning how to properly process payments, we will leverage this knowledge with a lot of useful tips and techniques, such as:
<ul> <li>Think globally but act locally: one payment gateway DOES NOT fit all. Each country / region has their specific needs</li> <li>Techniques for automatic (aka subscription) payments</li> <li>Should I store CC data? If so, how?</li> <li>Using more than one gateway (and why you definitely should)</li> <li>Dealing with failed payment attempts</li> <li>Techniques for solving "common user mistakes"</li> <li>Fraud: the moment your start processing payments, a team of fraudsters will try to hurt you. Trust me</li> <li>Fraud prevention: techniques, tools-of-the-trade, how to deal (and prevent) fraudsters</li> <li>Maintaining a good payment experience for your clients</li> </ul>',
    ),
    array (
      'title' => 'Stop making the user wait! Job queues to the rescue',
      'text' => 'While they have been around for ages, job queues are often left out of the sweet of tools most web developers utilize. As a result we are worsening the experience of our users by making them wait for things they should not be waiting for.
In this session I will not only introduce the concept of job queues and explain how they come to solve this problem, but also illustrate how their usage will make our code more modularized, stable, testable, and scalable.
We will navigate through the different alternatives for job queues (from Gearman to RabbitMQ, among others), and we will end up focusing on Disque, a recently published in memory queue developed by non other than Salvatore Sanfilippo, the creator of Redis, focusing on its PHP integration by means of disque-php, a library I created.',
    ),
  ),
);
