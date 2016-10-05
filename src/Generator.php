<?php
namespace Pathos;


/**
 * Generate funny urls with monsters
 * @package Pathos
 */
class Generator
{
    /**
     * Create funny url based on provided list of adjectives + monsters
     * @param int $prefixAdjectives  Number of adjectives to prefix monster with
     * @return string Funny url
     */
    public static function url($prefixAdjectives = 3) {
        // Load source texts
        $adjectives = file(__DIR__ . "/assets/adjectives");
        $monsters = file(__DIR__ . '/assets/monsters');

        // Get random monster
        $monster = rtrim($monsters[array_rand($monsters)]);

        // Prepare template
        $template = '';

        // Get random adjectives
        $keys = array_rand($adjectives, $prefixAdjectives);
        foreach($keys as $key) {
            // Trim and capitalize adjective
            $template .= ucfirst(rtrim($adjectives[$key]));

        }

        return $template . $monster;
    }
}
