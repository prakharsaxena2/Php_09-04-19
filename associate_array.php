<?php



$country =[ 
            "+91"=>"India",
            "+94"=>"Tokya",
            "+95"=>"Seoul",
            "+86"=>"London",
            "+99"=>"Cario",
            "+34"=>"China",
            "+56"=>"Iceland"];

echo "<center><h1>Country Code</h1></center>";
echo "<table border='1' align='center'>
<tr>
<th>Code</th>
<th>Country</th>
</tr>";
foreach($country as $countries=>$value){


echo "<tr>";

echo "<td>".$countries."</td>";
echo "<td>".$value."</td>";
echo "</td>";
echo "</tr>";

}
echo "</table>";

?>