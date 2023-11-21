<?php
if (function_exists('exec')) {
    echo "exec is enabled";
}

$res = "";
exec('
java -jar ./lib/jasperstarter.jar process "/home/butechltd/public_html/inventory.heritagebd.net/jasper/Blank_A4.jasper" -o "/home/butechltd/public_html/inventory.heritagebd.net/jasper/" --jdbc-dir "/home/butechltd/public_html/inventory.heritagebd.net/jasper/jdbc/" -f pdf -t mysql -u raad -p"@5sy=hcd*P" -H localhost -n raad_inventory --db-port 3306', $res);
print_r($res);

?>/home/butechltd/public_html/inventory.heritagebd.net/packages/PHPJasper/bin/jasperstarter/lib/