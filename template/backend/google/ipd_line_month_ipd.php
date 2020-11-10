<?php
	 header('Access-Control-Allow-Origin: *');
   

include 'connect.php';


$sqlipd = "
select ipdall_old.month_number,
ipdall_old.months,
 NVL(ipd.ipdall, 0),
ipdall_old.ipdall as ipdall1 ,ipdall_old2.ipdall as  ipdall2 from (
SELECT
	TO_CHAR(DATEADMIT, 'mm') as month_number,
	TO_CHAR(DATEADMIT, 'yyyy-mm')  as month_year_number ,
	to_char( DATEADMIT, 'Month','NLS_CALENDAR=''THAI BUDDHA'' NLS_DATE_LANGUAGE=THAI')  as months,
			COUNT(*)AS ipdall
	FROM
		IPDTRANS
	INNER JOIN PATIENTS ON IPDTRANS.HN = PATIENTS.HN
	INNER JOIN PLACES ON IPDTRANS.PLA_PLACECODE = PLACES.PLACECODE
	
	WHERE
		
DATEADMIT >=      case when  TO_CHAR(CURRENT_DATE, 'mm') in ( '10','11','12' ) then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy') ||'/'|| '10/01', 'yyyy/mm/dd')
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-1 ||'/'|| '10/01', 'yyyy/mm/dd')  end 

and DATEADMIT <= case when  TO_CHAR(CURRENT_DATE, 'mm') in ('10','11','12') then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')+1 ||'/'|| '09/30', 'yyyy/mm/dd') 
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy') ||'/'|| '09/30', 'yyyy/mm/dd')  end 
	GROUP BY 	TO_CHAR(DATEADMIT, 'mm') ,TO_CHAR(DATEADMIT, 'yyyy-mm'),to_char( DATEADMIT, 'Month','NLS_CALENDAR=''THAI BUDDHA'' NLS_DATE_LANGUAGE=THAI')
	ORDER BY TO_CHAR(DATEADMIT, 'yyyy-mm')  )ipd
	right JOIN (SELECT
	TO_CHAR(DATEADMIT, 'mm') as month_number,
	TO_CHAR(DATEADMIT, 'yyyy-mm')  as month_year_number ,
	to_char( DATEADMIT, 'Month','NLS_CALENDAR=''THAI BUDDHA'' NLS_DATE_LANGUAGE=THAI')  as months,
			COUNT(*)AS ipdall
	FROM
		IPDTRANS
	INNER JOIN PATIENTS ON IPDTRANS.HN = PATIENTS.HN
	INNER JOIN PLACES ON IPDTRANS.PLA_PLACECODE = PLACES.PLACECODE
	
	WHERE
		
DATEADMIT >=      case when  TO_CHAR(CURRENT_DATE, 'mm') in ( '10','11','12' ) then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-1 ||'/'|| '10/01', 'yyyy/mm/dd')
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-2 ||'/'|| '10/01', 'yyyy/mm/dd')  end 

and DATEADMIT <= case when  TO_CHAR(CURRENT_DATE, 'mm') in ('10','11','12') then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy') ||'/'|| '09/30', 'yyyy/mm/dd') 
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-1 ||'/'|| '09/30', 'yyyy/mm/dd')  end 
	GROUP BY 	TO_CHAR(DATEADMIT, 'mm') ,TO_CHAR(DATEADMIT, 'yyyy-mm'),to_char( DATEADMIT, 'Month','NLS_CALENDAR=''THAI BUDDHA'' NLS_DATE_LANGUAGE=THAI')
	ORDER BY TO_CHAR(DATEADMIT, 'yyyy-mm')  )ipdall_old on ipd.month_number = ipdall_old.month_number
	left JOIN (SELECT
	TO_CHAR(DATEADMIT, 'mm') as month_number,
	TO_CHAR(DATEADMIT, 'yyyy-mm')  as month_year_number ,
	to_char( DATEADMIT, 'Month','NLS_CALENDAR=''THAI BUDDHA'' NLS_DATE_LANGUAGE=THAI')  as months,
			COUNT(*)AS ipdall
	FROM
		IPDTRANS
	INNER JOIN PATIENTS ON IPDTRANS.HN = PATIENTS.HN
	INNER JOIN PLACES ON IPDTRANS.PLA_PLACECODE = PLACES.PLACECODE
	
	WHERE
		
DATEADMIT >=      case when  TO_CHAR(CURRENT_DATE, 'mm') in ( '10','11','12' ) then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-2 ||'/'|| '10/01', 'yyyy/mm/dd')
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-3 ||'/'|| '10/01', 'yyyy/mm/dd')  end 

and DATEADMIT <= case when  TO_CHAR(CURRENT_DATE, 'mm') in ('10','11','12') then TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-1 ||'/'|| '09/30', 'yyyy/mm/dd') 
else TO_DATE (TO_CHAR(CURRENT_DATE, 'yyyy')-2 ||'/'|| '09/30', 'yyyy/mm/dd')  end 
	GROUP BY 	TO_CHAR(DATEADMIT, 'mm') ,TO_CHAR(DATEADMIT, 'yyyy-mm'),to_char( DATEADMIT, 'Month','NLS_CALENDAR=''THAI BUDDHA'' NLS_DATE_LANGUAGE=THAI')
	ORDER BY TO_CHAR(DATEADMIT, 'yyyy-mm')   )ipdall_old2 on ipdall_old.month_number = ipdall_old2.month_number
	  ";



$data=array();

$strSQL   = $sqlipd;


  
	
$year =   Date("Y", strtotime("now"." +1 Year "))+543;  
$year1 =  Date("Y")+543;
$year2 =  Date("Y", strtotime("now"." -1 Year "))+543;



$objParse = oci_parse ($objConnect, $strSQL);
oci_execute($objParse,OCI_DEFAULT);
//   $data[] = array('months','เดือน');
//  $data[] = array('ipdall','จำนวนผู้รับบริการ');
// $data[] = array('ipdall_old','จำนวนผู้รับบริการปีที่แล้ว');
$data[] = array('เดือน',(string)$year ,(string)$year1,(string)$year2);
while($rs_pmk=oci_fetch_array($objParse,OCI_BOTH)){


   $data[] = array($rs_pmk[1],(int)$rs_pmk[2],(int)$rs_pmk[3],(int)$rs_pmk[4]);
	
//   $data[] = array($rs_pmk[1],(int)$rs_pmk[2]);





	
	
}	
	

echo json_encode($data);


oci_close($objConnect);





?>
