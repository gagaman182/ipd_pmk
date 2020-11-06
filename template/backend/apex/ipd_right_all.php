<?php
	 header('Access-Control-Allow-Origin: *');
   

include 'connect.php';


  $sqlipd = "SELECT

  case WHEN CREDIT_TYPES.MAPPING_CODE = 'UC' THEN 'บัตรประกันสุขภาพถ้วนหน้า' 
  when CREDIT_TYPES.MAPPING_CODE = 'A7' then 'ประกันสังคม'
  when CREDIT_TYPES.MAPPING_CODE = 'A2' then 'ข้าราชการ '
  when CREDIT_TYPES.MAPPING_CODE = 'A1' then 'ชำระเงินเอง'
  when CREDIT_TYPES.MAPPING_CODE = 'A9' then 'ประกันภัยรถพรบ.บุคคลที่3'
  when CREDIT_TYPES.MAPPING_CODE = 'AL' then 'บัตรประกันสุขภาพ คนต่างด้าว'
  ELSE  'อื่นๆ'
  END AS MAPPING_CODE,
  count(AN) as  rightcount
  FROM
    IPDTRANS
  left join CREDIT_TYPES on IPDTRANS.CT_CREDIT_ID = CREDIT_TYPES.CREDIT_ID
  
  WHERE
   	TO_CHAR(DATEADMIT, 'YYYY')= TO_CHAR(CURRENT_DATE, 'yyyy')
and CREDIT_TYPES.CREDIT_ID <> '43'
  GROUP BY CREDIT_TYPES.MAPPING_CODE
  ORDER BY count(AN) DESC
  ";





$data=array();

$strSQL  = $sqlipd;


$objParse = oci_parse ($objConnect, $strSQL);
oci_execute($objParse,OCI_DEFAULT);
while($rs_pmk=oci_fetch_array($objParse,OCI_BOTH)){


	 $a['rights']=$rs_pmk[0];
  $a['ipdall']=intval($rs_pmk[1]);
 
	
	


	
	array_push($data,$a);

	
}	
	


echo json_encode($data);



oci_close($objConnect);





?>
