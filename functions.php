<?php
function removeDuplicateNames(array $names, bool $ignoreCase = false): array {
    if (!$ignoreCase) {
        return array_unique($names); 
    }
    
    $uniqueNames = [];
    $seenLower = []; 

    foreach ($names as $name) {
        $lowerName = mb_strtolower($name, 'UTF-8');

        if (!in_array($lowerName, $seenLower)) {
            $seenLower[] = $lowerName; 
            $uniqueNames[] = $name;    
        }
    }
    return $uniqueNames;

}
?>