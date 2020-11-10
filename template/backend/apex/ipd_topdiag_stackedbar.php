<?php
	 header('Access-Control-Allow-Origin: *');
   

include 'connect.php';


  $sqlipd = "select * from(
    SELECT
TO_CHAR(CURRENT_DATE, 'yyyy')+1+543 as years,
      ICD10S.ICD_DESC,
    COUNT(case WHEN DISEASE_WAREHOUSE.SEX = 'F' THEN DISEASE_WAREHOUSE.HN END) as sex_f,
    COUNT(case WHEN DISEASE_WAREHOUSE.SEX = 'M' THEN DISEASE_WAREHOUSE.HN END) as sex_m,
    count( DISEASE_WAREHOUSE.HN ) ipdall
    
    
    FROM
      DISEASE_WAREHOUSE
    INNER JOIN ICD10S on DISEASE_WAREHOUSE.ICD_CODE = ICD10S.CODE
    
    WHERE
DATEADMIT >=     case when  TO_CHAR(CURRENT_DATE, 'mm') in ( '10','11','12' ) then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy') ||'/'|| '10/01', 'yyyy/mm/dd')
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-1 ||'/'|| '10/01', 'yyyy/mm/dd')  end 

and DATEADMIT <= case when  TO_CHAR(CURRENT_DATE, 'mm') in ('10','11','12') then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')+1 ||'/'|| '09/30', 'yyyy/mm/dd') 
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy') ||'/'|| '09/30', 'yyyy/mm/dd')  end 
    AND DISEASE_WAREHOUSE.OPDIPD = 'I'
    AND DISEASE_WAREHOUSE.ICD_CODE NOT LIKE 'Z%'
    
    GROUP BY 	ICD10S.ICD_DESC
    ORDER BY  COUNT(DISEASE_WAREHOUSE.HN ) DESC)top10
    where ROWNUM <= 10

 ";

 

$data=array();

$strSQL  = $sqlipd;


$objParse = oci_parse ($objConnect, $strSQL);
oci_execute($objParse,OCI_DEFAULT);
while($rs_pmk=oci_fetch_array($objParse,OCI_BOTH)){

  $a['years']=$rs_pmk[0];
	 $a['icd_desc']=$rs_pmk[1];
  $a['sex_f']=intval($rs_pmk[2]);
  $a['sex_m']=intval($rs_pmk[3]);
 
	
	


	
	array_push($data,$a);

	
}	
	
// $data_array2 = array("data" => $data);

echo json_encode($data);



oci_close($objConnect);





?>
