<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        $myfile = fopen("1.txt", "r") or die("Unable to open file!");
//          $file = readfile("webdictionary.txt");
//        $num = 5;
//$myfile = fopen("1.txt", "r") or die("Unable to open file!");
//// Output one line until end-of-file
//while(!feof($myfile)) {
////   echo stripos("this Status", "Status")
//   echo get_resource_type($myfile);
//  echo fgets($myfile) . "<br>";
//}


//fclose($myfile);

$files1 = glob("*.txt");
$dir1 = "txtfiles/";


foreach ($files1 as $file1) {
    //      VITAL: Necessary to make sure variables are being reset and don't carry over to next file.
        //       Cell 1, 2) Unit # and Msg # [Msg (email) will always have which is why we dont have to 0 or blank out below in intro]
        //       Cell 5, 6) Email Date and time [Msg (email) will always have which is why we dont have to 0 or blank out in intro] 

    $createfile = '';
    
    
    $elem1 = '';
    $elem2 = '';
    $elem3 = '';
    $elem4 = '';
    $elem5 = '';
    $elem6 = '';
//    echo '<br/>';
//    echo $file1;
    
   // $lines1 = file($file1);
   // foreach ($lines1 as $line1) {
        
        
//        $result0 = preg_split('/Subject:/', $line1);
//        if(count($result0)>1){
    $file = substr($file1, 0, -4);    
    
            $result_split0 = explode(' ', $file);
//            echo '<br/>';
//            print_r($result_split0);

            

             if($result_split0[2] === "ALERT"){
                 
                 if($result_split0[4]==="IMEI"){
                     if(end($result_split0) === "-2" || end($result_split0) === "-3"){
                            $elem1 = $result_split0[4];
            //                No
                            $elem2 = $result_split0[5];
                            $elem3 = $result_split0[6];
                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];

                            $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';

                            $handle = fopen($dir1 . $createfile, 'w');
                     } else{

            //                $vary1 = $result_split0[6];
            //                $vary2 = $result_split0[1];
            //                Ser
                            $elem1 = $result_split0[4];
            //                No
                            $elem2 = $result_split0[5];
            //                $elem3 = $result_split0[6];
                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];

                            $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';

                            $handle = fopen($dir1 . $createfile, 'w'); 
                     }
                     
                        
                 } else{
                     if(end($result_split0) === "-2" || end($result_split0) === "-3"){
                            $elem1 = $result_split0[4];
                            $elem2 = $result_split0[5];
            //                No
                            $elem3 = $result_split0[6];
                            $elem4 = $result_split0[7];
                            $elem5 = $result_split0[0];
                            $elem6 = $result_split0[1];
//                            if($elem1 === "Ser") {
                                $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ' . $elem6 . ' ALERT.txt';
                                $handle = fopen($dir1 . $createfile, 'w');
//                            } elseif(elem1 === " Ser"){
//                                $elem1 = "Ser";
//                                
//                                $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ' . $elem6 . ' ALERT.txt';
//                                $handle = fopen($dir1 . $createfile, 'w');
//                            }
                            
                     } else{
//                         print_r($result_split0);
            //                $vary1 = $result_split0[6];
            //                $vary2 = $result_split0[1];
            //                Ser
                            $elem1 = $result_split0[4];
            //                No
                            $elem2 = $result_split0[5];
                            $elem3 = $result_split0[6];

                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];
                            
                            if($elem1 === "Ser") {
                                $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
                                $handle = fopen($dir1 . $createfile, 'w'); 
                            } elseif($elem1 === ""){
                                $elem1 = $result_split0[5];
                                
                                $elem2 = $result_split0[6];
                                $elem3 = $result_split0[7];

                                $elem4 = $result_split0[0];
                                $elem5 = $result_split0[1];
//                                
                                $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ALERT.txt';
                                echo $createfile;
                                $handle = fopen($dir1 . $createfile, 'w');
                            }

                             
                     }
                 }
                
                
                
//                $vary1 = $result_split0[6];
//                $vary2 = $result_split0[1];
////                Ser
//                $elem1 = $result_split0[4];
////                No
//                $elem2 = $result_split0[5];
//                $elem3 = $result_split0[6];
//                $elem4 = $result_split0[0];
//                $elem5 = $result_split0[1];
//                
//                $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ' . 'ALERT' . '.txt';
////                echo $createfile .'<br/>';
//                $handle = fopen($dir1 . $createfile, 'w');
                
//                echo gettype($createfile);
            } else {
                if($result_split0[3]==="IMEI"){
                     if(end($result_split0) === "-2" || end($result_split0) === "-3"){
//                         echo end($result_split0);
                         $elem1 = $result_split0[3];
                            $elem2 = $result_split0[4];
                            $elem3 = $result_split0[5];
                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];

                            $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem3 . ' ' . $elem4 . ' ' . $elem5 . '.txt';
                            $handle = fopen($dir1.$createfile, 'w');
                     } else {
                            $elem1 = $result_split0[3];
                            $elem2 = $result_split0[4];
//                            $elem3 = $result_split0[5];
                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];

                            $createfile = $elem1 . ' ' . $elem2 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . '.txt';
                            $handle = fopen($dir1.$createfile, 'w');
//                echo $createfile .'<br/>';
                
//                echo gettype($createfile);
                     }
                 } else{
                     if(end($result_split0) === "-2" || end($result_split0) === "-3"){
                            $elem1 = $result_split0[3];
                            $elem2 = $result_split0[4];
                            $elem3 = $result_split0[5];
                            $elem4 = $result_split0[6];
                            $elem5 = $result_split0[0];
                            $elem6 = $result_split0[1];
//                           if($elem1 === "Ser") {
                               $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ' . $elem6 . '.txt';
                                $handle = fopen($dir1.$createfile, 'w');
//                           } elseif($elem1 === " Ser"){
//                               $elem1 = "Ser";
//                               
//                               $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . ' ' . $elem6 . '.txt';
//                                $handle = fopen($dir1.$createfile, 'w');
//                           }
                            
                         
                     } else {
                            $elem1 = $result_split0[3];
                            $elem2 = $result_split0[4];
                            $elem3 = $result_split0[5];
                            $elem4 = $result_split0[0];
                            $elem5 = $result_split0[1];
                           if($elem1 === "Ser") {
                               $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . '.txt';
                                $handle = fopen($dir1.$createfile, 'w');
                           } elseif($elem1 === ""){
                               $elem1 = $result_split0[4];
                                $elem2 = $result_split0[5];
                                $elem3 = $result_split0[6];
                                $elem4 = $result_split0[0];
                                $elem5 = $result_split0[1];
//                               
                               $createfile = $elem1 . ' ' . $elem2 . ' ' . $elem3 . ' ' . 'from' . ' ' . $elem4 . ' ' . $elem5 . '.txt';
                                $handle = fopen($dir1.$createfile, 'w');
                           }
                            
                     }
                 }

                
            }

            
            
           
//////////////          
//        }
//        echo '<br/>';
//        echo $createfile;
        $contents = file_get_contents($file1);
//        echo $contents;
        $putcontent = file_put_contents($dir1.$createfile, $contents);
//        $putcontent = file_put_contents($dir1 . $createfile, $contents);
    }
//////////// 
//}

chdir('txtfiles');
$files2 = glob("*.txt");
foreach ($files2 as $file2) {
    //      VITAL: Necessary to make sure variables are being reset and don't carry over to next file.
        //       Cell 1, 2) Unit # and Msg # [Msg (email) will always have which is why we dont have to 0 or blank out below in intro]
        //       Cell 5, 6) Email Date and time [Msg (email) will always have which is why we dont have to 0 or blank out in intro]
    $var1 = '';
    $var2 = '';
    $var5 = '';
    $var6 = '';
    $var26 = '';
    $var28 = '';
    $var29 = '';
    
    
    
    $thisfile = substr($file2, 0, -4);
    $result_split1 = explode(' ', $thisfile);
//    print_r($result_split1);
    if($result_split1[0]==="IMEI"){
        $var1 = $result_split1[1];
        if($result_split1[3]==="-2" || $result_split1[3]==="-3"){
            $var2 = $result_split1[5];
            
        } else {
            $var2 = $result_split1[4];
            
        }
    } else {
        
//        if($result_split1[0]=== ''){
//            $var1 = $result_split1[3];
//            
//        }
//        
        if($result_split1[4]==="-2" || $result_split1[4]==="-3"){
            $var1 = $result_split1[2];
            $var2 = $result_split1[6];
        } else {
            $var1 = $result_split1[2];
            $var2 = $result_split1[5];
        }
    }
    
    
    $lines2 = file($file2);
    foreach ($lines2 as $line2) {       
          
          
         $result3= preg_split('/Date:/', $line2);
          if(count($result3)>1){
        
              $result_split3=explode(' ',$result3[1]);
              array_shift($result_split3);
//                print_r($result_split3);
            
//                $months = array("January"=>"01", "February"=>"02", "March"=>"03", "April"=>"04", "May"=>"05", "June"=>"06","July"=>"07", "August"=>"08", "September"=>"09", "October"=>"10", "November"=>"11", "December"=>"12");
//                $month = $months[$result_split3[1]];
//
//                $day = rtrim($result_split3[2], ",");
//                
//                $year = $result_split3[3];
//                
//                $emaildateFormat = $month . '/' . $day . '/' . $year;
                $var5 = $result_split3[0];
                
                $time = $result_split3[1];
                $daynight = $result_split3[2];
                $emailTime = $time . " " . $daynight;
                $var6 = $emailTime;
                
          }
          
          
          
          $result8= preg_split('/Battery/', $line2);
          if(count($result8)>1){
              $result_split8=explode(' ', $result8[1]);

              
              if($result_split8[2] === "mV:"){
                  $voltlvl = explode(',', $result_split8[3]);
                  $var26 = $voltlvl[0];
              } else if($result_split8[0] === ":"){
                 $voltlvl = substr($result_split8[1], 0, -3);
                $var26 = $voltlvl;
//                echo $var26;
              } else {
                $voltlvl = substr($result_split8[5], 0, -3);
                $var26 = $voltlvl;
//                echo $var26;
              }

              
          }
          

          
          
          
          
//        Cell 28)
          $result9= preg_split('/connect time/', $line2);
          if(count($result9)>1){
              $result_split9=explode(' ', $result9[1]);

              $var28 = $result_split9[1];
          
//           print_r($var28);
//           echo "<br/>";
          } 
          $result9_2= preg_split('/Conn time/', $line2);
          if(count($result9_2)>1){
              $result_split9_2=explode(' ', $result9_2[1]);
              
//              print_r($result_split9_2);

              $var28 = $result_split9_2[1];
          
//           print_r($var28);
//           echo "<br/>";
          }
          
          
          
          
          
          
//       Cell 29)
          $result10= preg_split('/RSSI:/', $line2);
          if(count($result10)>1){
              $result_split10=explode(' ', $result10[1]);
          
              $var29 = $result_split10[1];
              
//           print_r($var29);
//           echo "<br/>";
          } 
          
          
          
          
          
    }
//    echo $var1;
        echo '<table><tr><td>';
        echo $var1;
        echo '</td><td>';
//        echo $var2;
        echo '</td><td>';
//        echo $var3;
        echo '</td><td>';
//        echo $var4;
        echo '</td><td>';
///////////////////////////////
        echo $var2;
        echo '</td><td>';
///////////////////////////////
        echo $var5;
        echo '</td><td>';
        echo $var6;
        echo '</td><td>';
//        echo $var7;
        echo '</td><td>';
//        echo $var8;
//        echo '</td><td>';
//        echo $var9;
//        echo '</td><td>';
//        echo $var10;
//        echo '</td><td>';
//        echo $var11;
//        echo '</td><td>';
//        echo $var12;
//        echo '</td><td>';
//        echo $var13;
//        echo '</td><td>';
//        echo $var14;
//        echo '</td><td>';
//        echo $var15;
//        echo '</td><td>';
//        echo $var16;
//        echo '</td><td>';
//        echo $var17;
//        echo '</td><td>';
//        echo $var18;
//        echo '</td><td>';
//        echo $var20;
//        echo '</td><td>';
//        echo $var19;
//        echo '</td><td>';
//        echo $var21;
//        echo '</td><td>';
//        echo $var22;
//        echo '</td><td>';
//        echo $var24;
//        echo '</td><td>';
//        echo $var23;
//        echo '</td><td>';
//        echo $var25;
//        echo '</td><td>';
        echo $var26;
        echo '</td><td>';
//        echo $var27;
//        echo '</td><td>';
        echo $var29;
        echo '</td><td>';
        echo $var28;
        echo '</td></tr></table>';
        

}



//        echo '<table><tr><td>';
//        echo $num;
//        echo '</td><td>';
//        echo $num;
//        echo '</td></tr></table>'
        ?>
    </body>
</html>
