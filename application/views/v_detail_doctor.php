<!DOCTYPE html>
<html>
<head>
    <title>Data Dokter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 1px;
        }
        
        .container {
            width: 100%;
            margin: 0 auto;
            border: 1px solid #ccc;
            padding: 1px;
        }
		.container2 {
            width: 100%;
            border: 1px solid #ccc;
            padding: 0px;
			text-align: left;
        }
		
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th {
            padding: 6px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }
		td {
            padding: 6px;
           	border: 1px solid #ccc;
            text-align: center;
        }
        
        th {
          
			border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div class="container">
	    <h1><center> Doctor Contribution </center></h1>
        <h5><center> Manajemen Siloam Hospitals Denpasar mengucapkan terimakasih atas kontribusi dan dedikasi <?php echo $queryDocDetail->name?> dalam memberikan pelayanan kesehatan terbaik. Tetap semangat melayani pasien, jaga kesehatan </center> </h5>
        <table>
        <tr>
        <td>    
            <h5>Unit        : Siloam Hospital Denpasar </h5>
            <h5>Periode     : </h5>
            <h5>Doctor Code : <?php echo $queryDocDetail->code ?></h5>
        </td>
        <td> 
            <h5>Doctor Name   :  <?php echo $queryDocDetail->name ?> </h5>                
            <h5>Join Date     : <?php 
                                    $dateString2 = $queryDocDetail->join_date; // Tanggal dengan format yy-mm-dd

                                    // Mengubah format tanggal ke yyyy-mm-dd
                                    $newFormat2 = date("Y-m-d", strtotime($dateString2));

                                    // Memisahkan tahun, bulan, dan tanggal
                                    list($year, $month, $day) = explode("-", $newFormat2);

                                    // Menggabungkan tanggal dalam format dd-mm-yyyy
                                    $newFormat2 = $day . "-" . $month . "-" . $year;           
                                            
                                    if (empty($newFormat2)) {
                                        echo "N/A";
                                    } else {
                                        echo $newFormat2 ;
                                    } ?>
                                    </h5>
            <h5>Status : <?php echo $queryDocDetail->status ?></h5>
        </td>
   
  </tr>
</table>
            
        </div>
       <table>
        <caption></caption>
            <tr>
            <th></th>
            <th colspan="2">MARET</th>
            <th colspan="2">FEBRUARI</th>
            <th colspan="2">JANUARI</th>
        </tr>
        <tr>
            <th>Parameter</th>
            <th>Individual</th>
            <th>Craft Group</th>
            <th>Individual</th>
            <th>Craft Group</th>
            <th>Individual</th>
            <th>Craft Group</th>
                      
           
        </tr>
        <tr>
            <td>Practice Hour(s) per Week</td>

            <td>
                <?php 
                if (empty($queryDocDetail->total_practice_hour )) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->total_practice_hour ;
                }             
                ?>
            </td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>OPD & Dental Consultation</td>
            <td>
                <?php 
                 if (empty($queryDocDetail->opd )) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->opd ;
                }                                 
                ?>
            </td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>IPD Admission</td>
            <td><?php if (empty($queryDocDetail->ipd )) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->ipd ;
                }?></td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Surgery</td>
            <td><?php if (empty($queryDocDetail->surgery )) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->surgery ;
                } ?></td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Prescription</td>
            <td><?php if (empty($queryDocDetail->drugs)) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->drugs;
                } ?></td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Laboratory Order</td>
            <td><?php if (empty($queryDocDetail->laboratory)) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->laboratory ;
                }?></td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Radiology Order</td>
            <td><?php if (empty($queryDocDetail->radiology )) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->radiology ;
                } ?></td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <!-- <tr>
            <td>Credentialing/Recredentialing</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr> -->
        <tr>
            <td>Doctor's Consultation waiting time</td>
            <td><?php if (empty($queryDocDetail->ontime )) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->ontime;
                } ?></td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Doctor's Consultation waiting time(Walk-in)</td>
            <td><?php if (empty($queryDocDetail->walkin )) {
                    echo "N/A";
                } else {
                    echo $queryDocDetail->walkin ;
                } ?></td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Doctor Credential Valid Until</td>
            <td
            <?php
                 $startDate3 = date("Y-m-d");
                 $endDate3 = $queryDocDetail->credential_valid;
                 
                 $start = date_create($startDate3);
                 $end = date_create($endDate3);
                 
                 $diff = date_diff($start, $end);
                 
                 $diffYears = $diff->format('%y');
                 $diffMonths3 = $diff->format('%m');
                 
                 $totalMonths3 = ($diffYears * 12) + $diffMonths3;

                    if ($totalMonths3 < 6)  {
                        $bgColor1 = "red";
                     } elseif ($totalMonths3 <= 6) {
                          $bgColor1 = "yellow";
                    } else {
                        $bgColor1 = "green";
                    }
            ?>                 
                style="background-color: <?php echo $bgColor1; ?>;">
            <?php
                $dateString1 = $queryDocDetail->credential_valid; // Tanggal dengan format yy-mm-dd

                // Mengubah format tanggal ke yyyy-mm-dd
                $newFormat1 = date("Y-m-d", strtotime($dateString1));

                // Memisahkan tahun, bulan, dan tanggal
                list($year, $month, $day) = explode("-", $newFormat1);

                // Menggabungkan tanggal dalam format dd-mm-yyyy
                $newFormat1 = $day . "-" . $month . "-" . $year;           
                        
                if (empty($newFormat1)) {
                    echo "N/A";
                } else {
                    echo $newFormat1 ;
                } ?></td>
            </tr>
            
            <!-- <td><?php //print_r($startDate3);?></td>    
            <td><?php //print_r($endDate3);?></td> 
            <td><?php //print_r($totalMonths3);?></td>  -->
        
        <tr>
            <td>Practice License Valid Until</td>

            <td 
            <?php
                    $startDate2 = date("Y-m-d");
                    $endDate2 = $queryDocDetail->sip;
                    
                    $start2 = date_create($startDate2);
                    $end2 = date_create($endDate2);
                    
                    $diff2 = date_diff($start2, $end2);
                    
                    $diffYears2 = $diff2->format('%y');
                    $diffMonths2 = $diff2->format('%m');
                    
                    $totalMonths2 = ($diffYears2 * 12) + $diffMonths2;
   
                       if ($totalMonths2 < 6)  {
                           $bgColor = "red";
                        } elseif ($totalMonths2 <= 6) {
                             $bgColor = "yellow";
                       } else {
                           $bgColor = "green";
                       }
            ?>                 
                style="background-color: <?php echo $bgColor; ?>;">
            <?php 
                $dateString = $queryDocDetail->sip; // Tanggal dengan format yy-mm-dd

               // Mengubah format tanggal ke yyyy-mm-dd
                $newFormat = date("Y-m-d", strtotime($dateString));

                // Memisahkan tahun, bulan, dan tanggal
                list($year, $month, $day) = explode("-", $newFormat);

                    // Menggabungkan tanggal dalam format dd-mm-yyyy
                $newFormat = $day . "-" . $month . "-" . $year;           
                            
                if (empty($newFormat)) {
                        echo "N/A";
                    } else {
                        echo $newFormat ;
                }                
            ?>
                 
            </td> 
                
            <!-- <td><?php //print_r($startDate2);?></td>    
            <td><?php //print_r($endDate2);?></td> 
            <td><?php //print_r($totalMonths2);?></td>   -->

               
               
        </tr>
        <!-- <tr>
            <th colspan="2">Pajak</th>
            <td>10%</td>
            <td>377.500,00</td>
        </tr>
        <tr>
            <th colspan="3">Total</th>
            <td>4.152.500,00</td>
        </tr> -->
    </table>
    </div>
</body>
</html>