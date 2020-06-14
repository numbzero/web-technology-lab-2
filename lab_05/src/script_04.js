'use strict'

class Animal
{
    constructor(name)
    {
        this.name = name;
    }
}

class Dog extends Animal
{
    constructor(name)
    {
        super(name);
        this.created = new Date();
    }
}

let dog = new Dog("Dog");
console.log("[exercise_04]");
console.log("dog.name - " + dog.name);
console.log("dog.created - " + dog.created);

console.log();