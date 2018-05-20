
<?php
 $a = null;
 $b = null;
 $c = null;
 
    if(isset($_POST['a'])){ $a = $_POST['a']; } 
    if(isset($_POST['b'])){ $b = $_POST['b']; } 
    if(isset($_POST['c'])){ $c = $_POST['c']; }


if($a!=0 && is_numeric($a) && is_numeric($b) && is_numeric($c)) //α διαφορο του 0 και τα υπόπλοιπα αριθμοί
{
$D=pow($b,2)-4*$a*$c;  //η διακρινουνα ισουται με το τετραγωνο του β - 4*α*γ

echo "".'<br>'; //αφηνουμε κενο
echo "$a x<sup>2</sup> + $b x + $c=0".'<br><br>'; //μς εμφανιζει την εξισωση που θελουμε να λυσουμε


echo  "Δ=($b)<sup>2</sup>-4*($a)*($c)".'<br>';//step1 μας εμφανιζει την διακρινουσα
echo '&hArr;'."Δ=".pow($b,2)."-4*(".$a*$c.')<br>';//step2  τμηματικα πράξεις κατα προτεραιοτητα



echo '&hArr;'."Δ=".$D.'<br><br>';//result



    if($D>"0") 
        {
        
        echo "x=(-($b)+".'&radic;'."$D)/2*$a".'&nbsp;';
                                                                  //ο τύπος των ριζών 
        echo "ή".'&nbsp;'."x=(-($b)-".'&radic;'."$D)/2*$a".'<br>';   
        
        
        
        
        echo '&hArr;'."x=".$x=(-$b+sqrt($D))*1/2*1/$a.'&nbsp;';
                                                                   //το αποτέλεσμα
        echo "ή".'&nbsp;'."x=".$x=(-$b-sqrt($D))*1/2*1/$a.'<br>'; 
        }
    elseif($D=="0")
        {
            echo "x=-($b)/2*($a)".'<br>';    //step1
          
           
            
            
            echo '&hArr;'."x=".$x=-$b*1/2*1/$a.'<br>';//result
        }
    else
        {
            echo "Είναι αδύνατη,δεν υπάρχει τιμή στους πραγματικούς αριθμούς...".'<br>';//result
        }

}

else if(is_null($a)  && is_null($b) && is_null($c)) //αμα δεν εισάγουμε κάποια τιμή μην κάνεις κατι 
{
   
}

else  //σε οποιαδηποτε αλλη περιπτωση "λάθος εισαγωγη δεδομενων"

{

    echo '<script type="text/javascript">alert("Λάθος εισαγωγή δεδομένων..");</script>';

}


?>
