<?php
    function convertJSON($nama, $umur)
    {
        return json_encode(
            array(
                "name"          => $nama,
                "age"           => $umur,
                "address"       => "Jl cempaka Gg. 7 Bojong Minggir ",
                "hobbies"       => array("Main Game", "Jogging"),
                "is_married"    => false,
                "list_school"   => array(
                    array(
                        "name"      => "MII Wiroditan Bojong",
                        "year_in"   => 2005,
                        "year_out"  => 2011,
                        "major"     => "SD"
                    ),
                    array(
                        "name"      => "MTs YMI Wonopringgo",
                        "year_in"   => 2011,
                        "year_out"  => 2014,
                        "major"     => "SMP"
                    ),
                    array(
                        "name"      => "SMK Islam Bojong",
                        "year_in"   => 2014,
                        "year_out"  => 2017,
                        "major"     => "SMA"
                    ),
                    array(
                        "name"      => "AKN Kajen PDD Politeknik Negeri Bandung",
                        "year_in"   => 2017,
                        "year_out"  => 2019,
                        "major"     => "D2"
                    )
                ),
                "skills"        => array(
                    array(
                        "skill_name"    => "php",
                        "level"         => "beginer"
                    ),
                    array(
                        "skill_name"    => "css",
                        "level"         => "advanced"
                    ),
                    array(
                        "skill_name"    => "html",
                        "level"         => "expert"
                    )
                ),

                "interest_in_coding"  => true
            )
        );
    }

    echo convertJSON("Muhammad manan shofa", 20)
?>