                // Display file content as plain text
                $laman_ng_file = file_get_contents($filename_ng_ina_mo);
                echo "Races:<br>" . nl2br($laman_ng_file) . "<br><br>";
            } elseif ($display_type == 'array') {
                // Display file content as an array
                $array = file($filename_ng_ina_mo);
                echo "Races in array:<br><pre>";
                print_r($array);
                echo "</pre><br>";
            }
        } else {
            echo "File does not exist. Creating a new file...<br>";
            $default_content = "wassup my\nninja\nwhiteman";
            file_put_contents($filename_ng_ina_mo, $default_content);
            echo "File created.<br><br>";
        }
     } else {
        echo "Please enter a filename to read.<br><br>";
    }

    if (!empty($_GET['name']) && !empty($_GET['email'])) {
        $name = htmlspecialchars($_GET['name']);
        $email = htmlspecialchars($_GET['email']);
        echo "Welcome, " . $name . "!<br>";
        echo "Your email address is: " . $email . "<br><br>";
    }

    echo '<a href="exercise4.html">Go back</a>';
}
?>
