<?php
	 header('Access-Control-Allow-Origin: *');
   

include 'connect.php';


  $sqlipd = "SELECT
  concat(to_char(DATEADMIT,'dd/mm/'), TO_CHAR(CURRENT_DATE, 'yyyy')+543) AS days, 
count(an) as ipdall
FROM
  IPDTRANS
WHERE
DATEADMIT>=sysdate-30 and DATEADMIT<=sysdate
GROUP BY DATEADMIT
ORDER BY DATEADMIT

 ";

 

$data=array();

$strSQL  = $sqlipd;


$objParse = oci_parse ($objConnect, $strSQL);
oci_execute($objParse,OCI_DEFAULT);
while($rs_pmk=oci_fetch_array($objParse,OCI_BOTH)){


	 $a['days']=$rs_pmk[0];
  $a['ipdall']=intval($rs_pmk[1]);
 
	
	


	
	array_push($data,$a);

	
}	
	
// $data_array2 = array("data" => $data);

echo json_encode($data);



oci_close($objConnect);





?>
