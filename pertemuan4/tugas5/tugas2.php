<?php
// Membuat associative array dengan data perusahaan teknologi
$perusahaanTeknologi = array(
    "Perusahaan 1" => array(
        "Nama Perusahaan" => " Alphabet Inc. ",
        "Pendiri" => "Larry Page dan Sergey Brin ",
        "Lokasi" => "Mountain View, California",
        "Tahun Didirikan" => 1998,
        "Jumlah Pendapatan" => " $222 miliar USD. ",
        "Gambar" => "alphabet.jpeg"
    ),
    "Perusahaan 2" => array(
        "Nama Perusahaan" => "Amazon .",
        "Pendiri" => "Jeff Bezos ",
        "Lokasi" => "Seattle, Washington, Amerika Serikat.",
        "Tahun Didirikan" => 1994,
        "Jumlah Pendapatan" => "sekitar $386 miliar USD.",
        "Gambar" => "amazon.jpeg"
    ),
    "Perusahaan 3" => array(
        "Nama Perusahaan" => "IBM.",
        "Pendiri" => "Charles Ranlett Flint",
        "Lokasi" => "Armonk, New York, Amerika Serikat.",
        "Tahun Didirikan" => 1911,
        "Jumlah Pendapatan" => "$73 miliar USD",
        "Gambar" => "ibm.jpeg"
    ),
    "Perusahaan 4" => array(
        "Nama Perusahaan" => "Intel Corporation.",
        "Pendiri" => "Robert Noyce dan Gordon Moore",
        "Lokasi" => " Santa Clara, California, Amerika Serikat.",
        "Tahun Didirikan" => 1968,
        "Jumlah Pendapatan" => "$77,9 miliar USD. ",
        "Gambar" => "intel.jpeg"
    ),
    "Perusahaan 5" => array(
        "Nama Perusahaan" => "Apple Inc.",
        "Pendiri" => "Steve Jobs, Steve Wozniak, dan Ronald Wayne",
        "Lokasi" => "Cupertino, California",
        "Tahun Didirikan" => 1976,
        "Jumlah Pendapatan" => "$394 miliar USD. ",
        "Gambar" => "apple inc.jpeg"
    ),
    "Perusahaan 6" => array(
        "Nama Perusahaan" => "Microsoft Corporation",
        "Pendiri" => "Bill Gates dan Paul Allen. ",
        "Lokasi" => "Redmond, Washington, Amerika Serikat.",
        "Tahun Didirikan" => 1975.,
        "Jumlah Pendapatan" => " $168 miliar USD.",
        "Gambar" => "microsoft.jpeg"
    ),
    "Perusahaan 7" => array(
        "Nama Perusahaan" => "Tencent Holdings ",
        "Pendiri" => " Ma Huateng",
        "Lokasi" => "Shenzhen, Provinsi Guangdong, China.",
        "Tahun Didirikan" => 1998,
        "Jumlah Pendapatan" => "377 miliar yuan RMB (CNY), ",
        "Gambar" => "tencent.jpeg"
    ),
    "Perusahaan 8" => array(
        "Nama Perusahaan" => "Samsung Electronics ",
        "Pendiri" => "Lee Byung-chul",
        "Lokasi" => "Su-dong, Seoul, Korea Selatan.",
        "Tahun Didirikan" =>  1969,
        "Jumlah Pendapatan" => "sekitar $197 miliar USD",
        "Gambar" => "samsung.jpeg"
    ),
    "Perusahaan 9" => array(
        "Nama Perusahaan" => "Facebook Inc.",
        "Pendiri" => "Marck Zuckerberg",
        "Lokasi" => "Menlo Park, California, Amerika Serikat.",
        "Tahun Didirikan" => 2004.,
        "Jumlah Pendapatan" => "sekitar $85,9 miliar USD.",
        "Gambar" => "facebook.jpeg"
    ),
    "Perusahaan 10" => array(
        "Nama Perusahaan" => "Alibaba Group",
        "Pendiri" => "Jack Ma",
        "Lokasi" => "Hangzhou, Zhejiang, China.",
        "Tahun Didirikan" => 1999.,
        "Jumlah Pendapatan" => " 717 miliar yuan RMB (CNY),",
        "Gambar" => "alibaba.jpeg"
    ),
    // Tambahkan entri perusahaan lainnya di sini
);

// Mencetak tabel
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama Perusahaan</th><th>Pendiri</th><th>Lokasi</th><th>Tahun Didirikan</th><th>Jumlah Pendapatan</th><th>Gambar</th></tr>";
$nomor = 1;
foreach ($perusahaanTeknologi as $perusahaan) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $perusahaan["Nama Perusahaan"] . "</td>";
    echo "<td>" . $perusahaan["Pendiri"] . "</td>";
    echo "<td>" . $perusahaan["Lokasi"] . "</td>";
    echo "<td>" . $perusahaan["Tahun Didirikan"] . "</td>";
    echo "<td>" . $perusahaan["Jumlah Pendapatan"] . "</td>";
    echo "<td><img src='" . $perusahaan["Gambar"] . "' alt='" . $perusahaan["Nama Perusahaan"] . "' width='100'></td>";
    echo "</tr>";
    $nomor++;
}
echo "</table>";
?>