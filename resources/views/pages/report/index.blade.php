<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8" />
    <title>Note Report</title>
    <style>
       

        html, body, div {
      font-family: nikosh;
    }


        span {
            font-size: 1.3em;
        }
        table, td, th {
  border: 0px solid black;
}
.page-break {
    page-break-after: always;
}

table {
  width: 100%;
  border-collapse: collapse;
}

        .styled-table {
            border-collapse: collapse;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);

            border: .5px solid black;
            border-collapse: collapse;
        }
        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }
        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }
        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }
        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }
        .styled-table tbody tr:last-of-type {
            border-bottom: 1px solid #009879;
        }
        .styled-table tbody tr.active-row {
            font-weight: bold;
            /* color: #009879; */
            color: black;
        }
        /* * {
            box-sizing: border-box;
        } */
        .table-border {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table.border-right {
            border-collapse: collapse;
        }
        .border-right>tr {
            border: none;
        }
        .border-right>td:nth-child(1) {
            border-right: solid 1px black;
        }



 


    </style>
</head>

<body>
    <div class="invoice-box">
   
</div>
    <h2 style="text-align:center"> <u>"নোট শীট" </u></h2>

                                                <br>                                  
                                               
                                                    <label for="name">ফাইলের নাম: </label>
                                                    {{ $module->filename }}
                                                    <br>
                                                    <br>
                                        
                                                    <label for="name">বিষয় :</label>
                                                   <u> {{ $module->name }}</u>
                                                    <br>
                                                    <br>
                                                
                                              
                                               
                                           
                                                    <label for="month"><b>বিবরণ :</b> </label>

                                                    <p> {!! $module->month !!}  
                                               
                                                      
                                                   
                                                <br>
                                                <br>
                                             
              <p align="left"> <u> <img src="{{ $module->signature_file_path }}"  width="70" height="50" /></u><br> {{ $module->created_name }} <br>
              {{ $module->designame }}   </p>                                  
                                                <br>
                                                <br>
                                               
 
        <table  cellpadding="0" cellspacing="0"> 
            

            <tr>
                <td>
                    <table>
                 
                        <tbody>
                             <tr>
                                <td>Sl</td>
                                <td>Approval Name</td>
                                <td>Signature</td>  
                                 <td align="center">Remark</td>
                                                         
                                <td>Remark Date </td>  
                                <td></td> 
                                
                            </tr> 
                            <br> 
                            <br>
                           

                                @foreach ($remarklsit as $remark)
                                <tr>                                                                
                                <td style="font-size: 12px;display:block; box-sizing:border-box; clear:both;font-family: Arial, Helvetica, sans-serif;">{{ $loop->index + 1 }}</td>  
                                <td style="font-size: 12px;display:block; box-sizing:border-box; clear:both;font-family: Arial, Helvetica, sans-serif;">{{ $remark->name }}</td>
                                <td valign="bottom"><u> <img  src="{{ $remark->approve_sign }}"  width="70" height="50" /></u></td>
                                <td align="center" style="font-size: 12px;display:block; box-sizing:border-box; clear:both;font-family: nikosh, Arial, Helvetica, sans-serif;">{{ $remark->remarks }}</td>
                            
                                <td style="font-size: 12px;display:block; box-sizing:border-box; clear:both;font-family: Arial, Helvetica, sans-serif;"> 
                                {{ \Carbon\Carbon::parse($remark->updated_at)->format('d/m/Y')}}
                             
                                </td>
                                <td></td>
                                 
                              
                               
                               
                               
                                </tr>
                                <br>
                                <br>
                                <br>
                                
                                @endforeach 
                               
                            
                          
                          
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>      
    </div>

    <div class="page-break"></div>
   <img src="{{ $module->file_path }}"  />


  

    
  
   

  
</body>
</html>
