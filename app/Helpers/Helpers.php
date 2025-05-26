<?php

if (!function_exists('pr')) {
    function pr($data)
    {
        echo '<pre>';

        if (is_object($data) && method_exists($data, 'all')) {
            print_r([
                'data' => $data->all(),
                'files' => $data->allFiles(),
            ]);
        } else {
            print_r($data);
        }

        echo '</pre>';
        dd();
    }
}

if (!function_exists('mpr')) {
    function mpr($data)
    {
        echo '<pre>';

        if (is_object($data) && method_exists($data, 'all')) {
            print_r([
                'data' => $data->all(),
                'files' => $data->allFiles(),
            ]);
        } else {
            print_r($data);
        }

        echo '</pre>';
        // tak die
    }
}
