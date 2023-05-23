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
            border: 0px solid #ccc;
            padding: 0px;
        }
		
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        th {
            padding: 6px 0;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }
		td {
            padding: 6px 0;
           	border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #f5f5f5;
			border: 1px solid #ccc;
			text-align: left;
            
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
            <h5>Doctor Name        :  <?php echo $queryDocDetail->name ?> </h5>                
            <h5>Join Date     : </h5>
            <h5>Status : <?php echo $queryDocDetail->status ?></h5>
        </td>   
 		 </tr>
	</table>
</table>
            
        </div>
       <table>
        <caption>Result</caption>
            <tr>
            
            <th colspan="2">MARET</th>
            <th colspan="2">FEBRUARI</th>
            <th colspan="2">JANUARI</th>
        </tr>
        <tr>
            <th>Parameter</th>
            <th>Individu</th>
            <th>Craft</th>
            <th>Individu</th>
            <th>Craft</th>
            <th>Individu</th>
            <th>Craft</th>
            
        </tr>
        <tr>
            <td>Practice Hour(s) per Week</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>OPD & Dental Consultation</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>IPD Admission</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Surgery</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Prescription</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Laboratory Order</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Credentialing/Recredentialing</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Doctor's Consultation waiting time</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Doctor's Consultation waiting time(Walk-in)</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <tr>
            <td>Doctor Credential</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
            <td>4</td>
            <td>Avg. 17</td>
        </tr>
        <!-- <tr>
            <td id="mapbertulang">Map Bertulang</td>
            <td>2</td>
            <td>50.000,00</td>
            <td>100.000,00</td>
        </tr> -->
        <tr>
            <th>Berlaku SIP</th>
            <td>21/12/2023</td>
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