<?php

//     function renderTable($names)
//     {
//         $html = '<table class="table">';

//         $html .= '<thead><tr class="bg-c-blue">';
//         if (!empty($names)) {
//             $firstName = $names[0];
//             $keys = array_keys($firstName);
        
//             foreach ($keys as $key) {
//                 $html .= '<th>' . ucfirst($key) . '</th>';
//             }
            
//             $html .= '<th>Action</th>';
//         }
        
//         $html .= '</tr></thead>';

//         foreach ($names as $name) {
//             $html .= '<tr class="table-row">';
//             foreach ($keys as $key) {
//                 $html .= '<td>' . $name[$key] . '</td>';
//             }
//             $html .= '<td>';
//             $html .= '<a href="' . route('departments.edit', ['id' => $name['id']]) . '" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>';
//             $html .= '<a href="' . route('departments.show', ['id' => $name['id']]) . '" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>';
//             $html .= '<a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>';
//             $html .= '</td>';
//             $html .= '</tr>';
//         }

//         return $html;
//     }
// }

if (!function_exists('getDepartments')) {
    function getDepartments()
    {
        $departments=[
            ['id'=>1, 'Department Name'=>'Spinning', 'Department Head'=>'Ms. Ayesha Khan',],
            ['id'=>2, 'Department Name'=>'Weaving', 'Department Head'=>'Mr. David Lee',],
            ['id'=>3, 'Department Name'=>'Knitting', 'Department Head'=>'Mr. Omar Hassan',],
            ['id'=>4, 'Department Name'=>'Dyeing & Finishing', 'Department Head'=>'Ms. Isabella Rodriguez',],
            ['id'=>5, 'Department Name'=>'Quality Control', 'Department Head'=>'Mr. Chen Lin',],
            ['id'=>6, 'Department Name'=>'Design & Development', 'Department Head'=>'Ms. Sofia Petrova',],
          ];

        return $departments;
    }
}

if (!function_exists('getCustomers')) {
    function getCustomers()
    {
        $customers=[
            ['id'=>1, 'Name'=>'Happy Bakery', 'Address'=>'456 Baker Blvd, Breadville, TX 78901','Industry' => 'Food Service'],
            ['id'=>2, 'Name'=>'Acme Corp', 'Address'=>'123 Main St, Anytown, CA 12345','Industry' => 'Technology'],
            ['id'=>3, 'Name'=>'Green Earth Growers', 'Address'=>'4456 Swift Street, Parcelfield, NJ 07036','Industry' => 'Agriculture'],
            ['id'=>4, 'Name'=>'Blooming Blooms', 'Address'=>'789 Sprout Street, Farmeville, WY 82001','Industry' => 'Retail'],
            ['id'=>5, 'Name'=>'Cloud Climbers', 'Address'=>'1011 Innovation Way, Gadgetville, CA 90210','Industry' => 'Software Development'],
            ['id'=>6, 'Name'=>'Sun Haven Yoga', 'Address'=>'1011 Sky High Ave, Summit City, NY 09876','Industry' => 'Health & Wellness'],
            ['id'=>7, 'Name'=>'Fix-It Fast', 'Address'=>'543 Peace Way, Tranquility Town, CO 81234','Industry' => 'Repair Services'],
            ['id'=>8, 'Name'=>'Crafty Creations', 'Address'=>'789 Wrench Way, Gearheadville, IL 60543','Industry' => 'Arts & Crafts'],
            ['id'=>9, 'Name'=>'Technogadget Inc.', 'Address'=>'10 Forge Lane, Handcraft Haven, MA 01234','Industry' => 'Electronics'],
            ['id'=>10, 'Name'=>'Global Delivery Express', 'Address'=>'1011 Innovation Way, Gadgetville, CA 90210','Industry' => 'Logistics'],
        ];
        return $customers;
    }
}
