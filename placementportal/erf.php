<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Employer Registratio Form</title>
  </head>
  <body>
    <h2>Employer Registration Form</h2>

    <form action="erf.php" method="post" id="erf">

      <label for="company_name">Name of the Company : </label>
      <input type="text" id="company_name" name="company_name"><br>

      <label for="web_address">Website Adress : </label>
      <input type="url" id="web_address" name="web_address"><br>

      <label for="nature_of_business">Nature of Business : </label>
      <input type="radio" id="core" name="nature_of_business" value="core">
      <label for="core">Core </label>
      <input type="radio" id="consulting" name="nature_of_business" value="consulting">
      <label for="consulting">Consulting </label>
      <input type="radio" id="management" name="nature_of_business" value="management">
      <label for="management">Management </label>
      <input type="radio" id="Finance" name="nature_of_business" value="Finance">
      <label for="Finance">Finance </label>
      <input type="radio" id="PSU" name="nature_of_business" value="PSU">
      <label for="PSU">PSU </label>
      <input type="radio" id="fmcg" name="nature_of_business" value="fmcg">
      <label for="fmcg">FMCG </label>
      <input type="radio" id="it" name="nature_of_business" value="it">
      <label for="it">IT </label><br>
      <label for="others">Others(Please Specify) : </label>
      <input type="text" name="nature_of_business"><br>

      <label for="contact_person">Contact Person : </label>
      <input type="text" name="contact_person" id="contact_person"><br>

      <label for="email_address">E-mail Address : </label>
      <input type="email" name="email_address" id="email_address"><br>

      <label for="contact_address">Contact Address : </label>
      <input type="text" name="contact_address" id="contact_address"><br>

      <!-- Add telephone option -->

      <label for="mobile">Mobile : +91</label>
      <input type="text" name="mobile" id="mobile"><br>

      <label for="fax">Fax : </label>
      <input type="text" name="fax" id="fax" ><br>

      <label for="job_designated_offer">Job Designated Offer : </label>
      <input type="text" name="job_designated_offer" id="job_designated_offer"><br>

      <!--Degree/Discipline of stdents required..some table..-->

      <label for="job_description">Job Description : </label><br>
      <textarea name="job_description" id="job_description" rows="8" cols="40">Enter text here</textarea><br>

      <label for="bond_details">Details of bond(if any) : </label><br>
      <textarea name="bond_details" id="bond_details" rows="8" cols="40">Enter text here</textarea><br>

      <label for="resume_mod">Resumes to be sent : </label>
      <input type="checkbox" name="resume_mod" id="online" value="online">
      <label for="online">Online</label>
      <input type="checkbox" name="resume_mod" id="hard_copy" value="hard_copy">
      <label for="online">Hard Copy</label><br>

      <label for="email_id_for_resume">If online, the email ID to which the resumes  are to be sent : </label>
      <input type="email" name="email_id_for_resume" id="email_id_for_resume"><br>

      <label for="aptitude_test">Aptitude Test : </label>
      <input type="radio" name="aptitude_test" id="apt_yes" value="yes">
      <label for="apt_yes">Yes</label>
      <input type="radio" name="aptitude_test" id="apt_no" value="no">
      <label for="apt_yes">No</label><br>

      <label for="technical_test">Technical Test : </label>
      <input type="radio" name="technical_test" id="tech_yes" value="yes">
      <label for="tech_yes">Yes</label>
      <input type="radio" name="technical_test" id="tech_no" value="no">
      <label for="tech_yes">No</label><br>

      <label for="topics">If yes, please specify likely topics/skill sets : </label><br>
      <textarea name="topics" id="topics" rows="8" cols="40">Enter text here</textarea><br>

      <label for="group_discussion">Group Discussion : </label>
      <input type="radio" name="group_discussion" id="gd_yes" value="yes">
      <label for="gd_yes">Yes</label>
      <input type="radio" name="group_discussion" id="gd_no" value="no">
      <label for="gd_yes">No</label><br>

      <label for="p_i">Personal Interview : </label>
      <input type="radio" name="p_i" id="pi_yes" value="yes">
      <label for="pi_yes">Yes</label>
      <input type="radio" name="p_i" id="pi_no" value="no">
      <label for="pi_yes">No</label><br>

      <label for="no_official">No. of Officials visiting our campus : </label>
      <input type="number" name="no_official" min="1" max="100" step="1"><br>

      <label for="date_time">Date and Time (dd/mm/yy) : </label>
      <input type="text" name="date_time" id="date_time">

      <input type="submit" name="submit" id="submit" value="Submit">
    </form>
  </body>
</html>
