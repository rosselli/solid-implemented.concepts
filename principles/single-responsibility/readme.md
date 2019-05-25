# Single Responsibility Principle (SRP)

## Classes

+ A class and methods must **represent a single entity** should **have only a single responsibility** (Cohesion).
+ A class should have **one, and only one, reason to change**.
+ A class with many responsibilities **must be divided into several smaller classes**.
+ If a class is too large, it is little reuseable, because **other classes couldn't need everything it does**.


## Cohesion
+ Cohesion is the dependency of one class from another. The goal is to create **very cohesive and little-coupled** classes.
+ Every cohesive class is **small, focused and will stop growing one day**.
+ Class that **requires frequent edits are not very cohesive**.


## Ctrl + F
+ Ask yourself: **How many places do we need to edit** when a change is required? 
+ If we need to use Ctrl + F to find points where we should change ... **it's a sign that OOP is not good**.


#### About the Alura's Example

The calculator **should not know the calculation rules or how to calculate them**. 
Those rules **should be handled by Position class**." _(encapsulation problem)_<br>
For each new position or new calculation rules, **the calculator won't be edited**.




 

