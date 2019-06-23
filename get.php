


<?php

// $id= $_POST['param'];
    $id = $_GET['city']; 


   // $id="JAIPUR";     // $url = "https://vast-shore-74260.herokuapp.com/banks?city=MUMBAI ";
function fakeip()  
{  
    return long2ip( mt_rand(0, 65537) * mt_rand(0, 65535) );   
}  

function getdata($url,$args=false) 
{ 
    global $session; 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL,$url); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: ".fakeip(),"X-Client-IP: ".fakeip(),"Client-IP: ".fakeip(),"HTTP_X_FORWARDED_FOR: ".fakeip(),"X-Forwarded-For: ".fakeip())); 
    if($args) 
    { 
        curl_setopt($ch, CURLOPT_POST, 1); 
        curl_setopt($ch, CURLOPT_POSTFIELDS,$args); 
    } 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    //curl_setopt($ch, CURLOPT_PROXY, "127.0.0.1:8888"); 
    $result = curl_exec ($ch); 
    curl_close ($ch); 
    return $result; 
} 
$url="https://vast-shore-74260.herokuapp.com/banks?city=".$id;
$result=getdata($url);
$data = json_decode($result,true);
 $total=count($data);
foreach ($data as $key => $value)
              {
                if ($value[branch]=="" || is_null($value[branch]) ) {
                    $value[branch]=="NUL";
                }

            }
  // echo $data;
 $output = array(
        "recordsTotal"  =>  $total,
        "data"=> $data
    );
        echo json_encode($output);

 //     $sql="SELECT * FROM events where eventid='$id' ";
 //         // Associative array
 //     $result = mysqli_query($con, $sql);
 //      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 //      $name=$row['eventName'];
 //      $date=$row['eventDate'];
 //      $time=$row['eventTime'];
 //      $price=$row['eventPrice'];
 //      $location=$row['eventLocation'];
 //      $address=$row['eventAddress'];
 //      $about=$row['eventaAbout'];



 // echo json_encode(array("a"=>$name, "b"=>$date, "c" => $time, "d"=>$price, "e"=>$location, "f"=>$address, "g"=>$about, "h"=>$id ));

?>