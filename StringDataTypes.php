<?php

echo "Name: ";
echo "John Carter";
echo "\n";

echo "Name: ";
echo "John\t Carter\t Smith\n";

echo <<<TEXT
Welcome to learning PHP
now, we are learning about string data types
this is the third way to create a string
you can use heredoc
TEXT;

echo <<<'TEXT'
Welcome to learning PHP
now, we are learning about string data types
this is the third way to create a string
you can use heredoc
TEXT;
