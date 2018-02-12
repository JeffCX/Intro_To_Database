<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>NYU Course Evaluation Login</title>
    <style type="text/css">
      body{
         background: linear-gradient(white,#f2edf1,white);
      }
      img{
        width:50%;
        height:100%;
        border:1vh solid purple;
      }

      .left_decerate{
        border-left:2vh solid purple;
        border-bottom:2vh solid purple;
        border-bottom-left-radius: 20vh;
        text-align:center;

      }


      .decorate{
        margin-top:3vh;
        border-left:10px double purple;
        border-right:10px double purple;
        border-radius:20px;
        box-shadow:2px 1px 2px black;
        padding:15%;
      }

      button{
        margin:auto;
        display: block;

      }

       .seperate_more{
        margin:2vh;
      }

      .form-check-input{
        margin-left:3vh;
      }

      label{
        margin-left:6vh;
      }

      .responsive{
        width:85%;
      }

      .responsive_button{
        margin-left:2.5%;
        width:10%;
      }


      .responsive_button_sub{
        width:100%;
      }

      label{
        text-align: left;
      }

      .head_doc{
        background: purple;
        width:100%;
        height:10vh;
        line-height: 10vh;
        color:white;
      
      }
    
      h1{
        display: inline-block;
        vertical-align: middle;
        
      }

      button{
        display: inline-block
      }

      
    </style>
  </head>
  <body>
  <header class="container-fluid head_doc">
    <section class="row">
      <article class="col-sm-4 ">
          
          <h1>NYU Course Evaluation</h1>
      </article >
      <article class="col-sm-2 offset-sm-6">
          Welcome, <?php echo $_POST["NetID"]?> |
          <button class="btn btn-light"><a href="index.html">Log Out</a></button>
      </article>
    </section>
  </header>
  <form method="post" action="submit.php">
  <section class="container">
    <article class="row">
      <section class="col-sm-12 decorate">
         <h2>CATEGORY 1: Instructor/GSI-Specific Question Themes</h2>
          <ul>
            <li class="list-group-item active">Presentation of Content</li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q1_c1" name = "Instructor_Content[]" value="1">
              <label class="form-check-label" for="Instructor_q1_c1">The instructor (or GSI) clearly presented the skills to be learned
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q1_c2" name = "Instructor_Content[]" value="2">
              <label class="form-check-label" for="Instructor_q1_c2">The instructor (or GSI) effectively presented the tools (e.g. materials, skills, and techniques) needed

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q1_c3" name = "Instructor_Content[]" value="3">
              <label class="form-check-label" for="Instructor_q1_c3"> The instructor (or GSI) effectively presented concepts and techniques

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q1_c4" name = "Instructor_Content[]" value="4">
              <label class="form-check-label" for="Instructor_q1_c4">The instructor (or GSI) presented content in an organized manner

              </label>
            </li>
          </ul>

          <!--1-->
          <ul>
            <li class="list-group-item active">Clarity of Expectations or Directions
</li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q2_c1" name = "Instructor_Clarity[]" value="1">
              <label class="form-check-label" for="Instructor_q2_c1">The instructor (or GSI) explained concepts clearly

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q2_c2" name = "Instructor_Clarity[]" value="2">
              <label class="form-check-label" for="Instructor_q2_c2">The instructor (or GSI) made the elements of good writing clear


              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q2_c3" name = "Instructor_Clarity[]" value="3">
              <label class="form-check-label" for="Instructor_q2_c3"> The instructor (or GSI) clearly articulated the standards of performance for the course
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q2_c4" name = "Instructor_Clarity[]" value="4">
              <label class="form-check-label" for="Instructor_q2_c4">The instructor (or GSI) provided guidance for understanding course exercises


              </label>
            </li>
          </ul>

           <!--3-->
          <ul>
            <li class="list-group-item active">Helpfulness/Availability</li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q3_c1" name = "Instructor_Availability[]" value="1">
              <label class="form-check-label" for="Instructor_q3_c1">The instructor (or GSI) helped me achieve my goals

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q3_c2" name = "Instructor_Availability[]" value="2">
              <label class="form-check-label" for="Instructor_q3_c2">The instructor (or GSI) helped me define the goals and scope of the project


              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q3_c3" name = "Instructor_Availability[]" value="3">
              <label class="form-check-label" for="Instructor_q3_c3"> The instructor (or GSI) was readily available during the class

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q3_c4" name = "Instructor_Availability[]" value="4">
              <label class="form-check-label" for="Instructor_q3_c4">The instructor (or GSI) was helpful when I had difficulties or questions


              </label>
            </li>
          </ul>
            

             <!--1-->
          <ul>
            <li class="list-group-item active">Useful/Clear Feedback on Performance</li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q4_c1" name = "Instructor_Feedback[]" value="1">
              <label class="form-check-label" for="Instructor_q4_c1">The instructor (or GSI) provided clear constructive feedback

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q4_c2" name = "Instructor_Feedback[]" value="2">
              <label class="form-check-label" for="Instructor_q4_c2">
                The instructor (or GSI) provided useful feedback on my writing

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q4_c3" name = "Instructor_Feedback[]" value="3">
              <label class="form-check-label" for="Instructor_q4_c3"> 
                The instructor (or GSI) provided meaningful feedback on my work

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q4_c4" name = "Instructor_Feedback[]" value="4">
              <label class="form-check-label" for="Instructor_q4_c4">
                The instructor (or GSI) provided constructive feedback in response to difficulties with the language
              </label>
            </li>
          </ul>


          <ul>
            <li class="list-group-item active">Encouraging of Participation/Discussion</li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q5_c1" name = "Instructor_Inspiration[]" value="1">
              <label class="form-check-label" for="Instructor_q5_c1">The instructor (or GSI) provided clear constructive feedback

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q5_c2" name = "Instructor_Inspiration[]" value="2">
              <label class="form-check-label" for="Instructor_q5_c2">
                The instructor (or GSI) provided useful feedback on my writing

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q5_c3" name = "Instructor_Inspiration[]" value="3">
              <label class="form-check-label" for="Instructor_q5_c3"> 
                The instructor (or GSI) provided meaningful feedback on my work

              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Instructor_q5_c4" name = "Instructor_Inspiration[]" value="4">
              <label class="form-check-label" for="Instructor_q5_c4">
                The instructor (or GSI) provided constructive feedback in response to difficulties with the language

              </label>
            </li>
          </ul>

          <ul>
            <li class="list-group-item active">Overall Teaching Effectiveness</li>
            <li class="list-group-item">
              <label for="Instructor_Comment" ">Considering both the limitations and possibilities of the subject matter and the course, how would you comment the overall effectiveness of this (graduate student) instructor?</label>
              <textarea class="form-control" id="Instructor_Comment" rows="3" name="Instructor_Comment"></textarea>
            </li>
            <li class="list-group-item">
           How would you rate the overall effectiveness of the instructor’s (or GSI’s) teaching?
            <input type="range"  id="Instructor_Rate" name="Instructor_Rate" value="10" max="10"class="responsive" oninput="document.getElementById('Rate').innerHTML=document.getElementById('Instructor_Rate').value"> <span class="btn btn-primary responsive_button" id="Rate">10</span>
            </li>
          </ul>
      </section>
    </article>
  </section>

  <section class="container">
    <article class="row">
      <section class="col-sm-12 decorate">
         <h2>CATEGORY 2: Course-Specific Question Themes</h2>
          <ul>
            <li class="list-group-item active">Course Content</li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q1_c1" name = "Course_Content[]" value="1">
              <label class="form-check-label" for="Course_q1_c1">The course (or section) presented skills in a helpful sequence
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q1_c2" name = "Course_Content[]" value="2">
              <label class="form-check-label" for="Course_q1_c2">The course (or section) provided an appropriate balance between instruction and practice
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q1_c3" name = "Course_Content[]" value="3">
              <label class="form-check-label" for="Course_q1_c3"> The course (or section) was appropriate for the stated level of the class
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q1_c4" name = "Course_Content[]" value="4">
              <label class="form-check-label" for="Course_q1_c4">The lab/recitation complemented my understanding of the lectures

              </label>
            </li>
          </ul>

          <!--1-->
          <ul>
            <li class="list-group-item active">Application & Specific Skill Development
            </li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q2_c1" name = "Course_Application[]" value="1">
              <label class="form-check-label" for="Course_q2_c1">The course (or section) developed my ability to interact with diverse groups of people
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q2_c2" name = "Course_Application[]" value="2">
              <label class="form-check-label" for="Course_q2_c2">The course (or section) provided guidance on how to become a competent professional
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q2_c3" name = "Course_Application[]" value="3">
              <label class="form-check-label" for="Course_q2_c3"> The course developed my ability to read and think critically
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q2_c4" name = "Course_Application[]" value="4">
              <label class="form-check-label" for="Course_q2_c4">The course (or section) developed my abilities and skills for the subject
                </label>
            </li>
          </ul>

           <!--3-->
          <ul>
            <li class="list-group-item active">Theory/Content Knowledge</li>
            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q3_c1" name = "Course_Theory[]" value="1">
              <label class="form-check-label" for="Course_q3_c1">The instructor (or GSI) helped me achieve my goals
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q3_c2" name = "Course_Theory[]" value="2">
              <label class="form-check-label" for="Course_q3_c2">The instructor (or GSI) helped me define the goals and scope of the project
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q3_c3" name = "Course_Theory[]" value="3">
              <label class="form-check-label" for="Course_q3_c3"> The instructor (or GSI) was readily available during the class
              </label>
            </li>

            <li class="list-group-item form-check">
             <input type="checkbox" class="form-check-input" id="Course_q3_c4" name = "Course_Theory[]" value="4">
              <label class="form-check-label" for="Course_q3_c4">The instructor (or GSI) was helpful when I had difficulties or questions
              </label>
            </li>
          </ul>
            
          <ul>
            <li class="list-group-item active">Overall Teaching Effectiveness</li>
            <li class="list-group-item">
              <label for="Course_Comment" ">Considering both the limitations and possibilities of the subject matter and the course, how would you comment the overall effectiveness of this Course?</label>
              <textarea class="form-control" id="Course_Comment" rows="3" name="Course_Comment"></textarea>
            </li>
            <li class="list-group-item">
           How would you rate the Course
       
            <input type="range"  id="Course_Rate" name="Course_Rate" value="10" max="10" class="responsive" oninput="document.getElementById('Rate_Course').innerHTML=document.getElementById('Course_Rate').value"> <span class="btn btn-primary responsive_button" id="Rate_Course">10</span>
            </li>
          </ul>
      </section>
    </article>
  </section>

  <section class="container">
    <article class="row">
      <section class="col-sm-12 decorate">
        <h2>CATEGORY 3: Open-ended Questions</h2>
          <ul>
            <li class="list-group-item active">Advice and Improvement</li>
            <li class="list-group-item">
              <label for="Student_Comment" >Please identify area(s) where you think the course (or section) could be improved.</label>
              <textarea class="form-control" id="Student_Comment" rows="3" name="Student_Comment"></textarea>
            </li>

            <li class="list-group-item">
              <label for="Student_Comment" >What advice would you give to another student who is considering taking this course (or section)?</label>
              <textarea class="form-control" id="Student_Comment" rows="3" name="Student_Comment"></textarea>
            </li>
            <input type="submit" name="sub" class="btn btn-primary responsive_button_sub">
          </ul>
      </section>
    </article>
  </section>

 
 <form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>