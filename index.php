<?php
        $n = $argv[1];
        for($i = 2; $i < $n; $i++)
        {
            if ($n % $i === 0)
            {
                echo $n." : 素数ではない\n";
                return;
            } 
        }
            echo $n." : 素数\n";
