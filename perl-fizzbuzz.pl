#!/usr/bin/env perl

use strict;
use warnings;

for (1..100) {
    ($_ % 5 == 0 && $_ % 3 == 0) ? print "FizzBuzz\n" :
    ($_ % 5 == 0)                ? print "Fizz\n"     :
    ($_ % 3 == 0)                ? print "Buzz\n"     :
                                   print "$_\n";
}
