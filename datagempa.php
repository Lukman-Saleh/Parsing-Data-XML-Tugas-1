<?php
//DIBuat Oleh 12211846 Lukman Saleh
$url="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml";
$gempa= new SimpleXMLElement($url,null,true);

$result=json_decode($gempa) ;
//echo "<pre>";print_r($gempa);
echo "<center><h2>Data Gempa</h2></center>";


echo "<table border=1>
<tr>
    <td>Tanggal</td>
    <td>Jam</td>
    <td>DateTime</td>
    <td>Coordinate</td>
    <td>Lintang</td>
    <td>Bujur</td>
    <td>Magnitude</td>
    <td>Kedalaman</td>
    <td>Wilayah</td>
    <td>Dirasakan</td>
</tr>";

for ($i=0;$i<count($gempa->gempa) ;$i++) {

    echo "<tr>
    <td><small>".$gempa->gempa[$i]->Tanggal."</small></td>
    <td><small>".$gempa->gempa[$i]->Jam."</small></td>
    <td><small>".$gempa->gempa[$i]->DateTime."</small></td>
    <td><small>".$gempa->gempa[$i]->point->coordinates."</small></td>
    <td><small>".$gempa->gempa[$i]->Lintang."</small></td>
    <td><small>".$gempa->gempa[$i]->Bujur."</small></td>
    <td><small>".$gempa->gempa[$i]->Magnitude."</small></td>
    <td><small>".$gempa->gempa[$i]->Kedalaman."</small></td>
    <td><small>".$gempa->gempa[$i]->Wilayah."</small></td>
    <td><small>".$gempa->gempa[$i]->Dirasakan."</small></td>
    </tr>";
}
echo "</table>";
?>
