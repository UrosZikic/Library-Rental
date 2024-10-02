<?php
/*
-What's OOP?

OOP stands for Object Oriented Programming. OOP is programming concept that 
employs the use of classes which akin to functions create an isolated environment within which
we can define properties and methods. 
*/

/* 
-What's a class?

A class is a concept in OOP which acts as a local environment for a specific functionality.
It can contain properties which are essentially special class variables that can contain values.
It can also contain so called methods which are class functions with which we can
define the behavior of the class.

*/

/* 
- What's instansiating?

Instansiating is a process of creating an object of a class.
Instanceo of an object is essentially a variable, tied to a specific class.
Once the object has been created, the user can utilize the said object to manipulate data
and methods allowed by that class.

*/

/* 
- What's inheritance

Inheritance is a OOP concept that allows the user to create a sub-class.
Sub-classes or child classes are classes that inherit another class, known as parent class.
Through inheritance we can create a main classes which serves as a blueprint for all the smaller classes.
This class could contain all the shared properties and methods which means we won't have to declare them again in
child classes and in a sense it makes the entire code easier to read.

*/

/* 
- Access modifiers

Access modifiers are OOP concept that sets restrictions on how and where properties and methods
can be accessed.
There are 3 types of access modifiers: public, protected and private
Public ones are available anywhere
Protected ones are available within the parent class and any child class
Private ones are only available within the parent class.

*/

/*
The static keyword is used to define static properties and methods, which belong to the class itself rather than any instance of the class.

<?php
class MathUtils {
    public static function add($a, $b) {
        return $a + $b;
    }
}

echo MathUtils::add(5, 3); // Outputs: 8
?>
*/



/* 
- GETTERS AND SETTERS

Getters and setters are methods used to access and modify the properties of an object, providing a controlled interface to the object's attributes.
*/
