<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Student Application Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

        <style type="text/css" media="screen">
        @import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      
      *{
          margin:0;
          padding:0;
          box-sizing:border-box;
          color:black;
      }
   
      td {
    width: 50%; /* Each cell will take up half the row */
    text-align: left; /* Optional: Center the text */
    padding: 10px; /* Optional: Add padding for better spacing */
    font-weight: bold;
text-transform: uppercase;

}
tr td:nth-child(2) {
    /* Your styles here */
    text-align: right;
    font-weight: normal;
 
}
        tr td {

    font-family: "Lato", sans-serif;  /* Top padding */
 padding:10px;
    border:2px solid black;
}
.heading_tr{
    padding-top: 20px;  
    font-family: "Poppins", sans-serif; /* Top padding */
    padding-bottom: 20px; /* Bottom padding */  
    font-size: 20px;
    text-align: left;
    text-decoration: underline;
    text-transform: uppercase;

   
}
.clearfix{
    overflow:auto;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

        </style>
    </head>

    <body>
        
         <div class="clearfix" style="width:100%; margin-bottom:15px">
             <div style="border:2px solid black;float: left; padding:5px 0; margin-right:10px">
                 
                   <img src="{{$invoice->logo}}" width="135px"  alt>
             </div>
          
          
       
            <div style="display:inline;border:2px solid black;width:78%;float:left">
                 <h1 style="text-align:center;margin:0;padding:0;margin-top:10px;">Kalyankari Prathishthan</h1>
                <p style="text-align:center;margin:0; margin-bottom:10px;padding:0;">
                    Maherghar Mangal Office, Khutwad Nagar,<br>
                    Satpur ITI. Behind, Trimbak Road,<br> 
                    Nashik-422008
                </p>
                   <h4 style="text-align:center;margin:0; padding:0;margin-bottom:10.5px">SCHOLORSHIP APPLICATION FORM</h4>
            </div>
         
        </div>

     


   <hr>
   
   <p style="text-align:right"><strong>Date: </strong>{{" ".$invoice->buyer->submitted_date}}</p>


        <table>
            <tr>
                <th colspan="2" class="heading_tr">Student Information</th>
            </tr>
            <tr>
                <td><label for="student_fullname">Student Photo</label></td>
                <td>
                    <img src="{{asset('storage/'.$invoice->buyer->student_photo)}}" width="150px" height="150px"/>
                </td>
            </tr>
            <tr>
                <td><label for="student_fullname">Full Name</label></td>
                <td>{{$invoice->buyer->student_fullname}}</td>
            </tr>
            <tr>
                <td><label for="student_dob">Date of Birth</label></td>
                <td>{{$invoice->buyer->student_dob}}</td>
            </tr>
            <tr>
                <td><label for="student_gender">Gender</label></td>
                <td>{{$invoice->buyer->student_gender}}</td>
            </tr>
            <tr>
                <td><label for="student_email">Email</label></td>
                <td>{{$invoice->buyer->student_email}}</td>
            </tr>
            <tr>
                <td><label for="student_mobile">Mobile</label></td>
                <td>{{$invoice->buyer->student_mobile}}</td>
            </tr>
            <tr>
                <td><label for="student_aadhar">Aadhar Number</label></td>
                <td>{{$invoice->buyer->student_aadhar}}</td>
            </tr>
            <tr>
                <td><label for="student_country">Country</label></td>
                <td>{{$invoice->buyer->student_country}}</td>
            </tr>
            <tr>
                <td><label for="student_state">State</label></td>
                <td>{{$invoice->buyer->student_state}}</td>
            </tr>
            <tr>
                <td><label for="student_city">City</label></td>
                <td>{{$invoice->buyer->student_city}}</td>
            </tr>
            <tr>
                <td><label for="student_address">Address</label></td>
                <td>{{$invoice->buyer->student_address}}</td>
            </tr>
            <tr>
                <td><label for="student_zip">Zip Code</label></td>
                <td>{{$invoice->buyer->student_zip}}</td>
            </tr>

            <tr>
                <th colspan="2" class="heading_tr">Guardian Information</th>
            </tr>
            <tr>
                <td><label for="parent_fullname">Parent Full Name</label></td>
                <td>{{$invoice->buyer->parent_fullname}}</td>
            </tr>
            <tr>
                <td><label for="parent_mobile">Parent Mobile</label></td>
                <td>{{$invoice->buyer->parent_mobile}}</td>
            </tr>
            <tr>
                <td><label for="parent_country">Parent Country</label></td>
                <td>{{$invoice->buyer->parent_country}}</td>
            </tr>
            <tr>
                <td><label for="parent_state">Parent State</label></td>
                <td>{{$invoice->buyer->parent_state}}</td>
            </tr>
            <tr>
                <td><label for="parent_city">Parent City</label></td>
                <td>{{$invoice->buyer->parent_city}}</td>
            </tr>
            <tr>
                <td><label for="parent_address">Parent Address</label></td>
                <td>{{$invoice->buyer->parent_address}}</td>
            </tr>
            <tr>
                <td><label for="parent_zip">Parent Zip Code</label></td>
                <td>{{$invoice->buyer->parent_zip}}</td>
            </tr>
            <tr>
                <td><label for="parent_source_income">Source of Income</label></td>
                <td>{{$invoice->buyer->parent_source_income}}</td>
            </tr>
            <tr>
                <td><label for="parent_income">Parent Income</label></td>
                <td>{{$invoice->buyer->parent_income}}</td>
            </tr>
            <tr>
                <th colspan="2" class="heading_tr">
                    Secondary School Related Information
                </th>
            </tr>
            <tr>
                <td><label for="is_ssc">SSC Passed</label></td>
                <td>{{$invoice->buyer->is_ssc ? "yes":"no"}}</td>
            </tr>
            @if ($invoice->buyer->is_ssc)
            <tr>
                <td><label for="obtain_mark_ssc">SSC Marks Obtained</label></td>
                <td>{{$invoice->buyer->obtain_mark_ssc}}</td>
            </tr>
            <tr>
                <td><label for="total_mark_ssc">Total SSC Marks</label></td>
                <td>{{$invoice->buyer->total_mark_ssc}}</td>
            </tr>
            <tr>
                <td><label for="percentage_ssc">SSC Percentage</label></td>
                <td>{{$invoice->buyer->percentage_ssc}}</td>
            </tr>
            @else
            
            <tr>
                <td><label for="current_std_below_ssc">Current Standard (Below SSC)</label></td>
                <td>{{$invoice->buyer->current_std_below_ssc}}</td>
            </tr>
            <tr>
                <td><label for="specify_medium_below_ssc">Medium of Education (Below SSC)</label></td>
                <td>{{$invoice->buyer->specify_medium_below_ssc}}</td>
            </tr>
            <tr>
                <td><label for="current_fee_structure_below_ssc">Fee Structure (Below SSC)</label></td>
                <td>{{$invoice->buyer->current_fee_structure_below_ssc}}</td>
            </tr>

            @endif

            @if($invoice->buyer->is_ssc)
            <tr>
                <th colspan="2" class="heading_tr">
                     Higher Secondary School Related Information 
                </th>
            </tr>
            <tr>
                <td><label for="is_hsc">HSC/Diploma Passed</label></td>
                <td>{{$invoice->buyer->is_hsc?"yes":"no"}}</td>
            </tr>
            @if($invoice->buyer->is_hsc)
            <tr>
                <td><label for="obtain_mark_hsc">HSC/Diploma Marks Obtained</label></td>
                <td>{{$invoice->buyer->obtain_mark_hsc}}</td>
            </tr>
            <tr>
                <td><label for="total_mark_hsc">Total HSC/Diploma Marks</label></td>
                <td>{{$invoice->buyer->total_mark_hsc}}</td>
            </tr>
            <tr>
                <td><label for="percentage_hsc">HSC/Diploma Percentage</label></td>
                <td>{{$invoice->buyer->percentage_hsc}}</td>
            </tr>
            @else
            <tr>
                <td><label for="current_std_hsc_course">Current Standard (HSC)</label></td>
                <td>{{$invoice->buyer->current_std_hsc_course}}</td>
            </tr>
            <tr>
                <td><label for="specify_hsc_course_name">HSC Course Name</label></td>
                <td>{{$invoice->buyer->specify_hsc_course_name}}</td>
            </tr>
            <tr>
                <td><label for="current_hsc_term">Current HSC Term</label></td>
                <td>{{$invoice->buyer->current_hsc_term}}</td>
            </tr>
            <tr>
                <td><label for="current_hsc_term_fee_structure">Fee Structure (HSC Term)</label></td>
                <td>{{$invoice->buyer->current_hsc_term_fee_structure}}</td>
            </tr>
            @endif
            @endif

            @if($invoice->buyer->is_ssc && $invoice->buyer->is_hsc)
            <tr>
                <th colspan="2" class="heading_tr">Graduation</th>
            </tr>
            <tr>
                <td><label for="is_graduate">Graduated</label></td>
                <td>{{$invoice->buyer->is_graduate?"yes":"no"}}</td>
            </tr>

            @if($invoice->buyer->is_graduate)
            <tr>
                <td><label for="obtain_mark_graduate">Graduation Marks Obtained</label></td>
                <td>{{$invoice->buyer->obtain_mark_graduate}}</td>
            </tr>
            <tr>
                <td><label for="total_mark_graduate">Total Graduation Marks</label></td>
                <td>{{$invoice->buyer->total_mark_graduate}}</td>
            </tr>
            <tr>
                <td><label for="percentage_graduate">Graduation Percentage</label></td>
                <td>{{$invoice->buyer->percentage_graduate}}</td>
            </tr>
           
            <tr>
                <td><label for="graduate_course">Graduation Course</label></td>
                <td>{{$invoice->buyer->graduate_course}}</td>
            </tr>
            <tr>
                <td><label for="specify_field_subject_graduate">Field/Subject of Graduation</label></td>
                <td>{{$invoice->buyer->specify_field_subject_graduate}}</td>
            </tr>
            @else
            <tr>
                <td><label for="graduate_course">Graduation Course</label></td>
                <td>{{$invoice->buyer->graduate_course}}</td>
            </tr>
            <tr>
                <td><label for="specify_field_subject_graduate">Field/Subject of Graduation</label></td>
                <td>{{$invoice->buyer->specify_field_subject_graduate}}</td>
            </tr>
            <tr>
                <td><label for="current_year_graduate">Current Graduation Year</label></td>
                <td>{{$invoice->buyer->current_year_graduate}}</td>
            </tr>
            <tr>
                <td><label for="current_fee_structure_below_graduate">Fee Structure (Graduation)</label></td>
                <td>{{$invoice->buyer->current_fee_structure_below_graduate}}</td>
            </tr>
            @endif
            @endif

            @if($invoice->buyer->is_ssc && $invoice->buyer->is_hsc && $invoice->buyer->is_graduate)
            <tr>
                <th colspan="2" class="heading_tr">Post Graduation</th>
            </tr>
            <tr>
                <td><label for="is_post_graduate">Post Graduated</label></td>
                <td>{{$invoice->buyer->is_post_graduate?"yes":"no"}}</td>
            </tr>

            @if($invoice->buyer->is_post_graduate)

            <tr>
                <td><label for="obtain_mark_post_graduate">Post Graduation Marks Obtained</label></td>
                <td>{{$invoice->buyer->obtain_mark_post_graduate}}</td>
            </tr>
            <tr>
                <td><label for="total_mark_post_graduate">Total Post Graduation Marks</label></td>
                <td>{{$invoice->buyer->total_mark_post_graduate}}</td>
            </tr>
            <tr>
                <td><label for="percentage_post_graduate">Post Graduation Percentage</label></td>
                <td>{{$invoice->buyer->percentage_post_graduate}}</td>
            </tr>
            <tr>
                <td><label for="post_graduate_course">Post Graduation Course</label></td>
                <td>{{$invoice->buyer->post_graduate_course}}</td>
            </tr>
            <tr>
                <td><label for="specify_field_subject_post_graduate">Field/Subject of Post Graduation</label></td>
                <td>{{$invoice->buyer->specify_field_subject_post_graduate}}</td>
            </tr>
            @else
            <tr>
                <td><label for="post_graduate_course">Post Graduation Course</label></td>
                <td>{{$invoice->buyer->post_graduate_course}}</td>
            </tr>
            <tr>
                <td><label for="specify_field_subject_post_graduate">Field/Subject of Post Graduation</label></td>
                <td>{{$invoice->buyer->specify_field_subject_post_graduate}}</td>
            </tr>
            <tr>
                <td><label for="current_year_post_graduate">Current Post Graduation Year</label></td>
                <td>{{$invoice->buyer->current_year_post_graduate}}</td>
            </tr>
            <tr>
                <td><label for="current_fee_structure_below_post_graduate">Fee Structure (Post Graduation)</label></td>
                <td>{{$invoice->buyer->current_fee_structure_below_post_graduate}}</td>
            </tr>
            @endif
            @endif
            <tr>
                <th colspan="2" class="heading_tr">Declaration</th>
            </tr>
            <tr>
                <td><label for="dignitary_recommendation">Dignitary Recommendation</label></td>
                <td>{{$invoice->buyer->dignitary_recommendation?"yes":"no"}}</td>
            </tr>
            <tr>
                <td><label for="community_recommendation">Community Recommendation</label></td>
                <td>{{$invoice->buyer->community_recommendation?"yes":"no"}}</td>
            </tr>
            <tr>
                <td><label for="family_benefit_status">Family Benefit Status</label></td>
                <td>{{$invoice->buyer->family_benefit_status?"yes":"no"}}</td>
            </tr>
@if($invoice->buyer->family_benefit_status)
            <tr>
                <td><label for="family_benefit_name">Family Benefit Name</label></td>
                <td>{{$invoice->buyer->family_benefit_name}}</td>
            </tr>
@endif
            <tr>
                <td><label for="have_benefit_before_status">Previous Benefit Status</label></td>
                <td>{{$invoice->buyer->have_benefit_before_status?"yes":"no"}}</td>
            </tr>
            @if($invoice->buyer->have_benefit_before_status)
            <tr>
                <td><label for="specify_have_benefit_yr">Year of Previous Benefit</label></td>
                <td>{{$invoice->buyer->specify_have_benefit_yr}}</td>
            </tr>
            @endif
            <tr>
                <td colspan="2" class="heading_tr">
                   
                        <!--<input type="checkbox" id="declaration" name="declaration" required> -->
                        I hereby declare that the information provided is true and accurate.
                 
                </td>
            </tr>
            
                <tr>
                <td colspan="2" class="" style="text-align:right">
                    <div>
                        <img src="{{asset('storage/'.$invoice->buyer->student_sign)}}" width="150px" height="50px"/>
                    </div>
                    <label>
                       
                     {{$invoice->buyer->student_fullname}}
                    </label>
                </td>
            </tr>
            {{-- <tr>
                <td colspan="2" class="heading_tr" style="text-align:center;">
                    <input type="submit" value="Submit Application">
                </td>
            </tr> --}}
        </table>



    
    </body>
</html>
