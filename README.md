# Pathos

Generates funny url from strings provided in `src/assets`
 
## Installation

```
composer require xifax/pathos
```
 
### Usage

```
use \Pathos\Generator;

# will display something like 'WelcomeCloudyWolverine'
echo Generator::url($prefixAdjectives=2);
```
