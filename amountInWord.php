<?php
        function num2bangla($number)
        {
            if (($number < 0) || ($number > 999999999))
            {
                return "নাম্বারটি অতিরিক্ত বড়";
            }
            elseif (!is_numeric($number))
            {
                return "বৈধ নাম্বার নয়";
            }
            
            $Koti = floor($number / 10000000); 		/* Koti */
            //echo "Koti:".$Koti."</br>";
            
            $number -= $Koti * 10000000;
            //echo "number:".$number."</br>";
            
            $Lakh = floor($number / 100000);  		/* lakh  */
            //echo "Lakh:".$Lakh."</br>";
            
            $number -= $Lakh * 100000;
            //echo "number:".$number."</br>";
            
            $Thousands = floor($number / 1000);     /* Thousands (kilo) */
            //echo "Thousands:".$Thousands."</br>";
            
            $number -= $Thousands * 1000;
            //echo "number:".$number."</br>";
            
            $Hundreds = floor($number / 100);      /* Hundreds (hecto) */
            //echo "Hundreds:".$Hundreds."</br>";
            
            $number -= $Hundreds * 100;
            //echo "number:".$number."</br>";
            
            $Tens = floor($number / 10);       		/* Tens (deca) */
            //echo "Tens:".$Tens."</br>";
            
            $Ones = $number % 10;               	/* Ones */
            //echo "Ones:".$Ones."</br>";
            
            $res = "";
            if ($Koti)
            {
                $res .= num2bangla($Koti) . " কোটি ";
            }
            if ($Lakh)
            {
                $res .= num2bangla($Lakh) . " লাখ";
            }
            if ($Thousands)
            {
                $res .= (empty($res) ? "" : " ") .
                    num2bangla($Thousands) . " হাজার";
            }
            if ($Hundreds)
            {
                $res .= (empty($res) ? "" : " ") .
                    num2bangla($Hundreds) . " শত";
            }
            $hund = ["", "এক", "দুই", "তিন", "চার", "পাঁচ", "ছয়", "সাত", "আট", "নয়", "দশ",
                "এগার", "বার", "তের", "চৌদ্দ", "পনের", "ষোল", "সতের", "আঠার", "ঊনিশ", "বিশ",
                "একোশ", "বাইশ", "তেইশ", "চব্বিশ", "পঁচিশ", "ছাব্বিশ", "সাতাশ", "আঠাশ", "ঊনত্রিশ", "ত্রিশ",
                "একত্রিশ", "বত্রিশ", "তেত্রিশ", "চৌত্রিশ", "পয়ত্রিশ", "ছত্রিশ", "সতত্রিশ", "আটত্রিশ", "ঊনচল্লিশ", "চল্লিশ",
                "একচল্লিশ", "বেয়াল্লিশ", "তেতাল্লিশ", "চোয়াল্লিশ", "পঁয়তাল্লিশ", "ছেচল্লিশ", "সতচল্লিশ", "আটচল্লিশ", "ঊনপঞ্চাশ", "পঞ্চাশ",
                "একান্ন", "বাহান্ন", "তেপান্ন", "চোয়ান্ন", "পঁঞ্চান্ন", "ছাপ্পান্ন", "সাতান্ন", "আটান্ন", "ঊনষাট", "ষাট",
                "একষট্টি", "বাষট্টি", "তেষট্টি", "চৌষট্টি", "পঁয়ষট্টি", "ছেষট্টি", "সতাষট্টি", "আটষট্টি", "ঊনসত্তর", "সত্তর",
                "একাত্তর", "বাহাত্তর", "তেহাত্তর", "চোয়াত্তর", "পঁচাত্তর", "ছিয়াত্তর", "সাতাত্তর", "আটাত্তর", "ঊনআশি", "আশি",
                "একাশি", "বিরাশি", "তিরাশি", "চোরাশি", "পঁচাশি", "ছিয়াশি", "সাতাশি", "অটাশি", "ঊননব্বই", "নব্বই",
                "একানব্বই", "বিরানব্বই", "তিরানব্বই", "চুরানব্বই", "পঁচানব্বই", "ছিয়ানব্বই", "সাতানব্বই", "আটানব্বই", "নিরানব্বই", "একশ"];

            if ($Tens || $Ones)
            {
                if (!empty($res))
                {
                    $res .= " ";
                }
                $res .= $hund[$Tens * 10 + $Ones];
            }
            if (empty($res))
            {
                $res = "শূন্য";
            }
            return $res;
        }

            $chequeNow = 987654321; 
            echo "chequeNow: ".$chequeNow."</br>";
            
            echo $chequeNow ." = ". num2bangla($chequeNow);

        ?>