<?php


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
if (!function_exists('getTests')) {
    function getTests()
    {
        $tests=[
            ['id'=>1, 'cid'=>'Test# 001', 'lab'=>'Chemical Lab', 'name'=>'Color', 'description'=>'Color is being test',],
            ['id'=>2, 'cid'=>'Test# 002', 'lab'=>'Chemical Lab', 'name'=>'Fadeness', 'description'=>'Fadeness is being test',],
            ['id'=>3, 'cid'=>'Test# 003', 'lab'=>'Chemical Lab', 'name'=>'Fastness', 'description'=>'Fastness is being test',],
            ['id'=>4, 'cid'=>'Test# 004', 'lab'=>'Physical Lab', 'name'=>'Flamability', 'description'=>'Flamability is being test',],
            ['id'=>5, 'cid'=>'Test# 005', 'lab'=>'Wet Lab', 'name'=>'Launder', 'description'=>'Launder is being test',],
            ['id'=>6, 'cid'=>'Test# 006', 'lab'=>'Physical Lab', 'name'=>'Perspiration', 'description'=>'Perspiration is being test',],
            ['id'=>7, 'cid'=>'Test# 007', 'lab'=>'Chemical Lab', 'name'=>'Allergy', 'description'=>'Allergy is being test',],
            ['id'=>8, 'cid'=>'Test# 008', 'lab'=>'Physical Lab', 'name'=>'Tensile Strength', 'description'=>'Tensile Strength is being test',],
            ['id'=>9, 'cid'=>'Test# 009', 'lab'=>'Physical Lab', 'name'=>'Flamability', 'description'=>'Flamability  is being test',],
            ['id'=>10, 'cid'=>'Test# 010', 'lab'=>'Wet Lab', 'name'=>'Wash Effect	', 'description'=>'Wash Effect  is being test',],
          ];
        return $tests;
    }
}
if (!function_exists('getRanges')) {
    function getRanges()
    {
        $ranges=[
            ['id'=>'1', 'Name'=>'Fabric Weight', 'Minimum Range'=>'100 g/m2', 'Maximum Range'=>'500 g/m2',],
            ['id'=>'2', 'Name'=>'Fabric Thickness', 'Minimum Range'=>'0.1mm', 'Maximum Range'=>'2.0mm',],
            ['id'=>'3', 'Name'=>'Fabric Width', 'Minimum Range'=>'30cm', 'Maximum Range'=>'300cm',],
            ['id'=>'4', 'Name'=>'Wrap Direction', 'Minimum Range'=>'200 N/50mm', 'Maximum Range'=>'1000 N/50mm',],
            ['id'=>'5', 'Name'=>'Tear Strength', 'Minimum Range'=>'5N', 'Maximum Range'=>'50N',],
            ['id'=>'6', 'Name'=>'Water Absorption', 'Minimum Range'=>'1%', 'Maximum Range'=>'20%',],
            ['id'=>'7', 'Name'=>'Polyester Content', 'Minimum Range'=>'0%', 'Maximum Range'=>'100%',],
            ['id' => '8','Name' => 'Hydrostatic Pressure Test','Minimum Range' => '1000mm','Maximum Range' => '10,000mm',],
            ['id' => '9','Name' => 'Bacterial Reduction Percentage','Minimum Range' => '90%','Maximum Range' => '99.9%',],
            ['id' => '10','Name' => 'Yarn Evenness: CV% (Coefficient of Variation)','Minimum Range' => '5%','Maximum Range' => '20%',],
            ];
        return $ranges;
    }
}
if (!function_exists('getDepartments')) {
    function getDepartments()
    {
        $departments=[
            ['id'=>1, 'Department Name'=>'Spinning', 'Department Head'=>'Ms. Ayesha Khan',],
            ['id'=>2, 'Department Name'=>'Weaving', 'Department Head'=>'Mr. David Lee',],
            ['id'=>3, 'Department Name'=>'Knitting', 'Department Head'=>'Mr. Omar Hassan',],
            ['id'=>4, 'Department Name'=>'Human Resources (HR)', 'Department Head'=>'Ms. Beatrice Miller',],
            ['id'=>5, 'Department Name'=>'Dyeing & Finishing', 'Department Head'=>'Ms. Isabella Rodriguez',],
            ['id'=>6, 'Department Name'=>'Quality Control', 'Department Head'=>'Mr. Chen Lin',],
            ['id'=>7, 'Department Name'=>'Fabric Sourcing & Procurement', 'Department Head'=>'Ms. Evelyn Ramirez',],
            ['id'=>8, 'Department Name'=>'Production Planning & Scheduling	', 'Department Head'=>'Mr. William Schmidt',],
            ['id'=>9, 'Department Name'=>'Warehouse & Logistics', 'Department Head'=>'Mr. Ahmed Ali',],
            ['id'=>10, 'Department Name'=>'Sales & Marketing', 'Department Head'=>'Ms. Catherine Dubois',],
            ['id'=>11, 'Department Name'=>'Sustainability & Compliance', 'Department Head'=>'Dr. Maria Garcia',],
            ['id'=>12, 'Department Name'=>'Information Technology (IT)', 'Department Head'=>'Mr. Hiro Tanaka',],
          ];

        return $departments;
    }

    if (!function_exists('getDesignations')) {
        function getDesignations()
        {
            $designations=[
                ['id'=>1, 'Designation Name'=>'Spinning Supervisor', 'Department Name'=>'Spinning',],
                ['id'=>2, 'Designation Name'=>'Weaver', 'Department Name'=>'Weaving',],
                ['id'=>3, 'Designation Name'=>'Knitting Supervisor', 'Department Name'=>'Knitting',],
                ['id'=>4, 'Designation Name'=>'Design Assistant', 'Department Name'=>'Designing',],
                ['id'=>5, 'Designation Name'=>'Cutter', 'Department Name'=>'Cutting',],
                ['id'=>6, 'Designation Name'=>'Operator', 'Department Name'=>'Weaving',],
                ['id'=>7, 'Designation Name'=>'Inspector', 'Department Name'=>'Quality Control',],
                ['id'=>8, 'Designation Name'=>'Manager', 'Department Name'=>'Production',],
                ['id'=>9, 'Designation Name'=>'Seamstress', 'Department Name'=>'Sewing',],
                ['id'=>10, 'Designation Name'=>'Analyst', 'Department Name'=>'Research & Development',],
              ];
    
            return $designations;
        }
}

}