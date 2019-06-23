
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
<style type="text/css">
  .setborder{    border-radius: 50px;
    box-shadow: 2px 2px 4px grey;
    margin: 3%;
    border: 1px solid #c1b3b3;
    padding: 3%;
    background-image: linear-gradient(#f9f8fb, #f7f6fb);}
.logo1{
    margin-top: 2%;
}
.logo{
    border-radius: 10px;
}
.heading{
    color: #43438c;

}
.setmodal{
    text-align: center;
}
.setrow{
    margin:auto;
}
.fa-times{
    cursor: pointer;
}
.modalcont{
    float: unset;
    text-align : center;
    background-color:#e2e2e2 !important;
}
.dark-modal .modal-content {
    background-color: #292b2c;
    color: white;
  }
  .dark-modal .close {
    color: white;
  }
  .light-blue-backdrop {
    background-color: #5cb3fd;
  }
.logo1 >img{
    border-radius: 30px;
    width: 110%;

}
.nothanks{
    font-size: 20px;
    margin: auto;
    text-align: center;
    color: #3f4df1;
    font-weight: 600;
    cursor: pointer;
}
.nothanks1{
  text-align: center;
}
.logo2{
    margin-top:5%;
     
}
h3{
    text-align: center;
    font-size: 22px;
    font-weight: 600;
    color: #43438c;
}
h4{
    color: #43438c;
    display: initial;
    font-size: 20px;
    font-weight: 500;
}


.text1{
    font-weight: 600;
}
.text2{
    font-size: 14px;
}
.text3{
    font-size: 14px;
    color : blue;
    margin:auto;
}
.drop{
    margin-top: 3%;
    margin-bottom: 3%;
  }
  .heading{
    margin-top: 2%;

}
.heading1{
   text-align: center;
    color: #0a0a0a;
    font-weight: 700;
}
.head{
    cursor: pointer;
    padding-left: 0px;
}
.icon{
    cursor: pointer;
}
.logo{
    
}
.border{
    width: 117%;
    margin-left: -9%;
}
.numberrobot{
    width: 50%;
}
#bank{
  display: : none;
}
</style>

</head>
<body style="overflow-x: hidden; background-image: linear-gradient(#f9f8fb, #f7f6fb);">
  <div class="container drop" >
    <div class="row heading">
        <div class="col-md-1" >
            <img class="img-fluid icon " src="logo.svg">
        </div>
        <div class="col-md-8 head">
            <h2 class="heading1">Fyle Bank Search Task</h2>
        </div>
      </div>
      <hr class="border">
</div>
<div class="container" id="bank">
  <div class="row">
    <div class="col-md-6 mx-auto setborder">
      <div class="row">
          <div class="col-md-8 mx-auto logo1">
            <h3 id="bank_name"> </h3>
          </div>
      </div>
      <div class="row">
            <div class="col-md-12 mx-auto logo2">
              <h4>Ifsc code: </h4>
              <h4 id="ifsc"></h4>
            </div>
        </div>
          <div class="row">
            <div class="col-md-12 mx-auto logo2">
              <h4>Bank Id :</h4>
              <h4 id="bankid"></h4>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12 mx-auto logo2">
            <h4>Branch :</h4>
            <h4 id="branch">  </h4>
          </div>
      </div>
      <div class="row">
        <div class="col-md-12 mx-auto logo2">
          <h4>Address :</h4>
          <h4 id="address">  </h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mx-auto logo2">
          <h4>City :</h4>
          <h4 id="city"></h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mx-auto logo2">
          <h4>District :</h4>
          <h4 id="district"></h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mx-auto logo2">
          <h4>State :</h4>
          <h4 id="state"> </h4>
        </div>
      </div>
    <div class="row">
        <div class="col-md-12 mx-auto nothanks1 logo2">
               <span class="nothanks" id="goback"> <-- Go back </span>  
        </div>
    </div>
    </div>
  </div>  
</div>
<div class="container drop" id="dropdown"  >
   <div class="row ">
      <div class="col-md-12 " >
          <select name="select" id="select1" class="form-control">
              <option value="">Select city</option>  
              <option value="MUMBAI" >MUMBAI</option>
               <option value="JAIPUR" selected>JAIPUR</option>
               <option value="DELHI">DELHI</option>
               <option value="BANGALORE">BANGALORE</option>
               <option value="ALWAR">ALWAR</option>

           
           </select>
    </div>
    </div>
     </div>
     <div class="container" id="banklist"> 
       <div class="row">
            <div class="col-md-12">  
               <table id="usetTable" class="display table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>ifsc</th>
                    <th>bank_id</th>
                    <th>branch</th>
                    <th>address</th>
                    <th>city</th>
                    <th>district</th>
                    <th>state</th> 
                    <th>bank_name</th>
                 </tr>
              </thead> 
            
            </table>
<!-- <table id="useTable" class="display">
    <thead>
            <tr  >
                <th>ifsc</th>
                <th>bank_id</th>
                <th>branch</th>
                <th>address</th>
                <th>city</th>
                <th>district</th>
                <th>state</th> 
                <th>bank_name</th>
            </tr>
        </thead>
    <tbody>
        <?php if(!empty($data)) { ?>
            <?php foreach($data as $key => $value) { ?>
                <tr>
                    <td><?php echo $value[ifsc]; ?></td>
                    <td><?php echo $value[bank_id]; ?></td>
                    <td><?php echo $value[address]; ?></td>
                    <td><?php echo $value[branch]; ?></td>
                    <td><?php echo $value[city]; ?></td>
                    <td><?php echo $value[district]; ?></td>
                    <td><?php echo $value[state]; ?></td>
                    <td><?php echo $value[bank_name]; ?></td>
                </tr>
            <?php } ?>
        <?php } ?>
    </tbody>
</table> -->
            </div>        
       </div>
    </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
    <script type="text/javascript">
                    $(document).ready(function(){                  
                    $('#goback').click(function() {
                          $("#bank").hide();
                    $('#banklist').show();
                    $('#dropdown').show();                    
                  });
                });

                </script>

    <script type="text/javascript">
       $(document).ready(function() {
              $("#bank").hide();
              var val="JAIPUR";
                var table = $('#usetTable').DataTable({

                  "scrollX": true,
                  "asStripeClasses": [],
                  ajax:{
                    url: './get.php?city='+val,
                  },
                  columns: [
                    { data: 'ifsc' },
                    { data: 'bank_id' },
                    { data: 'branch' },
                    { data: 'address' },
                    { data: 'city' },
                    { data: 'district' },
                    { data: 'state' },
                    { data: 'bank_name' },

                ],
                  "dataSrc" : "" ,
                  deferRender:    true,
                  
                  "processing":true,  

                  "rowCallback": function( row, data ) {
                    if ( data.ifsc == "ALLA0210177" || data.ifsc == "ALLA0210179"  || data.ifsc == "ABHY0065001" || data.ifsc == "ABHY0065003" || data.ifsc == "ABNA0100327") {
                      $('td:eq(0)', row).css('background-color', '#f3f384');
                      $('td:eq(0)', row).css( 'font-weight', '600');

                    }
                  }
                //   "fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                //     if ( aData[0] == "ALLA0210177" )
                //     {
                //         $('td', nRow).css('background-color', 'Red');
                //     }
                //     else if ( aData[0] == "ALLA0210179" )
                //     {
                //         $('td', nRow).css('background-color', 'Orange');
                //     }
                // }

                   
              });
                             
                  
           
                    $('#usetTable tbody').on('click', 'tr', function () {
                    var data = table.row(this).data();
                     $("#bank").show();
                    $('#banklist').hide();
                    $('#dropdown').hide();
                    $("#ifsc").text(data.ifsc);
                        $("#bank_name").text(data.bank_name);
                        $("#branch").text(data.branch);
                        $("#bankid").text(data.bank_id);
                        $("#city").text(data.city);
                        $("#district").text(data.district);
                        $("#state").text(data.state);
                        $("#address").text(data.address);
                     console.log( data.ifsc);
                                            } );
              // $('#useTable tbody').on( 'click', 'tr', function () {
           
          
              //       console.log('click');
            
              //    // $('#dynamic-table tbody').on('click', 'tr', function () {
              //    //    var data = table.row(this).data();
              //    //    //console.log(data[1]);
              //    //    window.location = data[1];
              //   });
          });

    </script>
    <script type="text/javascript">
                    $(document).ready(function(){
                    
                  
                    $('#select1').click(function() {
                      console.log("click");
                     var val= $(this).val();
                         var ajax_source = './get.php?city='+val ;
                         var table = $("#usetTable").DataTable(); // get api instance
                          // load data using api
                          table.ajax.url(ajax_source).load();

                      // $.ajax({
                      //   type: "POST",
                      //   url: "./get1.php",
                      //   data: { param: val }
                      // }).done(function(msg) {

                      //   $('#usetTable').dataTable().fnClearTable();
                      //   $('#usetTable').dataTable().fnAddData(msg);
                      //   $('#useTable').DataTable().ajax.reload();


                        // console.log(msg);
                        // var obj=JSON.parse(msg);
                        // $("#aboutevent").text(obj.g);
                        // $("#aboutname").text(obj.a);
                        // $("#abouttime").text(obj.c);
                        // $("#aboutprice").text(obj.d);
                        // $("#aboutdate").text(obj.b);
                        // $("#aboutaddress").text(obj.f);
                        // $(".bookticket").attr('id' , obj.h);  // alert( "Data Saved: " + msg );
                     // });
                      
                  });
                });

                </script>
    <!-- <script>
        $(document).ready(function() {
            $('#usetTable').DataTable({
               "scrollX": true,
      "pagingType": "numbers",
        "processing": true,
        "serverSide": true,
        "ajax": "get.php" , 
 
              columns: [
              { data: 'ifsc' },
              { data: 'bank_id' },
              { data: 'branch' },
              { data: 'address' },
              { data: 'city' },
              { data: 'district' },
              { data: 'state' },
              { data: 'bank_name' },
          ]
                  });

        } );
    </script> -->
</body>
</html>