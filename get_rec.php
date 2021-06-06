<?php
include("DBconnect.php");
include('header.php');
?>


    
    
    
    
    <section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
        <div class="container">
            <div class="intro" style="margin-top: 0;margin-bottom: 0;">
                <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-weight: bold;line-height: 88px;border-bottom: 5px solid var(--red);border-radius: 0px;font-size: 30px;text-align: center;"><strong>Recommendation</strong></h2>
            </div>
        </div>
    </section>










    <form id="regForm" action="recommendation.php" method="post">
        <h1></h1>
        <!-- One "tab" for each step in the form: -->

        <div class="tab">Do you have fever/cough/tiredness?
            <p><select class="form-control" name="health_status">
                <option value="yes">Yes</option>
                <option value="no">No</option>
                </select></p>
        </div>

        <div class="tab">How old are you?
            <p><input placeholder="Type your age (E.g. 40)" oninput="this.className = ''" name="age" type="number"></p>
        </div>


        <div class="tab">Did you take vaccine?
            <p><select class="form-control" name="vaccine_status">
                <option value="yes2">Yes</option>
                <option value="no2">No</option>
                </select></p>
        </div>
        
        
        <div class="tab">Medical expenses you can afford?
            <p><input placeholder="Write maximum amount (E.g. 14200)" oninput="this.className = ''" name="money" type="number"></p>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
        </div>
    </form>

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("regForm").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }

    </script>




<?php include('footer.php');?>


