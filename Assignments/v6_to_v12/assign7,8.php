<?php
//assign 7
echo (bool)"Hello PHP";
echo '<br>';
echo gettype((int)(bool)"Hello PHP");

echo '<br>';

//assign 8
echo "<pre>";
print_r([
    "frontend"=>[
        "HTML",
        "CSS",
        "js"=>[
            "Vuejs"=>[
            2=>"v2",
            3=> "v3"
        ],
        0=>"reactjs",
        1=> "Svelte"
    ]
    ],
    "backend"=>[
        "PHP",
        "MYSQL",
        "Secuirty"
    ],
    0=> "git",
    1=> "github",
    "Testing"=>[
        "unit testing",
        "End to End",
        "Integration"
    ]
    

]);
echo "</pre>";