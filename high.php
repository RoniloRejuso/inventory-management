<?php
include('dbcon.php'); // Include your database connection file

// Your provided flavor data
$flavorsData = [
    "VIPO" => [
        "VB CUBE" => [
            "Set 1" => "2",
            "Set 2" => "2",
            "Set 3" => "6"
        ]
    ],
    "SOLOBAR" => [
        "SOLOBAR" => [
            "Fresh purple black" => "2",
            "Cold blast" => "2",
            "Home made pink" => "4",
            "Real mix" => "1",
            "Mix red farm" => "2",
            "Frozen monster" => "3",
            "Home made yellow" => "3",
            "Pink greek" => "3"
        ]
    ],
    "INSTABAR" => [
        "INSTABAR" => [
            "Bazooke" => "4",
            "Water" => "4",
            "Red manila" => "5",
            "Mug" => "5"
        ]
    ],
    "SHIFT" => [
        "GRIPBAR" => [
            "forsetti" => "4",
            "Odin" => "4",
            "Skadi" => "3",
            "TYR" => "3"
        ]
    ],
    "NASTY" => [
        "NASTY" => [
            "Manic magic" => "3",
            "Cosmic bake" => "1",
            "Ruby Fussion" => "3",
            "Midnight mix" => "3",
            "Crimson burts" => "3",
            "Cosmic Cortland" => "3"
        ]
    ],
    "DEMONVAPE" => [
        "WARBAR" => [
            "Snake pits" => "4",
            "Man of isle" => "5",
            "Discharge" => "3",
            "Artillery" => "7",
            "Cult of personality" => "3",
            "Lies of adolf" => "5",
            "Mix dimension" => "3",
            "Anarchism" => "7"
        ]
    ],
    "CHILLAX NEO" => [
        "CHILLAX NEO" => [
            "Jungle fusion" => "4",
            "Menthol" => "4",
            "Twisted ghost" => "3",
            "Yellow hunk" => "5",
            "Greek freak" => "4",
            "Black mamba" => "4",
            "Moonwalk" => "4",
            "Frigid spore" => "9"
        ]
    ],
    "ENJOY" => [
        "ENJOY" => [
            "Cappuccino" => "2"
        ]
    ],
    "AEGIS" => [
        "GEEKBAR" => [
            "Browned top" => "6",
            "RY4" => "4",
            "YKT" => "2",
            "Root sparkle" => "6",
            "Vanilla cupcake" => "5"
        ]
    ],
    "PUFFMASTER" => [
        "PUFFMASTER" => [
            "VL" => "1",
            "LS" => "1"
        ]
    ],
];

$results = [];

foreach ($flavorsData as $brand => $flavors) {
    foreach ($flavors as $productFlavors) {
        foreach ($productFlavors as $flavor => $count) {
            $stmt = $con->prepare("SELECT COUNT(*) as products_count FROM sales WHERE product = ?");
            $stmt->bind_param("s", $flavor);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();

            $dbCount = $row['products_count'];

            $results[] = [
                'name' => strtoupper($flavor), // Keeping 'name' for the pie chart label
                'y' => (int) $dbCount // Count from the database for the pie chart
            ];
        }
    }
}

// Now $results array contains count for each unique flavor and its count from the database
?>
