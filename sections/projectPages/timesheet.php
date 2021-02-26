<button onclick="selectProject()">Timesheet</button>

<div id="timesheet">
    <h4 style="text-align: left; color: rgba(77, 191, 210, 0.85); margin-left: 50px; font-family: candara; font-weight: bold">
    Employee Timesheet</h4>

    <div style="margin-left: 10px; margin-right: 10px; padding-left: 30px; padding-right: 30px; padding-top: 10px; padding-bottom: 10px; background-color: rgba(167, 182, 152, 0.08); border-radius: 30px; color: rgb(210, 190, 170)">
        <p style="font-size: 17px; font-family: candara; color: rgb(173, 182, 152); font-size: 18px">
        This is a functional timesheet that I made for my current employer using Google Apps Script to add functionality to a Google Sheets spreadsheet. 
        To see a functional version click the image below to open the timesheet, make a copy of the spreadsheet and then refresh the page and a new button should appear to the right of "Help" labeled "JORDAN". 
        Open the menu and upon selecting an option you will get an alert that it needs your permission to run as the script needs to read and write to the sheets. 
        If you want to see the code, once you've made a copy under "Tools" there will be an option labelled "Script editor" where you can see the code I used. 
        </p>
        <br>
        
        <a href="https://docs.google.com/spreadsheets/d/1KLvtX0E5XLsJzfkO9iCKFv_QAl3xg28GB7cfPIQF7Co/edit?usp=sharing" target="_blank">
            <img src="https://raw.githubusercontent.com/jAdelaide/Portfolio/shove/assets/Timesheet.png" alt="Screenshot of the timesheet" title="Open the timesheet in a new tab" height="auto" width="103%" style="margin-left: -1.5%">
        </a>
        <br><br>
        
        <h5 style="padding-bottom: 0px; text-align: left; color: rgba(77, 191, 210, 0.8); margin-left: 10px; font-family: candara">Input sheet functions</h5>
        
        <p style="font-size: 17px; font-family: candara; color: rgb(173, 182, 152); font-size: 18px">
        There are a number of small rules on the input page that didn't even require GAS to accomplish. 
        Each of the 4 columns have been set to accept different types of data and give different prompts just using the "Data validation" tab under the "Data" item menu in sheets. 
        Using this, I was quickly able to set the week number and hours done columns to only accept a number as an input, and only a number up to 53 for the week number. 
        I was provided the list of activities to start with but was also told to make it so people could add their own items. 
        To do this, I copied the list into the "Summary" sheet and then set the data validation for the "Activity" row in the "Input" sheet to be a list from the range of the first activity on the "Summary" sheet down to row 100. 
        This means the 20 activities in the list were now items in the dropdown list on the "Activity" input column and all anyone had to do to add new items was add the title to the bottom of the list on the "Summary" sheet. 
        Anyone using the spreadsheet can also reorder the activities in the dropdown menu by reordering the list on the "Summary" sheet. 
        <br>
        There is also an indicator of the current week on the "Input" sheet which was just achieved by giving the cell the value =ISOWEEKNUM(NOW()).
        </p>
        
        
        <h5 style="padding-bottom: 0px; text-align: left; color: rgba(77, 191, 210, 0.8); margin-left: 10px; font-family: candara">Navigation buttons</h5>
        
        <p style="font-size: 17px; font-family: candara; color: rgb(173, 182, 152); font-size: 18px">
            The majority of the buttons I added to the sheet were for ease of navigation; they give the user a quick way to jump to any specific week number, this current week or back to the input (home) page. 
            These were all pretty simple to code as they just required a function to 'activate' the sheet by it's name (e.g. Input or 1 for week 1). 
        </p>


        <h5 style="padding-bottom: 0px; text-align: left; color: rgba(77, 191, 210, 0.8); margin-left: 10px; font-family: candara">Update hours</h5>
        
        <p style="font-size: 17px; font-family: candara; color: rgb(173, 182, 152); font-size: 18px">
            There were a few ways my employer wanted to be able to record our hours: an overall summary of all the activities and how long has been spent on each, a week view where you could see which activities were done and how long was spent on them for each and an overview of the year that shows just the number of hours worked in each week of the year. 
            The overview of the year was done simply using a grid of cells with the value =CONCATENATE(n," (",SUM('n'!C1:C100),")") - where n represents the week number and C1:C100 represents the first 100 entries in the hours column on that weeks unique sheet. 
            This totals up the number of hours across all activities for that week with the "SUM" function and then prints the week number (w) and number of hours (h) in the format w (h) and automatically updates if any of the cells in the weeks C column are updated. 
            <br><br>
            I combined the other two types of record into a single function that would update both the "Summary" sheet and the relevant sheets for the individual weeks, and would then clear the input sheet. 
            For this, I made a function that would read each of the activity names from the input sheet, scan the "Summary" sheet for a match and then add on the extra hours. 
            Once this is done, it goes through each line again, this time grabbing the week number and jumping to that sheet where it adds the activity, comments and hours completed. 
            Finally, it just clears all the values from the table.
        </p>
        
    </div>
</div>

<script>
    function selectProject() {
        var x = document.getElementById("timesheet");
        if (x.style.display === "none") {
            x.style.display = "block";
        }
        else {
            x.style.display = "none";
        }
    }
</script>