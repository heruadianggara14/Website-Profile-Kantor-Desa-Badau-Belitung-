<?php
$nama_bulan = array("Januari", "Pebruari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

if (!isset($_REQUEST["bulan"]))
    $_REQUEST["bulan"] = date("n");
if (!isset($_REQUEST["tahun"]))
    $_REQUEST["tahun"] = date("Y");

$cbulan = $_REQUEST["bulan"];
$ctahun = $_REQUEST["tahun"];

$tahun_sebelumnya = $ctahun;
$tahun_selanjutnya = $ctahun;
$bulan_sebelumnya = $cbulan - 1;
$bulan_selanjutnya = $cbulan + 1;

if ($bulan_sebelumnya == 0) {
    $bulan_sebelumnya = 12;
    $tahun_sebelumnya = $ctahun - 1;
}
if ($bulan_selanjutnya == 13) {
    $bulan_selanjutnya = 1;
    $tahun_selanjutnya = $ctahun + 1;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Demo Kalender - Masholeh</title>
    <style type="text/css">
        @charset "utf-8";
        /* Blog.masholeh.web.id */

        body {
            margin: 0;
            background-color: #1b7e5a;

        }


        #sidebar {
            background-color: #f3f1e7;

            margin-top: 10%;
            border-radius: 5px;
            border-color: #72D2CE;
            border-style: solid;
            border-width: thin;
        }

        #sidebar .body {
            margin: 20px 5px 20px 5px;
        }

        #sidebar .judul {
            margin: -13px auto 0;
            width: 98%;
            height: 35px;
            background-color: #72D2CE;
            background-repeat: repeat-x;
            border-radius: 5px;
        }

        #sidebar .judul h4 {
            color: #ffffff;
            text-shadow: 0px 0px 5px #666666;
            padding-left: 10px;
            padding-top: 5px;
        }

        #sidebar li {
            list-style-type: none;
            display: block;
            padding-top: 8px;
            padding-bottom: 8px;
            margin-left: -40px;
            border-bottom: 1px solid;
            border-color: #72D2CE;

        }

        #sidebar li a {
            color: #2e776a;
            text-decoration: none;
            padding-left: 5px;
        }

        #sidebar li:hover {
            color: #ffffff;
            background-color: #72D2CE;
            padding-left: -80px;
        }
    </style>


</head>

<body>
    <div id="isi">

        <div id="sidebar">
            <div class="judul">
                <h4>Kalender</h4>
            </div>
            <div class="body">

                <table width="90%" align="center">
                    <tr align="center">
                        <td align="center">
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                <tr align="center">
                                    <td colspan="7" bgcolor="#72D2CE" style="color:#FFFFFF"><strong><b><?php echo $nama_bulan[$cbulan - 1] . ' ' . $ctahun; ?></b></strong></td>
                                </tr>
                                <tr>
                                    <td align="center" bgcolor="#72D2CE" style="color:#FFFFFF"><strong>M</strong></td>
                                    <td align="center" bgcolor="#72D2CE" style="color:#FFFFFF"><strong>S</strong></td>
                                    <td align="center" bgcolor="#72D2CE" style="color:#FFFFFF"><strong>Sl</strong></td>
                                    <td align="center" bgcolor="#72D2CE" style="color:#FFFFFF"><strong>R</strong></td>
                                    <td align="center" bgcolor="#72D2CE" style="color:#FFFFFF"><strong>K</strong></td>
                                    <td align="center" bgcolor="#72D2CE" style="color:#FFFFFF"><strong>J</strong></td>
                                    <td align="center" bgcolor="#72D2CE" style="color:#FFFFFF"><strong>S</strong></td>
                                </tr>
                                <?php
                                $hari_ini = date("j");
                                $timestamp = mktime(0, 0, 0, $cbulan, 1, $ctahun);
                                $maxday = date("t", $timestamp);
                                $thisbulan = getdate($timestamp);
                                $startday = $thisbulan['wday'];
                                for ($i = 0; $i < ($maxday + $startday); $i++) {
                                    if (($i % 7) == 0) {
                                        echo "<tr> ";
                                    }
                                    if ($i < $startday) {
                                        echo "<td></td> ";
                                    } else {
                                        $tgl = $i - $startday + 1;
                                        if ($tgl == $hari_ini) {
                                            $warna_bg = "#72D2CE";
                                        } else {
                                            $warna_bg = "#f3f1e7";
                                        }


                                        echo "<td align='center' valign='middle' height='20px' bgcolor='" . $warna_bg . "'>" . $tgl . "</td>";
                                    }
                                    if (($i % 7) == 6) {
                                        echo "</tr>";
                                    }
                                }
                                ?>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </div>


    </div>
</body>

</html>