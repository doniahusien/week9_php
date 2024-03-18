<?php
echo"<pre>";
print_r([
    "n"=>"name",
    "a"=>"age",
    "grade"
]);
echo"</pre>";

echo"<pre>";
print_r([
    0=>"name",
    "a"=>"age",
    "grade",
    True=>"new1", //override grade with new1
    "1"=>"new2",//override new1 with new2
    "new3",
    8=>"new 8",
    "new 9",//index 9
    false=>"eman",//override first index
    6=>"donia",// not sorted in actual index
    "new",//index 10
    "ages"=>[
        1,
        2=>[
            2.2,
            2.3,
            2.5
        ],
        3
    ]
]);
echo"</pre>";