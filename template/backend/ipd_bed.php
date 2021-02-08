<?php
	 header('Access-Control-Allow-Origin: *');
   

include 'connect.php';
// $opdno = $_GET["opdno"];




$data=array();

$strSQL  = "SELECT
x.pla_placecode,
x.halfplace,
x.bedtypes_1 || '/' || beds_count.bedtypes_1 AS bed1,
case when beds_count.bedtypes_1 = 0 then 0 else round((x.bedtypes_1*100)/ beds_count.bedtypes_1,1) end as bed1_level,
x.bedtypes_2 || '/' || beds_count.bedtypes_2 AS bed2,
case when beds_count.bedtypes_2 = 0 then 0 else round((x.bedtypes_2*100)/ beds_count.bedtypes_2,1) end as bed2_level,
x.bedtypes_3 || '/' || beds_count.bedtypes_3 AS bed3,
case when beds_count.bedtypes_3 = 0 then 0 else round((x.bedtypes_3*100)/ beds_count.bedtypes_3,1) end as bed3_level,
x.bedtypes_4 || '/' || beds_count.bedtypes_4 AS bed4,
case when beds_count.bedtypes_4 = 0 then 0 else round((x.bedtypes_4*100)/ beds_count.bedtypes_4,1) end as bed4_level,
x.bedtypes_5 || '/' || beds_count.bedtypes_5 AS bed5,
case when beds_count.bedtypes_5 = 0 then 0 else round((x.bedtypes_5*100)/ beds_count.bedtypes_5,1) end as bed5_level,
x.bedtypes_6 || '/' || beds_count.bedtypes_6 AS bed6,
case when beds_count.bedtypes_6 = 0 then 0 else round((x.bedtypes_6*100)/ beds_count.bedtypes_6,1) end as bed6_level,
x.bedtypes_7 || '/' || beds_count.bedtypes_7 AS bed7,
case when beds_count.bedtypes_7 = 0 then 0 else round((x.bedtypes_7*100)/ beds_count.bedtypes_7,1) end as bed7_level,
x.bedtypes_8 || '/' || beds_count.bedtypes_8 AS bed8,
case when beds_count.bedtypes_8 = 0 then 0 else round((x.bedtypes_8*100)/ beds_count.bedtypes_8,1) end as bed8_level,
x.bedtypes_9 || '/' || beds_count.bedtypes_9 AS bed9,
case when beds_count.bedtypes_9 = 0 then 0 else round((x.bedtypes_9*100)/ beds_count.bedtypes_9,1) end as bed9_level,
x.bedtypes_10 || '/' || beds_count.bedtypes_10 AS bed10,
case when beds_count.bedtypes_10 = 0 then 0 else round((x.bedtypes_10*100)/ beds_count.bedtypes_10,1) end as bed10_level,
x.bedtypes_11 || '/' || beds_count.bedtypes_11 AS bed11,
case when beds_count.bedtypes_11 = 0 then 0 else round((x.bedtypes_11*100)/ beds_count.bedtypes_11,1) end as bed11_level,
x.bedtypes_12 || '/' || beds_count.bedtypes_12 AS bed12,
case when beds_count.bedtypes_12 = 0 then 0 else round((x.bedtypes_12*100)/ beds_count.bedtypes_12,1) end as bed12_level,
x.bedtypes_13 || '/' || beds_count.bedtypes_13 AS bed13,
case when beds_count.bedtypes_13 = 0 then 0 else round((x.bedtypes_13*100)/ beds_count.bedtypes_13,1) end as bed13_level,
x.bedtypes_14 || '/' || beds_count.bedtypes_14 AS bed14,
case when beds_count.bedtypes_14 = 0 then 0 else round((x.bedtypes_14*100)/ beds_count.bedtypes_14,1) end as bed14_level,
x.bedtypes_15 || '/' || beds_count.bedtypes_15 AS bed15,
case when beds_count.bedtypes_15 = 0 then 0 else round((x.bedtypes_15*100)/ beds_count.bedtypes_15,1) end as bed15_level,
x.bedtypes_16 || '/' || beds_count.bedtypes_16 AS bed16,
case when beds_count.bedtypes_16 = 0 then 0 else round((x.bedtypes_16*100)/ beds_count.bedtypes_16,1) end as bed16_level,
x.bedtypes_17 || '/' || beds_count.bedtypes_17 AS bed17,
case when beds_count.bedtypes_17 = 0 then 0 else round((x.bedtypes_17*100)/ beds_count.bedtypes_17,1) end as bed17_level,
x.bedtypes_18 || '/' || beds_count.bedtypes_18 AS bed18,
case when beds_count.bedtypes_18 = 0 then 0 else round((x.bedtypes_18*100)/ beds_count.bedtypes_18,1) end as bed18_level,
x.bedtypes_19 || '/' || beds_count.bedtypes_19 AS bed19,
case when beds_count.bedtypes_19 = 0 then 0 else round((x.bedtypes_19*100)/ beds_count.bedtypes_19,1) end as bed19_level,
x.bedtypes_20 || '/' || beds_count.bedtypes_20 AS bed20,
case when beds_count.bedtypes_20 = 0 then 0 else round((x.bedtypes_20*100)/ beds_count.bedtypes_20,1) end as bed20_level,
x.bedtypes_21 || '/' || beds_count.bedtypes_21 AS bed21,
case when beds_count.bedtypes_21 = 0 then 0 else round((x.bedtypes_21*100)/ beds_count.bedtypes_21,1) end as bed21_level,
x.bedtypes_89 || '/' || beds_count.bedtypes_89 AS bed89,
case when beds_count.bedtypes_89 = 0 then 0 else round((x.bedtypes_89*100)/ beds_count.bedtypes_89,1) end as bed89_level,
x.bedtypes_90 || '/' || beds_count.bedtypes_90 AS bed90,
case when beds_count.bedtypes_90 = 0 then 0 else round((x.bedtypes_90*100)/ beds_count.bedtypes_90,1) end as bed90_level,
x.bedtypes_98 || '/' || beds_count.bedtypes_98 AS bed98,
case when beds_count.bedtypes_98 = 0 then 0 else round((x.bedtypes_98*100)/ beds_count.bedtypes_98,1) end as bed98_level,
x.bedtypes_99 || '/' || beds_count.bedtypes_99 AS bed99,
case when beds_count.bedtypes_99 = 0 then 0 else round((x.bedtypes_99*100)/ beds_count.bedtypes_99,1) end as bed99_level
FROM
(
	SELECT
		IPDTRANS.PLA_PLACECODE,
		PLACES.HALFPLACE,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '01' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_1,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '02' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_2,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '03' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_3,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '04' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_4,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '05' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_5,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '06' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_6,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '07' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_7,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '08' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_8,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '09' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_9,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '10' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_10,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '11' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_11,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '12' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_12,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '13' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_13,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '14' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_14,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '15' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_15,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '16' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_16,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '17' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_17,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '18' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_18,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '19' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_19,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '20' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_20,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '21' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_21,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '89' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_89,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '90' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_90,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '98' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_98,
		COUNT(
			CASE
			WHEN BEDTYPES.TYPE_ID = '99' THEN
				IPDTRANS.AN
			END
		)AS bedtypes_99
	FROM
		IPDTRANS
	INNER JOIN PLACES ON IPDTRANS.PLA_PLACECODE = PLACES.PLACECODE
	LEFT OUTER JOIN beds ON IPDTRANS.bed_no = beds.code
	INNER JOIN BEDTYPES ON beds.BED1_TYPE_ID = BEDTYPES.TYPE_ID
	WHERE
		IPDTRANS.DATEDISCH IS NULL

	GROUP BY
		IPDTRANS.PLA_PLACECODE,
		PLACES.HALFPLACE
)x
INNER JOIN(
SELECT
	beds.PLA_PLACECODE,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '01' THEN
			CODE
		END
	)AS bedtypes_1,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '02' THEN
			CODE
		END
	)AS bedtypes_2,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '03' THEN
			CODE
		END
	)AS bedtypes_3,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '04' THEN
			CODE
		END
	)AS bedtypes_4,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '05' THEN
			CODE
		END
	)AS bedtypes_5,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '06' THEN
			CODE
		END
	)AS bedtypes_6,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '07' THEN
			CODE
		END
	)AS bedtypes_7,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '08' THEN
			CODE
		END
	)AS bedtypes_8,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '09' THEN
			CODE
		END
	)AS bedtypes_9,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '10' THEN
			CODE
		END
	)AS bedtypes_10,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '11' THEN
			CODE
		END
	)AS bedtypes_11,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '12' THEN
			CODE
		END
	)AS bedtypes_12,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '13' THEN
			CODE
		END
	)AS bedtypes_13,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '14' THEN
			CODE
		END
	)AS bedtypes_14,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '15' THEN
			CODE
		END
	)AS bedtypes_15,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '16' THEN
			CODE
		END
	)AS bedtypes_16,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '17' THEN
			CODE
		END
	)AS bedtypes_17,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '18' THEN
			CODE
		END
	)AS bedtypes_18,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '19' THEN
			CODE
		END
	)AS bedtypes_19,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '20' THEN
			CODE
		END
	)AS bedtypes_20,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '21' THEN
			CODE
		END
	)AS bedtypes_21,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '89' THEN
			CODE
		END
	)AS bedtypes_89,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '90' THEN
			CODE
		END
	)AS bedtypes_90,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '98' THEN
			CODE
		END
	)AS bedtypes_98,
	COUNT(
		CASE
		WHEN BEDTYPES.TYPE_ID = '99' THEN
			CODE
		END
	)AS bedtypes_99
FROM
	beds
INNER JOIN BEDTYPES ON beds.BED1_TYPE_ID = BEDTYPES.TYPE_ID
WHERE

 beds.DEL_FLAG IS NULL
GROUP BY
	beds.PLA_PLACECODE
)beds_count ON x.PLA_PLACECODE = beds_count.PLA_PLACECODE
where x.PLA_PLACECODE <> 'TEST'
ORDER BY x.PLA_PLACECODE



	

	
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
