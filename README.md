# Pathos

Generates funny url from strings provided in `src/assets`
 
## Installation

```bash
composer require xifax/pathos
```
 
### Usage

```php
use \Pathos\Generator;

# will display something like 'WelcomeCloudyWolverine'
echo Generator::url($prefixAdjectives=2);
```
