<?php
	 header('Access-Control-Allow-Origin: *');
   

include 'connect.php';
// $opdno = $_GET["opdno"];




$data=array();

$strSQL  = "select
x.type_id,
x.name,
x.beds || '/' || beds_count.bedtypes AS bed,
round((x.beds*100)/ beds_count.bedtypes,1)  as bed1_level
 from (
SELECT
	BEDTYPES.TYPE_ID,
	BEDTYPES. NAME,
	COUNT(IPDTRANS.an)AS beds
FROM
	IPDTRANS
INNER JOIN PLACES ON IPDTRANS.PLA_PLACECODE = PLACES.PLACECODE
LEFT OUTER JOIN beds ON IPDTRANS.bed_no = beds.code
INNER JOIN BEDTYPES ON beds.BED1_TYPE_ID = BEDTYPES.TYPE_ID
WHERE
	IPDTRANS.DATEDISCH IS NULL
GROUP BY
	BEDTYPES.TYPE_ID,
	BEDTYPES. NAME
ORDER BY
	BEDTYPES.TYPE_ID)x
INNER JOIN (SELECT
	BEDTYPES.TYPE_ID,
	BEDTYPES. NAME,
	COUNT(beds.code)AS bedtypes
FROM
	beds
INNER JOIN BEDTYPES ON beds.BED1_TYPE_ID = BEDTYPES.TYPE_ID
WHERE
	beds.DEL_FLAG IS NULL
GROUP BY
	BEDTYPES.TYPE_ID,
	BEDTYPES. NAME
ORDER BY
	BEDTYPES.TYPE_ID)beds_count ON x.TYPE_ID = beds_count.TYPE_ID



	

	
";


$objParse = oci_parse ($objConnect, $strSQL);
oci_execute($objParse,OCI_DEFAULT);
while($rs_pmk=oci_fetch_array($objParse,OCI_BOTH)){




	
	


	
	array_push($data,$rs_pmk);
}	
	
// $data_array2 = array("data" => $data);

echo json_encode($data);

oci_close($objConnect);





?>
