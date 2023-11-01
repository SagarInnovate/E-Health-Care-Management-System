<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>

    <title>Contact</title>
    <link rel="stylesheet" href="css/Contact.css" media="screen">
    <?php
    require "././conn.php";
    include "layouts/header.php";
    $sql = "SELECT * FROM patients";
    $result = mysqli_query($conn, $sql);
    $color='';

    ?>
    <section class="u-align-center u-clearfix u-section-1" id="sec-4a73">
        <h2 class="u-custom-font u-font-roboto-condensed u-subtitle u-text u-text-1">All Patients Data</h2>
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
            <?php 
            if ($result) {
            if (mysqli_num_rows($result) > 0) { ?>

            <table class="u-table-entity u-table-entity-1">
                <colgroup>
                    <col width="0.8%">
                    <col width="14.6%">
                    <col width="3.4%">
                    <col width="5.5%">
                    <col width="14.5%">
                    <col width="2.8%">
                    <col width="5.2%">
                    <col width="12.3%">
                    <col width="13.5%">
                    <col width="4.2%">
                    <col width="8.200000000000003%">
                    <col width="15.200000000000003%">
                </colgroup>

                <thead class="u-palette-4-base u-table-header u-table-header-1">
                    <tr style="height: 40px;">
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">ID</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">name</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Date</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Age</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">phone</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">B.G</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Gender</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">A, Doctor</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Disease</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Bill</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">status</th>
                        <th class="u-border-1 u-border-palette-4-base u-table-cell">Action</th>
                    </tr>
                </thead>
                <tbody class="u-table-body">
                    <?php   while ($row = mysqli_fetch_assoc($result)) {

if($row['status']=='active'){
    $color="green";
  }elseif($row['status']=='discharged'){
    $color="red";
  }else{
    $color="";
  }
                      
                   echo ' <tr style="height: 40px;">
                        <td class="u-border-1 u-border-grey-30 u-grey-5 u-table-cell u-table-cell-13">'.$row['id'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-first-column u-grey-5 u-table-cell u-table-cell-14"><a href="panel.php?id='.$row['id'].'&action=history">'.$row['name'].' </a></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['date'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['age'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['phone'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['BG'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['gender'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['A_Doctor'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['diagnosis'].'</td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">'.$row['total_bill'].'</td>
                        <td  class="u-border-1 u-border-grey-30 u-table-cell"><span style="padding: 10px; background-color: '.$color.';color: white;">' .$row['status'].'</span></td>
                        <td class="u-border-1 u-border-grey-30 u-table-cell">
                            <a class="u-border-none u-btn u-button-style u-custom-color-1 u-hover-palette-2-base u-btn-1" href="#">Edit</a>
                        </td>
                </tr>';
                    
                    }
                    ?>


                    
                </tbody>
            </table>
           
           <?php 
             }else {
                echo "No records found.";
              }
            
              // Free the result set
              mysqli_free_result($result);
            } else {
              echo "Error retrieving records: " . mysqli_error($conn);
            }
            
            ?>
        </div>
    </section>



    </body>

</html>