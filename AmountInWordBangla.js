function num2bangla(number)
{
    if ((number < 0) || (number > 999999999))
    {
        return "নাম্বারটি অতিরিক্ত বড়";
    } 
    else if (isNaN(number))
    {
        return "বৈধ নাম্বার নয়";
    }
    
    var Koti = Math.floor(number / 10000000); 		/* Koti */    
    number -= Koti * 10000000;
    console.log("Koti: "+Koti);
    
    var Lakh = Math.floor(number / 100000);  		/* lakh  */    
    console.log("Lakh: "+Lakh);
    number -= Lakh * 100000;
    
    var Thousands = Math.floor(number / 1000);     /* Thousands (kilo) */    
    number -= Thousands * 1000;
    
    var Hundreds = Math.floor(number / 100);      /* Hundreds*/    
    number -= Hundreds * 100;
    
    var Tens = Math.floor(number / 10);       		/* Tens*/    
    var Ones = number % 10;               	/* Ones */
    
    var res = "";
    if (Koti>0)
    {
        res += num2bangla(Koti) +" কোটি ";
    }
    if (Lakh>0)
    {
        res += num2bangla(Lakh) +" লাখ";
    }
    if (Thousands>0)
    {
        res += (res=="" ? "" : " ") +num2bangla(Thousands) +" হাজার";
    }
    if (Hundreds>0)
    {
        res += (res=="" ? "" : " ") +num2bangla(Hundreds) +" শত";
    }
    console.log("res: "+res);


    var hund = ["", "এক", "দুই", "তিন", "চার", "পাঁচ", "ছয়", "সাত", "আট", "নয়", "দশ",
        "এগার", "বার", "তের", "চৌদ্দ", "পনের", "ষোল", "সতের", "আঠার", "ঊনিশ", "বিশ",
        "একোশ", "বাইশ", "তেইশ", "চব্বিশ", "পঁচিশ", "ছাব্বিশ", "সাতাশ", "আঠাশ", "ঊনত্রিশ", "ত্রিশ",
        "একত্রিশ", "বত্রিশ", "তেত্রিশ", "চৌত্রিশ", "পয়ত্রিশ", "ছত্রিশ", "সতত্রিশ", "আটত্রিশ", "ঊনচল্লিশ", "চল্লিশ",
        "একচল্লিশ", "বেয়াল্লিশ", "তেতাল্লিশ", "চোয়াল্লিশ", "পঁয়তাল্লিশ", "ছেচল্লিশ", "সতচল্লিশ", "আটচল্লিশ", "ঊনপঞ্চাশ", "পঞ্চাশ",
        "একান্ন", "বাহান্ন", "তেপান্ন", "চোয়ান্ন", "পঁঞ্চান্ন", "ছাপ্পান্ন", "সাতান্ন", "আটান্ন", "ঊনষাট", "ষাট",
        "একষট্টি", "বাষট্টি", "তেষট্টি", "চৌষট্টি", "পঁয়ষট্টি", "ছেষট্টি", "সতাষট্টি", "আটষট্টি", "ঊনসত্তর", "সত্তর",
        "একাত্তর", "বাহাত্তর", "তেহাত্তর", "চোয়াত্তর", "পঁচাত্তর", "ছিয়াত্তর", "সাতাত্তর", "আটাত্তর", "ঊনআশি", "আশি",
        "একাশি", "বিরাশি", "তিরাশি", "চোরাশি", "পঁচাশি", "ছিয়াশি", "সাতাশি", "অটাশি", "ঊননব্বই", "নব্বই",
        "একানব্বই", "বিরানব্বই", "তিরানব্বই", "চুরানব্বই", "পঁচানব্বই", "ছিয়ানব্বই", "সাতানব্বই", "আটানব্বই", "নিরানব্বই", "একশ"];

    if (Tens || Ones)
    {
        if (res!="")
        {
            res += " ";
        }
        res += hund[Tens * 10 + Ones];
    }
    if (res!="")
    {
        res = "শূন্য";
    }
    return res;
}

var chequeNow = 987654321; 
console.log(chequeNow)

console.log(chequeNow +" = "+num2bangla(chequeNow));
